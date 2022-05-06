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
use Illuminate\Support\Facades\Auth;
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
        $count_vendors = User::where('status',0)->count();
        $products_sold = Order::count();
        $Orders = Order::latest()->get(); // last 6 orders
        $order_product = product::with('orders')->where('vendor_id',$current_user->id)->where('added_by','seller')->get();
        $products = product::where('vendor_id',$current_user->id)->where('added_by','seller')->count();

        //check if subscripe
        $subscriptions_reminder_email = subscription::where('seller_id',$current_user->id)->first();

        if(now()->diffInDays(Carbon\Carbon::parse($subscriptions_reminder_email->ends_at) > 29){

        }
        // seller product that got sold
        $total = array(); // get the profit of seller 
        if ($order_product->count() > 0) {
            foreach ($order_product as $profit) {
                    $sold_product = productOrder::where('product_id', $profit->id)->get();
                    $countSoldProduct = productOrder::where('product_id', $profit->id)->count();
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
                $countSoldProduct = 0;
            }
        if($current_user){
            return view('Seller.seller_pages.dashboard',compact('Orders','countSoldProduct','sold_product','total','current_user','count_vendors','order_product','products_sold','products')); 
        }else{
            return redirect()->route('homepage')->with('error','you do not have permission to access !!!');
        }
    }
}
