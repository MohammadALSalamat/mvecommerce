<?php

namespace App\Http\Controllers\seller;

use App\Models\Order;
use App\Models\Seller;
use App\Models\product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

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
        return view('Seller.seller_pages.orders.singleOrder',compact('order'));
       }else{
           return back()->with('error','this Id is not found');
       }
    }

    // view the invoice 
    public function invoice_template($id)
    {
        $order = Order::find($id);
        if($order){
            return view('Seller.seller_pages.orders.invoice',compact('order'));
           }else{
               return back()->with('error','this Id is not found');
           }
    }
    public function generateInvoicePDF($id)
    {
        $order = Order::find($id);
        

        $pdf = App::make('dompdf.wrapper');
        $contxt= stream_context_create([
            'ssl'=>[
                'verfiy_peer' =>FALSE,
                'verfiy_peer_name' =>FALSE,
                'allow_self_signed'=>TRUE
            ]
            ]);
            $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'dejavu sans','isHtml5ParserEnabled'=>true,'isRemoteEnabled'=>true]);
            $pdf->getDomPDF()->setHttpContext($contxt);
            $pdf = PDF::loadView('general-invoic',compact('order'));
            
            return $pdf->download('#INV-'.$order->order_number.'-invoic.pdf');
    }
}
