<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Jobs\renewSubscibtionUser;
use App\Jobs\renewSubscibtionAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{

// ++++++++++++++++++++++++++++++++++++++++++++ Admin Side +++++++++++++++++++++++++++++++++++++++++++++++++


public function admin_viewSubscription_Status()
    {
        
        $subscriptions = subscription::get();
     
        return view('backend.backend_pages.subscription.admin_viewAllSubscripeSellers' ,compact('subscriptions'));
    }


   // ++++++++++++++++++++++++++++++++++++++++++++ Sellers Side +++++++++++++++++++++++++++++++++
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
       if(empty($seller_id) ||$seller_id == null){
          return  redirect()->route('homepage')->with('warning','Your Status still not active please contnact admin for more informations'); 
       }
        if(empty(Session::get('strip_plan')['subscribe_id']) || Session::get('strip_plan')['subscribe_id'] == null){
            $check_if_the_user_is_subscibed = 0;
        }else{

            $check_if_the_user_is_subscibed = subscription::where('id',Session::get('strip_plan')['subscribe_id'])->count();
        }

        if($check_if_the_user_is_subscibed > 0 ){
            subscription::where('id',Session::get('strip_plan')['subscribe_id'])->update([
                'ends_at' => Session::get('strip_plan')['ends_at'],
                'stripe_plan' => Session::get('strip_plan')['strip_pan'],
            ]);
            
            $email_data = [
                'seller_name' => $seller_id->full_name,
                'seller_email' => $seller_id->email,
                'stripe_plan' => Session::get('strip_plan')['strip_pan'],
                'ends_at' => Session::get('strip_plan')['ends_at'],
            ];
            try {
                dispatch(new renewSubscibtionAdmin($email_data));
                dispatch(new renewSubscibtionUser($email_data));
            } catch (\Throwable $th) {
                return back()->with('error','The Upgrade is not completed yet, please try again!!');
            }
            Session::forget('strip_plan');
            Seller::where('id',$id)->update([
                'is_verify'=> 1,
            ]);
            return redirect()->route('view_seller_details')->with('message','Your Subscibe has been updated');
        }else{
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
            $email_data = [
                'seller_name' => $seller_id->full_name,
                'seller_email' => $seller_id->email,
                'stripe_plan' => Session::get('strip_plan')['strip_pan'],
                'ends_at' => Session::get('strip_plan')['ends_at'],
            ];
            try {
                dispatch(new renewSubscibtionAdmin($email_data));
            } catch (\Throwable $th) {
                return back()->with('error','The Upgrade is not completed yet, please try again!!');
            }
            if($add_subscribe_data->save()){
                Session::forget('strip_plan');
                Seller::where('id',$id)->update([
                    'is_verify'=> 1,
                ]);
                return redirect()->route('view_seller_details')->with('message','Thank you for subscibe please complate your detils info');
            }
        }

    }
    
    public function viewSubscription_Status()
    {
        $seller = Seller::where('status',1)->where('id',Auth::guard('seller')->user()->id)->first();

         if(empty($seller) ||$seller == null){
           return redirect()->route('homepage')->with('warning','Your Status still not active please contnact admin for more informations'); 
       }
        $subscripe = subscription::where('seller_id',$seller->id)->first();
        return view('Seller.seller_pages.subscription.viewSubscripePlan' ,compact('seller','subscripe'));
    }

    public function upgrade_subscribtion($id)
    {
        $seller = Seller::where('status',1)->where('id',Auth::guard('seller')->user()->id)->first();
        $subscriptions_user_data = subscription::find($id);
        return view('Seller.seller_pages.subscription.upgrade_subscribe',compact('subscriptions_user_data','seller'));
    }
}
