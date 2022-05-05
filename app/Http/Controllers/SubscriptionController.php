<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{
    public function viewcardPayment(Request $request)
    {
        $data = $request->all();
        if(session()->has('strip_plan')){
            Session::put('strip_plan',$data);
        }else{
            Session::forget('strip_plan');
            Session::put('strip_plan',$data);
        }
       
        $current_seller = Seller::find(Auth::guard('seller')->user()->id);

        return view('Seller.seller_layoute.paymentCard.testcardPayment',compact('current_seller'));
    }


    public function get_card_info(Request $request, $id)
    {
        $data = $request->all();
        dd($data);
        dd(Session::get('strip_plan'));
    }

}
