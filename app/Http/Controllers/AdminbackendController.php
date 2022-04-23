<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Seller;
use App\Models\product;
use App\Models\Adminview;
use App\Models\productOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminbackendController extends Controller
{
    // admin dashboard
    public function dashboard(){
        $current_user = Adminview::find(Auth::guard('admin')->user()->id);
        $count_vendors = Seller::where('status',0)->count();
        $products_sold = Order::count();
        $Orders = Order::latest()->paginate(6); // last 6 orders
        $order_product = product::with('orders')->get(); // sellers products
        $products = product::count(); // all products
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
            return view('backend/backend_pages.dashboard',compact('products','countSoldProduct','total','current_user','count_vendors','Orders','products_sold')); 
        }else{
            return redirect()->route('homepage')->with('error','you do not have permission to access !!!');
        }
    }
}
