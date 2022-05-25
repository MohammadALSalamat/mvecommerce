<?php

namespace App\Http\Controllers\seller;

use PDF;
use App\Models\Order;
use App\Models\Seller;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerOrderController extends Controller
{
    //Seller orders

    public function view_order()
    {
        $current_user = Seller::find(Auth::guard('seller')->user()->id);

        $Orders = product::orderBy('id','DESC')->with('orders')->where('vendor_id',$current_user->id)->where('added_by','seller')->get();
        
        return view('Seller.seller_pages.orders.vieworders',compact('Orders'));
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
