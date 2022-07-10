<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Seller;
use App\Models\product;
use App\Models\category;
use App\Models\productOrder;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SellerController extends Controller
{
    //adminn show page

    public function showloginpage()
    {
        return view('Seller.auth.login');
    }
    public function documentaion()
    {
        return view('Seller.documentaion.documentaioin_seller');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('seller')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended(route('seller'))->with('message', 'welcome Seller');
        } else {
            return back()->with('error', 'you dont have permission');
        }
    }
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
    // admin dashboard
    public function dashboard(){
        $current_user = Seller::find(Auth::guard('seller')->user()->id);

        $notify_subscripe = subscription::where('seller_id',$current_user->id)->first();

        $message_notify = null;
        if(!empty($notify_subscripe) || $notify_subscripe != null){
            if(Carbon::parse($notify_subscripe->ends_at)->diffInDays(Carbon::now()) < 20 ){
            $message_notify ='your days left is less than 10 days please subscripe before /  '. $notify_subscripe->ends_at .'/ Just ' . Carbon::parse($notify_subscripe->ends_at)->diffInDays(Carbon::now()) . ' Days left Otherwise your account will not work';
            }

            if(Carbon::parse($notify_subscripe->ends_at)->diffInDays(Carbon::now()) <= 0 ){
                Seller::where('id',$current_user->id)->update([
                    'is_verify'=> 0,
                ]);
            }
        }

        $count_vendors = User::where('status',0)->count();

        $products_sold = Order::count();

        $Orders = Order::latest()->get(); // last 6 orders

        $order_product = product::orderBy('id','DESC')->with('orders')->where('vendor_id',$current_user->id)->where('added_by','seller')->take(6)->get();

        $Total_order_products =  product::orderBy('id','DESC')->with('orders')->where('vendor_id',$current_user->id)->where('added_by','seller')->get();
      
        $products = product::where('vendor_id',$current_user->id)->where('added_by','seller')->count();
        // seller product that got sold
        
        $total = array(); // get the profit of seller 
        $sold_products = array();
        if ($Total_order_products->count() > 0) {
            foreach ($Total_order_products as $profit) {
                    $sold_product = productOrder::where('product_id', $profit->id)->get();
                    $countSoldProduct = count($profit->orders);
                   array_push($sold_products,$countSoldProduct);
                    foreach ($sold_product as $total_prodcut) {
                        // get the total of  products
                        $total_products = product::where('id', $total_prodcut->product_id)->get();
                        foreach ($total_products as $totals_prodcut) {
                            if (!empty($totals_prodcut->offer_price) || $totals_prodcut->offer_price != null) {
                                $total_offer_price = $totals_prodcut->offer_price * $total_prodcut->quantity;

                                array_push($total, $total_offer_price);
                            } else {
                                $total_price = $totals_prodcut->price * $total_prodcut->quantity;

                                array_push($total, $total_price);
                            }
                        }
                    }
                }
            }else{
                array_push($total, 0);
                $sold_product = productOrder::where('product_id', $current_user->id)->get();
                array_push($sold_products, 0);
            }
        if($current_user){
            return view('Seller.seller_pages.dashboard',compact('message_notify','Orders','sold_products','sold_product','total','current_user','count_vendors','order_product','products_sold','products')); 
        }else{
            return redirect()->route('homepage')->with('error','you do not have permission to access !!!');
        }
    }
}
