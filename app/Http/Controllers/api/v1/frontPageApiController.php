<?php

namespace App\Http\Controllers\api\v1;

use App\Models\User;
use App\Models\banner;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class frontPageApiController extends Controller
{
    // ++++++++++++++++++++++++++++ SELLERS INFORMTION ++++++++++++++++++++++++++++++
    public function sellers_list()
    {
        $seller_list = Seller::get(['id','full_name','email','username','phone','address','city','country','shop_name','is_verify','status','type_of_work','added_by']);
        return json_decode($seller_list);

    }

    public function single_seller($id)
    {
        $seller = Seller::where('username',$id)->where('status',1)->where('is_verify' , 1)->first(['id','full_name','email','username','phone','address','city','country','shop_name','is_verify','status','type_of_work','added_by']);
        return json_decode($seller);

    }

     // ++++++++++++++++++++++++++++ USERS INFORMTION ++++++++++++++++++++++++++++++
    public function register_new_user(Request $request)
    {
        $data = $request->all();
    
        if ($data['full_name'] == null || empty($data['full_name'])) {
            return back()->with('error', 'full name is required');
        }
        if ($data['email'] == null || empty($data['email'])) {
            return back()->with('error', 'full name is required');
        }
        if ($data['password'] == null || empty($data['email'])) {
            return back()->with('error', 'full name is required');
        }
        $emailCheck = User::where('email', $data['email'])->count();
        if ($emailCheck > 0) {
            return back()->with('error', 'Email Is Already Exist');
        }
        $addnewcustumer = new User();
        $addnewcustumer->full_name = $data['full_name'];
        $addnewcustumer->email = $data['email'];
        $addnewcustumer->password = Hash::make(($data['password']));
        $addnewcustumer->save();
        return back()->with('message','Congrats you have registerd as a customer');

    }
}
