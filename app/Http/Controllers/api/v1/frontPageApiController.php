<?php

namespace App\Http\Controllers\api\v1;

use App\Models\User;
use App\Models\banner;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

        $validator = Validator::make($data,[
            'full_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required'
        ],[
        'full_name.required'=>'full name file is required',
        'email.required'=>'email is required',
        'email.unique'=>'email is already there',
        ]);
        
        if($validator->failed()){
            return response()->json(['error'=>'check Validation'],403);
        }
       
        $addnewcustumer = new User();
        $addnewcustumer->full_name = $data['full_name'];
        $addnewcustumer->email = $data['email'];
        $addnewcustumer->password = Hash::make(($data['password']));
        $addnewcustumer->save();

        $token = $addnewcustumer->createToken('ItajerCustomerToken')->accessToken;

        return response()->json(['token'=>$token,'full_name'=>$addnewcustumer->full_name ],200) ;

    }
}
