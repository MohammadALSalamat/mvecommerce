<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Seller;
use App\Models\product;
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
        $products_sold = Order::where('status' , 1)->count();
        $order_product = product::with('orders')->where('vendor_id',$current_user->id)->where('added_by','seller')->get();
        $products = product::where('vendor_id',$current_user->id)->where('added_by','seller')->count();
        if($current_user){
            return view('Seller.seller_pages.dashboard',compact('current_user','count_vendors','order_product','products_sold','products')); 
        }else{
            return redirect()->route('homepage')->with('error','you do not have permission to access !!!');
        }
    }
}
