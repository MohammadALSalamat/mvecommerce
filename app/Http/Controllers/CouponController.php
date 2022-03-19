<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function view_coupon()
    {
        $coupons = Coupon::get();
        return view('backend.backend_pages.coupons.viewcoupon',compact('coupons'));
    }

    public function create_coupon()
    {
        return view('backend.backend_pages.coupons.addnewcoupon');
    }

    public function add_coupon(Request $request)
    {
        $data = $request->all();

        if(empty($data['code']) || $data['code'] == null){
            return back()->with('error','This Feild is required');
        }

        if (empty($data['value']) || $data['value'] == null) {
            return back()->with('error', 'This Feild is required');
        }

        if (empty($data['type_of_coupon']) || $data['type_of_coupon'] == null) {
            return back()->with('error', 'This Feild is required');
        }

        if (empty($data['status'])) {
            $status = 0;
        }else{
            $status = 1;
        }

        $newCoupon = new Coupon();

        $newCoupon->code = $data['code'];
        $newCoupon->type = $data['type_of_coupon'];
        $newCoupon->value = $data['value'];
        $newCoupon->status = $status;
        $newCoupon->save();

        return back()->with('message','you have added new coupon');
        
    }

    public function edit_coupon(Request $request,$id)
    {
        $current_coupon = Coupon::find($id);

        if($current_coupon){
            return view('backend.backend_pages.coupons.editcoupon',compact('current_coupon'));
        }else{
            return back()->with('error','This coupon is not Exits');
        }
    }

    public function update_coupon(Request $request, $id)
    {
        $current_coupon = Coupon::find($id);

        if ($current_coupon) {
            $data = $request->all();

            if (empty($data['code']) || $data['code'] == null) {
                return back()->with('error', 'This Feild is required');
            }

            if (empty($data['value']) || $data['value'] == null) {
                return back()->with('error', 'This Feild is required');
            }

            if (empty($data['type_of_coupon']) || $data['type_of_coupon'] == null) {
                return back()->with('error', 'This Feild is required');
            }

            if (empty($data['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }
            
            Coupon::where('id',$id)->update([
                'code' =>$data['code'],
                'type' =>$data['type_of_coupon'],
                'value' =>$data['value'],
                'status' => $status,
            ]);

            return back()->with('message','your coupon has been updated');
        } else {
            return back()->with('error', 'This coupon is not Exits');
        }
    }
    // delete funstion
    public function delet_coupon($id)
    {
        $delete_current_coupon = Coupon::find($id);
        if ($delete_current_coupon) {
            Coupon::where('id', $id)->delete();
            return back()->with('message', 'The coupon has been deleted');
        } else {
            return back()->with('error', 'The ID is not found');
        }
    }
}
