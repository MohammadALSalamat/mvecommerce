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
        return view('frontend.frontend_pages.checkout.checkout', compact('shipping_adress','user','countries'));
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
        $coutryName = Country::where('id',$data['country'])->first();
        $stateName = Region::where("id",$data['state'])->first();
        $cityNamme = City::where("region_id",$stateName['id'])->first();
        if(empty($data['full_name']) || $data['full_name'] == null){
            return back()->with('error','Billing Full Name Feild Is Required');
        }
        if (empty($cityNamme['city']) || $cityNamme['city'] == null) {
            $city = $stateName['region'];
        }else{
            $city = $cityNamme['city'];
        }
        if (empty($data['address']) || $data['address'] == null) {
            return back()->with('error', 'Billing Address Feild Is Required');
        }
        if (empty($coutryName['country']) || $coutryName['country'] == null) {
            return back()->with('error', 'Billing Country Feild Is Required');
        }
        if (empty($data['postcode']) || $data['postcode'] == null) {
            return back()->with('error', 'Billing Post Code Feild Is Required');
        }
        if (empty($data['email']) || $data['email'] == null) {
            return back()->with('error', 'Billing Email Feild Is Required');
        }
        if (empty($data['phone']) || $data['phone'] == null) {
            return back()->with('error', 'Billing Phone Feild Is Required');
        }
        if (empty($data['cod']) || $data['cod'] == null) {
            return back()->with('error', 'Billing Phone Feild Is Required');
        }
        if (empty($data['scountry']) || $data['scountry'] == null) {
            $scountry = $coutryName;
        } else {
            $scountry = $data['scountry'];
        }
        if (empty($data['scity']) || $data['scity'] == null) {
            $scity = $city;
        } else {
            $scity = $data['scity'];
        }
        if (empty($stateName['region']) || $stateName['region'] == null) {
            return back()->with('error', 'Billing State Feild Is Required');
        }
        if (empty($data['spostcode']) || $data['spostcode'] == null) {
            $spostcode = $data['postcode'];
        }else{
            $spostcode = $data['spostcode'];
        }
        if (empty($data['sstate']) || $data['sstate'] == null) {
            $sstate = $stateName['region'];
        } else {
            $sstate = $data['sstate'];
        }
        if (empty($data['sfull_name']) || $data['sfull_name'] == null) {
            $sfull_name = $data['full_name'];
        } else {
            $sfull_name = $data['sfull_name'];
        }

        if (empty($data['saddress']) || $data['saddress'] == null) {
            $saddress = $data['address'];
        } else {
            $saddress = $data['saddress'];
        }

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
        $ordernumber = rand(1,10000000);
        
        $userInfo = User::where('id',$data['user_id'])->first();
        if ($userInfo) {
            $order = new Order();
            $order->user_id = $data['user_id'];
            $order->full_name = $data['full_name'];
            $order->sfull_name = $sfull_name;
            $order->city = $city;
            $order->country = $coutryName['country'];
            $order->address = $data['address'];
            $order->state = $stateName['region'];
            $order->scity = $scity;
            $order->scountry = $scountry;
            $order->sstate = $sstate;
            $order->saddress = $saddress;
            $order->email = $data['email'];
            $order->note = $data['note'];
            $order->phone = $data['phone'];
            $order->sphone = $data['phone'];
            $order->postcode = $data['postcode'];
            $order->spostcode = $data['spostcode'];
            $order->order_number = $ordernumber;
            $order->total = $final_total;
            $order->sub_total = (float) str_replace(',','',$total);
            $order->payment_method = $data['cod'];
            // $order->condition = 'pending';
            // $order->status = 0;
            $order->delivary_charge = $shipping_paid;
            $order_email_imfo = [
                'full_name' => $data['full_name'],
                'sfull_name' => $sfull_name,
                'city' => $city,
                'country' => $coutryName['country'],
                'address' => $data['address'],
                'state' => $stateName['region'],
                'scity' => $scity,
                'scountry' => $scountry,
                'sstate' => $sstate,
                'saddress' => $saddress,
                'email' => $data['email'],
                'note' => $data['note'],
                'phone' => $data['phone'],
                'sphone' => $data['phone'],
                'postcode' => $data['postcode'],
                'spostcode' => $data['spostcode'],
                'order_number' => $ordernumber,
                'total' => $final_total,
                'sub_total' => $total,
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
                        dispatch(new orderVendorEmail($data,$vendor_email));
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
