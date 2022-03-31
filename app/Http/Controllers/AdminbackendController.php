<?php

namespace App\Http\Controllers;

use App\Models\Adminview;
use App\Models\Order;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminbackendController extends Controller
{
    // admin dashboard
    public function dashboard(){
        $current_user = Adminview::find(Auth::guard('admin')->user()->id);
        $count_vendors = Seller::where('status',0)->count();
        $products_sold = Order::where('status' , 1)->count();
        $Orders = Order::latest()->paginate(6);
        if($current_user){
            return view('backend/backend_pages.dashboard',compact('current_user','count_vendors','Orders','products_sold')); 
        }else{
            return redirect()->route('homepage')->with('error','you do not have permission to access !!!');
        }
    }
}
