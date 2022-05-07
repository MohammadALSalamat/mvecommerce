<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{

    // get the stripe data 
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

     // get the data from the card then update the seller status
    public function get_card_info(Request $request, $id)
    {
        $data = $request->all();
        $seller_id = Seller::where('status',1)->where('id',$id)->first();
        $add_subscribe_data = new subscription();
        $add_subscribe_data->seller_id = $data['seller_id'];
        $add_subscribe_data->name = $data['card_name'];
        $add_subscribe_data->stripe_id = Session::get('strip_plan')['strip_id'];
        $add_subscribe_data->stripe_plan = Session::get('strip_plan')['strip_pan'];
        $add_subscribe_data->quantity = Session::get('strip_plan')['quantity'];
        $add_subscribe_data->start_at = Session::get('strip_plan')['trials_start'];
        $add_subscribe_data->ends_at = Session::get('strip_plan')['ends_at'];
        $add_subscribe_data->value = Session::get('strip_plan')['value'];
        $add_subscribe_data->save();
        if($add_subscribe_data->save()){
            Session::forget('strip_plan');
            Seller::where('id',$id)->update([
                'is_verify'=> 1,
            ]);
            return redirect()->route('view_seller_details')->with('message','Thank you for subscibe please complate your detils info');
        }
    }
    
    public function viewSubscription_Status()
    {
        $seller = Seller::where('status',1)->where('id',Auth::guard('seller')->user()->id)->first();

        $subscriptions = subscription::where('seller_id',$seller->id)->get();
        return view('Seller.seller_pages.subscription.viewSubscripePlan' ,compact('seller','subscriptions'));
    }
}
