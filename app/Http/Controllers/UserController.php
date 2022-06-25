<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seller;
use App\Models\Adminview;
use App\Models\delivery;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function viewusers()
    {
        $Users = Seller::where('status',1)->get();
        return view('backend.backend_pages.users.viewusers',compact('Users'));
    }

    //view activation for sellers Only
    public function activation_sellers()
    {
        $Users = Seller::where('status',0)->get();
        return view('backend.backend_pages.users.activation_sellers', compact('Users'));
    }
    // view create form
    public function createusers()
    {
        return view('backend.backend_pages.users.addnewuser');
    }

// insert the creation values to database
    public function addusers(Request $request)
    {
        $data = $request->all();
        //email validation
        if ($data['role'] == 'seller') {
            $Emailrepate = Seller::where('email',$data['email'])->count();
            $usernamerepate = Seller::where('username', $data['username'])->count();
            if ($Emailrepate > 0) {
                return back()->with('error', ' The Email in sellers table Is Already There');
            }
            if ($usernamerepate > 0) {
                return back()->with('error', ' The User Name in sellers table Is Already There');
            }
        }elseif($data['role'] == 'admin'){
            $usernamerepate = Adminview::where('email', $data['email'])->count();
            if ($usernamerepate > 0) {
                return back()->with('error', ' The Email in admin table Is Already There');
            }
        }elseif($data['role'] == 'delivery'){
            $usernamerepate = delivery::where('email', $data['email'])->count();
            if ($usernamerepate > 0) {
                return back()->with('error', ' The Email in delivery table Is Already There');
            }
        }else{
            $Emailrepate = User::where('email',$data['email'])->count();
            $usernamerepate = User::where('username', $data['username'])->count();
            if ($Emailrepate > 0) {
                return back()->with('error', ' The User Email Is Already There');
            }
            if ($usernamerepate > 0) {
                return back()->with('error', ' The User Name Is Already There');
            }
        }
        //validation
        if(empty($data['full_name']) || $data['full_name'] == null){
            return back()->with('error',' Full Name is required');
        }
        if (empty($data['password'])|| $data['password'] == null) {
            return back()->with('error', ' Full Name is required');
        }
        if (empty($data['email'])|| $data['email'] == null) {
            return back()->with('error', ' Full Name is required');
        }
        if (empty($data['role'])|| $data['role'] == null) {
            return back()->with('error', ' Full Name is required');
        }
        if(!empty($request->file('logo'))){
            //get the attached License
            $attachment_logo = $request->file('logo');
            $logo_filename = time() . '.' . $attachment_logo->getClientOriginalExtension();
            Storage::disk('public')->put('seller/'.$logo_filename,File::get($attachment_logo));
            $logoname =$logo_filename;

        }else{
            $logoname = null;
        }
        if(!empty($request->file('shopbanner'))){
            //get the attached License
            $attachment = $request->file('shopbanner');
            $name_filename = time() . '.' . $attachment->getClientOriginalExtension();
            Storage::disk('public')->put('seller/'.$name_filename,File::get($attachment));
            $filename =$name_filename;

        }else{
            $filename = null;
        }

        if (empty($data['status'])|| $data['status'] == null) {
        $status = 0;
        }else{
        $status = 1;
        }
        $today_date = date("Y-m-d H:i:s");
        $after_30days_end = date('Y-m-d H:i:s', strtotime($today_date. ' +30 days'));
        $password = Hash::make($data['password']);

        if($data['role'] == 'seller'){
            $newuser = new Seller();
            $newuser->full_name = $data['full_name'];
            $newuser->username = $data['username'];
            $newuser->email = $data['email'];
            $newuser->password = $password;
            $newuser->added_by = $data['role'];
            $newuser->brand = $logoname;
            $newuser->banner_image = $filename;
            $newuser->shop_name = $data['shopname'];
            $newuser->phone = $data['phone'];
            $newuser->address = $data['address'];
            $newuser->type_of_work = 'home';
            $newuser->status = $status;
            $newuser->is_verify = 1;
            $newuser->save();

            $subscribeFree = new subscription();

            $subscribeFree->seller_id = $newuser->id;
            $subscribeFree->name = $newuser->full_name;
            $subscribeFree->value = '300';
            $subscribeFree->stripe_id = '1';
            $subscribeFree->stripe_plan ='Basic';
            $subscribeFree->quantity ='1';
            $subscribeFree->start_at = $today_date;
            $subscribeFree->ends_at =$after_30days_end;
            $subscribeFree->save();

            
        }elseif($data['role'] == 'admin'){
            $newuser = new Adminview();
            $newuser->full_name = $data['full_name'];
            $newuser->email = $data['email'];
            $newuser->password = $password;
            $newuser->photo = $data['image'];
            $newuser->phone = $data['phone'];
            $newuser->status = $status;
            
            $newuser->save(); 
        } elseif($data['role'] == 'delivery'){
            $newuser = new delivery();
            $newuser->full_name = $data['full_name'];
            $newuser->email = $data['email'];
            $newuser->password = $password;
            $newuser->phone = $data['phone'];
            $newuser->status = $status;
            $newuser->save(); 
        }
        else{
            $newuser = new User();
            $newuser->full_name = $data['full_name'];
            $newuser->username = $data['username'];
            $newuser->email = $data['email'];
            $newuser->password = $password;
            $newuser->role = $data['role'];
            $newuser->photo = $data['image'];
            $newuser->phone = $data['phone'];
            $newuser->address = $data['address'];
            $newuser->status = $status;
        
            $newuser->save();
        }

        return back()->with('message','You have insert a User');
    }

    // edit Products form
    public function editusers($id)
    {
       
        $current_user = Seller::find($id); // get the current category

        if ($current_user) {

            return view('backend.backend_pages.users.edituser', compact('current_user'));
        } else {
            return back()->with('error', 'The ID is not found');
        }
    }

    //update the product 

    public function updateusers(Request $request, $id)
    {
        $user = Seller::find($id);
        if ($user) {
            $data = $request->all();
            if(!empty($request->file('logo'))){
                //get the attached License
                $attachment = $request->file('logo');
                $logo_filename = time() . '.' . $attachment->getClientOriginalExtension();
                Storage::disk('public')->put('seller/'.$logo_filename,File::get($attachment));
                $logoname =$logo_filename;
    
            }else{
                $logoname = $data['old_logo'];
            }
            if(!empty($request->file('shopbanner'))){
                //get the attached License
                $attachment = $request->file('shopbanner');
                $name_filename = time() . '.' . $attachment->getClientOriginalExtension();
                Storage::disk('public')->put('seller/'.$name_filename,File::get($attachment));
                $filename =$name_filename;
    
            }else{
                $filename = $data['old_shopbanner'];
            }
            if (empty($data['status']) || $data['status'] == null) {
                $status = 0;
            } else {
                $status = 1;
            }
            
            Seller::where('id', $id)->update([
                'full_name' => $data['full_name'],
                'username' => $data['username'],
                'brand' => $logoname,
                'banner_image' => $filename,
                'shop_name' => $data['shopname'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'status' => $status,
            ]);
       

            if($status == $user->status){
                return back()->with('message', 'The User has been updated');
            }else{
                $useremail= $user->email;
                //send email if you activate the seller account
                if($status == 1){
                    $bodymessage = 'Congrates your Account has been activated you can use now';
                    Mail::send('mails.active_seller', $data, function ($message) use($bodymessage ,$useremail) {
                        $message->from('support@9yards.ae', 'Itajer Admin');
                        $message->sender('alomda.alslmat@gmail.com', 'Itajer Admin');
                        $message->to($useremail);
                        $message->subject('Active Seller Account');
                        $message->setBody($bodymessage);
                    });
                }else{
                    //send email if you inactivate the seller account
                    $bodymessage = 'Sorry to inform you that your Account has been Disactivated you can not use now <br> if you have any request please contact the admin for more details ';
                    Mail::send('mails.disactive',$data, function ($message) use ($bodymessage, $useremail) {
                        $message->from('support@9yards.ae', 'Itajer Admin');
                        $message->sender('alomda.alslmat@gmail.com', 'Itajer Admin');
                        $message->to($useremail);
                        $message->subject('Disactive Seller Account');
                        $message->setBody($bodymessage);
                    });
                }
            }
            return back()->with('message', 'The User has been updated');
        } else {
            return back()->with('error', 'this User is not found');
        }
    }

    // delete the user 

    public function deletusers($id)
    {
        #delete the user
        $delete_current_user = User::find($id);
        if ($delete_current_user) {
            User::where('id', $id)->delete();
            return back()->with('message', 'The User has been deleted');
        } else {
            return back()->with('error', 'The User is not found');
        }
    }
}
