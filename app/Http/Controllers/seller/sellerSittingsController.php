<?php

namespace App\Http\Controllers\seller;

use App\Models\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $current_seller = Seller::where('id',$id)->first();
          //checck email if exist
           $validator =  Validator::make($data, [
            'shop_banner' => 'max:10240',
            'brand_logo' => 'max:10240',
            'photo' => 'image|size:10240|max:10240',
            'license' => 'max:10240',
        ]);
       if($validator->fails()){
        return back()->with('error','your images are too big to be uploaded');
       }
        if ($data['name'] == null || empty($data['name'])) {
            return back()->with('error', 'name is required');
        }
        if ($data['username'] == null || empty($data['username'])) {
            return back()->with('error', 'full name is required');
        }
        if ($data['phone-number'] == null || empty($data['phone-number'])) {
            return back()->with('error', 'Phone Number is required');
        }
        if ($data['shop-name'] == null || empty($data['shop-name'])) {
            return back()->with('error', 'shop name is required');
        }
        $shop_name_checker = Seller::where('shop_name', $data['shop-name'])->where('id','!=',$id)->count();
        if($shop_name_checker > 0){
            return back()->with('error', 'shop name is Already there , please change it');
        }
        if (empty($data['shop_banner']) || $data['shop_banner'] == null) {
            if ( $current_seller->banner_image == null || empty( $current_seller->banner_image)) {
                return back()->with('error', 'shop banner is required');
            }else{
                $file_branner_image = $current_seller->banner_image;
            }
        }else{
               //get the attached company banner shop
               $attachment = $request->file('shop_banner');
               $name_filebanner = time() . '.' . $attachment->getClientOriginalExtension();
               // create folder
               Storage::disk('public')->put('seller/'.$name_filebanner,File::get($attachment));
               $file_branner_image = $name_filebanner;
            }

        if (empty($data['license']) || $data['license'] == null) {
            if ( $current_seller->document == null || empty( $current_seller->document)) {
                return back()->with('error', 'License is required');
            }else{
                $filename = $current_seller->document;
            }
        }else{
         //get the attached License
         $attachment = $request->file('license');
         $name_filename = time() . '.' . $attachment->getClientOriginalExtension();
         Storage::disk('public')->put('seller/'.$name_filename,File::get($attachment));
         $filename = $name_filename;
        }
    
          
            if ( empty($data['photo']) || $data['photo'] == null ) {
                if ($current_seller->photo == null || empty( $current_seller->photo)) {
                    return back()->with('error', 'photo is required');
                }else{
                    $filephoto = $current_seller->photo;
                }
            }else{
                   //get the attached personal Photo
            $attachment = $request->file('photo');
            $name_filephoto = time() . '.' . $attachment->getClientOriginalExtension();
            Storage::disk('public')->put('seller/'.$name_filephoto,File::get($attachment));
            $filephoto = $name_filephoto;
            }

            if ( empty($data['brand_logo']) || $data['brand_logo'] == null) {
                if ( $current_seller->brand == null || empty( $current_seller->brand)) {
                    return back()->with('error', 'brand is required');
                }else{
                    $file_brand_logo = $current_seller->brand;
                }
            }else{
              //get the attached company brand logo
              $attachment = $request->file('brand_logo');
              $name_filebrandLogo = time() . '.' . $attachment->getClientOriginalExtension();
              // create folder
              Storage::disk('public')->put('seller/'.$name_filebrandLogo,File::get($attachment));
              $file_brand_logo = $name_filebrandLogo;
              
            }
           
                  //password checker
                  if(empty($data['old_pass']) || $data['old_pass'] == null){
                    $password = $current_seller->password;
                  }elseif($data['old_pass'] != null && $data['new_pass'] == null){
                    $password = $current_seller->password;                    
                 }elseif($data['old_pass'] != null && $data['new_pass'] != null){
                      $hash_new_pass = Hash::make($data['new_pass']);
                      $hash_old_pass = Hash::make($data['old_pass']);
                      if($hash_old_pass != $current_seller->password){
                          return back()->with('error','your old password is not correct, contact with admin if you forget it');
                      }else{
                        $password = $hash_new_pass;
                      }
                  }
         
      Seller::where('id',$id)->update([
       'full_name' => $data['name'],
       'username' => $data['username'],
       'phone' => $data['phone-number'],
       'document' => $filename,
       'photo' => $filephoto,
       'brand' => $file_brand_logo,
       'banner_image' => $file_branner_image,
       'password' => $password,
       'shop_name' => $data['shop-name']
      ]);
    
        return back()->with('message', 'your data has been updated');
    
    }
}
