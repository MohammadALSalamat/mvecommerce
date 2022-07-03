<?php

namespace App\Http\Controllers\api\v1;

use App\Models\User;
use App\Models\banner;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class frontPageApiController extends Controller
{
    public function Sellers_list()
    {
        $banners = Seller::get(['id','full_name','email']);
        return json_decode($banners);

    }

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
        return 'Congrats you have registerd as a customer';

    }
}
