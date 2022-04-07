<?php

namespace App\Http\Controllers\seller;

use App\Models\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class sellerSittingsController extends Controller
{
    public function view_seller_details()
    {
        if(Auth::guard('seller')->check()){
            //get user deatils
            $current_seller = Seller::where('id',auth('seller')->user()->id)->first();
            // dd($current_seller);
           return view('Seller.seller_pages.sittings.view_seller_details',compact('current_seller'));

        }else{
            return back()->with('error','Please Login First');
        }
    }

    // edit the seller info sittings 

    public function seller_edit_info(Request $request, $id)
    {
        $data = $request->all();
        dd($data);
        if ($data['name'] == null || empty($data['name'])) {
            return back()->with('error', 'full name is required');
        }
        if ($data['username'] == null || empty($data['username'])) {
            return back()->with('error', 'full name is required');
        }
        if ($data['email'] == null || empty($data['email'])) {
            return back()->with('error', 'Email is required');
        }
        if ($data['password'] == null || empty($data['password'])) {
            return back()->with('error', 'Password is required');
        }
        if ($data['type_of_work'] == null || empty($data['type_of_work'])) {
            return back()->with('error', 'type of work is required');
        }
        if ($data['shop-name'] == null || empty($data['shop-name'])) {
            return back()->with('error', 'shop name is required');
        }
        if ($data['phone-number'] == null || empty($data['phone-number'])) {
            return back()->with('error', 'Phone is required');
        }
        if ($data['address'] == null || empty($data['address'])) {
            return back()->with('error', 'address is required');
        }
        if ($data['city'] == null || empty($data['city'])) {
            return back()->with('error', 'city is required');
        }
        if ($data['country'] == null || empty($data['country'])) {
            return back()->with('error', 'Phone is required');
        }
        if ($data['agreed_policy'] == null || empty($data['agreed_policy'])) {
            return back()->with('error', 'Check Box  Policy is required');
        }
        if ($data['license'] == null || empty($data['license'])) {
            return back()->with('error', 'license is required');
        }
        //checck email if exist
        $emailCheck = Seller::where('email',$data['email'])->count();
        if($emailCheck > 0){
            return back()->with('error','Email Is Already Exist');
        }
    
            //get the attached License
            $attachment = $request->file('license');
            $name_filename = time() . '.' . $attachment->getClientOriginalExtension();
            $filename = Storage::disk('public')->put('seller/'.$name_filename,File::get($attachment));
    
    
    
            //get the attached personal Photo
            $attachment = $request->file('photo');
            $name_filephoto = time() . '.' . $attachment->getClientOriginalExtension();
            $filephoto = Storage::disk('public')->put('seller/'.$name_filephoto,File::get($attachment));
    
    
              //get the attached company brand logo
              $attachment = $request->file('brand_logo');
              $name_filebrandLogo = time() . '.' . $attachment->getClientOriginalExtension();
              // create folder
              $file_brand_logo = Storage::disk('public')->put('seller/'.$name_filebrandLogo,File::get($attachment));
              
         
      
        $addnewvendor = new Seller();
        $addnewvendor->full_name = $data['name'];
        $addnewvendor->username = $data['username'];
        $addnewvendor->email = $data['email'];
        $addnewvendor->city = $data['city'];
        $addnewvendor->country = $data['country'];
        $addnewvendor->address = $data['address'];
        $addnewvendor->phone = $data['phone-number'];
        $addnewvendor->document = $filename;
        $addnewvendor->photo = $filephoto;
        $addnewvendor->brand = $file_brand_logo;
        $addnewvendor->password = Hash::make(($data['password']));
        $addnewvendor->status = 0;
        $addnewvendor->added_by ='seller';
        $addnewvendor->shop_name = $data['shop-name'];
        $addnewvendor->type_of_work = $data['type_of_work'];
        $addnewvendor->save();
    
        return back()->with('message', 'kindly check your email , the Verification Email has been sent');
    
    }
}
