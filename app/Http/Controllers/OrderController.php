<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderEmail as userOrderMail;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Mail\OrderEmailForAdmin as adminOrderMail;

class OrderController extends Controller
{
    //view checkout page

    public function view_checkout()
    {
        return view('frontend.frontend_pages.checkout.checkout');
    }
    public function checkout_process(Request $request)
    {
        $data = $request->all();

        if(empty($data['full_name']) || $data['full_name'] == null){
            return back()->with('error','Billing Full Name Feild Is Required');
        }
        if (empty($data['city']) || $data['city'] == null) {
            return back()->with('error', 'Billing City Feild Is Required');
        }
        if (empty($data['address']) || $data['address'] == null) {
            return back()->with('error', 'Billing Address Feild Is Required');
        }
        if (empty($data['country']) || $data['country'] == null) {
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
        if (empty($data['scountry']) || $data['scountry'] == null) {
            $scountry = $data['country'];
        } else {
            $scountry = $data['scountry'];
        }
        if (empty($data['scity']) || $data['scity'] == null) {
            $scity = $data['city'];
        } else {
            $scity = $data['scity'];
        }
        if (empty($data['state']) || $data['state'] == null) {
            return back()->with('error', 'Bbilling State Feild Is Required');
        }
        if (empty($data['spostcode']) || $data['spostcode'] == null) {
            $spostcode = $data['postcode'];
        }else{
            $spostcode = $data['spostcode'];
        }
        if (empty($data['sstate']) || $data['sstate'] == null) {
            $sstate = $data['state'];
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
        

        if (!empty($data['total_without_copuon']) || $data['total_without_copuon'] != null) {
            $total = $data['total_without_copuon'];
        }elseif(!empty($data['total_with_copuon']) || $data['total_with_copuon'] != null){
            $total = $data['total_with_copuon'];
        }else{
            $total = 0;
        }

        $final_total = $total + $shipping_paid;
        $ordernumber = '00'.rand(1,10000000);



        $userInfo = User::where('id',$data['user_id'])->first();
        if ($userInfo) {
            $order = new Order();
            $order->user_id = $data['user_id'];
            $order->full_name = $data['full_name'];
            $order->sfull_name = $sfull_name;
            $order->city = $data['city'];
            $order->country = $data['country'];
            $order->address = $data['address'];
            $order->state = $data['state'];
            $order->scity = $scity;
            $order->scountry = $scountry;
            $order->sstate = $sstate;
            $order->saddress = $saddress;
            $order->email = $data['email'];
            $order->note = $data['note'];
            $order->phone = $data['phone'];
            $order->postcode = $data['postcode'];
            $order->spostcode = $data['spostcode'];
            $order->order_number = $ordernumber;
            $order->total = $final_total;
            $order->sub_total = $total;
            $order->payment_method = $data['cod'];
            $order->condition = 'pending';
            $order->status = 0;
            $order->delivary_charge = $shipping_paid;
            $order->coupon = $coupon_value;

            $save_order = $order->save();

            if($save_order){
                Mail::to($data['email'])->send(new userOrderMail($data));
                Mail::to('alomda.alslmat@gmail.com')->send(new adminOrderMail($data));
                return redirect()->route('userdashboard')->with('message','Congrats You have complate the order check your email for recipt');

            }else{
                return back()->with('error','sorry there is an error , kindly check your Details');
            }

        }else{
            return redirect()->route('loginForm')->with('error','Sorry , You Have To Login First');
        }
    }
}
