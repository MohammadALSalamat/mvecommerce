<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\product;
use App\Models\delivery;
use PDF;
use App\Models\productOrder;
use Illuminate\Http\Request;
use App\Jobs\delivery_status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class DeliveryController extends Controller
{
    public function showloginpage_delivery()
    {
       return view('delivery.auth.login');
    }

    public function login_delivery(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('delivery')->attempt(['email' => $email, 'password' => $password])) {
        return redirect()->intended(route('delivery'))->with('message','welcome delivery Company');
        }else{
            return back()->with('error','you dont have permission');
        }
    }

     // admin dashboard
     public function dashboard(){
        $current_user = delivery::find(Auth::guard('delivery')->user()->id);
        $Orders = Order::latest()->paginate(6); // last 6 orders
        $order_product = product::with('orders')->get(); // sellers products
        // seller product that got sold
        $total = array(); // get the profit of seller 
        if ($order_product->count() > 0) {
            foreach ($order_product as $profit) {
                $sold_product = productOrder::where('product_id', $profit->id)->get();
                $countSoldProduct = productOrder::count();
                foreach ($sold_product as $total_prodcut) {
                    // get the total of  products
                    $total_products = product::where('id', $total_prodcut->product_id)->get();
                        foreach ($total_products as $totals_prodcut) {
                             if (!empty($totals_prodcut->offer_price) || $totals_prodcut->offer_price != null) {
                                 array_push($total, ($totals_prodcut->offer_price * $total_prodcut->quantity));
                             } else {
                                 array_push($total, ($totals_prodcut->price * $total_prodcut->quantity));
                             }
                         }
                     }
                 }
             }else{
                 array_push($total, 0);
                 $sold_product = productOrder::where('product_id', $current_user->id)->get();
                 $countSoldProduct = 0;
             }
        if($current_user){
            return view('delivery/backend_pages.dashboard',compact('current_user','Orders',)); 
        }else{
            return redirect()->route('homepage')->with('error','you do not have permission to access !!!');
        }
    }

    public function delivery_view_order()
    {
        $Orders = Order::get();
        return view('delivery.backend_pages.orders.vieworders',compact('Orders'));
    }

    public function delivery_singleOrder($id)
    {
       $order = Order::find($id);

       
      
       if($order){
        return view('delivery.backend_pages.orders.singleOrder',compact('order'));
       }else{
           return back()->with('error','this Id is not found');
       }
    }

    // view the invoice 
    public function delivery_invoice_template($id)
    {
        $order = Order::find($id);
        if($order){
            return view('delivery.backend_pages.orders.invoice',compact('order'));
           }else{
               return back()->with('error','this Id is not found');
           }
    }
    public function delivery_generateInvoicePDF($id)
    {
        $order = Order::find($id);
        $pdf = PDF::loadView('general-invoic',compact('order'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('general-invoic.pdf');
    }

    public function update_order_status(Request $request,$id)
    {
        $data = $request->all();
        $current_order = Order::find($id);
        if($current_order->order_number == $data['order_number']){
            $data_info_email =
            [
                'email' => User::where('id',$current_order->user_id)->value('email'),
                'full_name' => User::where('id',$current_order->user_id)->value('full_name'),
                'Order_status' => $data['orderStatus'],
                'order_number' => $data['order_number'],
            ];

        dispatch(new delivery_status($data_info_email));
           

            Order::where('order_number',$data['order_number'])->update([
                'payment_status'=>$data['orderStatus'],
            ]);

            return back()->with('message','the user delivery status has been changed');

        }else{
            return back()->with('error','Order is not there ');
        }
    }

    public function switchLang($lang)
    {
       if(array_key_exists($lang,Config::get('languages'))){
        Session::put('applocale',$lang);
       }
       return Redirect::back();
    }

}
