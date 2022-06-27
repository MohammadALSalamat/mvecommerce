<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\City;
use App\Models\User;
use App\Models\Order;
use App\Models\State;
use App\Models\Region;
use App\Models\Seller;
use App\Models\Country;

use App\Models\product;
use App\Jobs\OrderEmail;
use App\Models\Shipping;
use App\Models\userLocation;
use Illuminate\Http\Request;
use App\Jobs\orderVendorEmail;
use App\Jobs\OrderEmailForAdmin;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    //view checkout page

    public function view_checkout()
    {
        $user = User::where('id',auth()->user()->id)->first();
        $shipping_adress = Shipping::where('status',1)->get();
        $countries = Country::get(["country", "id"]);
        $locations = userLocation::orderBy('themain_address','DESC')->where('user_id',auth()->user()->id)->where('themain_address',1)->first();
        $user_locations = userLocation::orderBy('themain_address','DESC')->where('user_id',auth()->user()->id)->get();

        return view('frontend.frontend_pages.checkout.checkout', compact('shipping_adress','user','countries','locations','user_locations'));
    }

    // cities and countries dropdown

    public function fetchState(Request $request)
    {
        $data['states'] = Region::where("country_id",$request->country_id)->get(["region", "id"]);
       return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("region_id",$request->state_id)->get(["city", "id"]);
        return response()->json($data);
    }

    public function checkout_process(Request $request)
    {
        $data = $request->all();
        if(empty($data['location_id_selected']) || $data['location_id_selected'] == null){
            return back()->with('error','Please add an address to deliver.');
        }
        $locations = userLocation::find($data['location_id_selected']);
        
        $coutryName = $locations->country;
        $stateName = $locations->city;
        $address_near_locaction = $locations->near_location;
        $full_name = $locations->full_name;
        $phone = $locations->phone;
        $full_address = $locations->full_street_info;
        $street = $locations->address;


        if (empty($data['sub_total']) || $data['sub_total'] == null) {
            return back()->with('error', 'There is an error with the system Please Try later');
        }
        if (empty($data['copoun_value']) || $data['copoun_value'] == null) {
            $coupon_value = 0;
        }else{
            $coupon_value = $data['coupon_value'];
        }

        if (empty($data['shipping_paid']) || $data['shipping_paid'] == null) {
            $shipping_paid = 0;
        }else{
            $shipping_paid = $data['shipping_paid'];
        }
        

        if (!empty($data['total_without_copuon']) || $data['total_without_copuon'] != 0) {

            $total = $data['total_without_copuon'];

        }elseif(!empty($data['total_with_copuon']) || $data['total_with_copuon'] != 0){

            $total = $data['total_with_copuon'];
        }else{
            $total = 0;
        }

        if($shipping_paid == 0){
            $final_total = $total;  
        }else{
            $final_total = (float) str_replace(',','',$total) + $shipping_paid;
        }


        // dd($final_total);

        $ordernumber = rand(1,10000000);
        
        $userInfo = User::where('id',$data['user_id'])->first();
        if ($userInfo) {
            $order = new Order();
            $order->user_id = $data['user_id'];
            $order->full_name = $full_name;
            $order->sfull_name = $full_name;
            $order->city = $stateName;
            $order->country = $coutryName;
            $order->address = $street.','.$full_address;
            $order->state = $stateName;
            $order->scity = $stateName;
            $order->scountry = $coutryName;
            $order->sstate = $stateName;
            $order->saddress = $street.','.$full_address;
            $order->email = $userInfo->email;
            $order->note = null;
            $order->phone = $phone;
            $order->sphone = $phone;
            $order->postcode = $address_near_locaction;
            $order->spostcode = $address_near_locaction;
            $order->order_number = $ordernumber;
            $order->total = (float) str_replace(',','',$final_total);
            $order->sub_total = (float) str_replace(',','',$total);
            $order->payment_method = $data['cod'];
            // $order->condition = 'pending';
            // $order->status = 0;
            $order->delivary_charge = $shipping_paid;
            $order_email_imfo = [
                'full_name' => $full_name,
                'sfull_name' => $full_name,
                'city' => $stateName,
                'country' => $coutryName,
                'address' => $street.','.$full_address,
                'state' => $stateName,
                'scity' => $stateName,
                'scountry' => $coutryName,
                'sstate' => $coutryName,
                'saddress' => $street.','.$full_address,
                'email' => $userInfo->email,
                'phone' => $phone,
                'sphone' => $phone,
                'order_number' => $ordernumber,
                'total' => $final_total,
                'sub_total' => $total,
                'full_address'=>$address_near_locaction,
                'coupon'=>$coupon_value,
                'payment_method' => $data['cod'],
                'delivary_charge'=>$shipping_paid,
                'count_items' => count(Cart::instance('shopping')->content())
            ];
            
            try {
                dispatch(new OrderEmail($order_email_imfo));
                dispatch(new OrderEmailForAdmin($order_email_imfo));
            } catch (\Throwable $th) {
                return back()->with('error','there is something went wrong, your order did not complate yet!!');
            }
            
            $save_order = $order->save();
            
            // get the data of the order and send it to order page for invoice
            foreach(Cart::instance('shopping')->content() as $item){
                $product_id[]=$item->id;
                $order_id =  $order->id;
                $product_items = product::find($item->id);
                $quantity = $item->qty;
                
                $order->product()->attach($product_items,['quantity'=>$quantity]);
                // send email to vendor
                $vendors_toSend_email = Seller::where(['id'=>$product_items->vendor_id])->get();
                foreach($vendors_toSend_email as $vendor_email){
                    if(!empty($vendor_email)){
                        $data_for_vendor =[
                            'vendor_name' => $vendor_email->full_name,
                            'qnt' =>$quantity,
                            'order_number'=>$ordernumber,
                            'order_details'=>$order->product,
                        ];
                        dd($data_for_vendor);
                        dispatch(new orderVendorEmail($data_for_vendor,$vendor_email));
                    }
                }
            }
            if($save_order){
                // delete the cart items after submistions
                Cart::instance('shopping')->destroy();
                Session::forget('coupon');
                return redirect()->route('userdashboard')->with('message','Congrats You have complate the order check your email for recipt');

            }else{
                return back()->with('error','sorry there is an error , kindly check your Details');
            }

        }else{
            return redirect()->route('loginForm')->with('error','Sorry , You Have To Login First');
        }
    }


    // backend order view and controller

    public function view_order()
    {
        $Orders = Order::get();
        return view('backend.backend_pages.orders.vieworders',compact('Orders'));
    }

    public function singleOrder($id)
    {
       $order = Order::find($id);
       if($order){
        return view('backend.backend_pages.orders.singleOrder',compact('order'));
       }else{
           return back()->with('error','this Id is not found');
       }
    }

    // view the invoice 
    public function invoice_template($id)
    {
        $order = Order::find($id);
        if($order){
            return view('backend.backend_pages.orders.invoice',compact('order'));
           }else{
               return back()->with('error','this Id is not found');
           }
    }
    public function generateInvoicePDF($id)
    {
        $order = Order::find($id);
        $pdf = PDF::loadView('general-invoic',compact('order'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('general-invoic.pdf');
    }
}
