<?php

namespace App\Http\Controllers;

use App\Models\Adminview;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $Emailrepate = User::where('email',$data['email'])->count();
        if ($data['role'] == 'seller') {
            $usernamerepate = Seller::where('username', $data['username'])->count();
            if ($Emailrepate > 0) {
                return back()->with('error', ' The Email Is Already There');
            }
            if ($usernamerepate > 0) {
                return back()->with('error', ' The User Name Is Already There');
            }
        }elseif($data['role'] == 'seller'){
        }else{
            $usernamerepate = User::where('username', $data['username'])->count();
            if ($Emailrepate > 0) {
                return back()->with('error', ' The Email Is Already There');
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

        if (empty($data['status'])|| $data['status'] == null) {
            $status = 0;
        }else{
        $status = 1;
        }
        $password = Hash::make($data['password']);
        if($data['role'] == 'seller'){
            $newuser = new Seller();
            $newuser->full_name = $data['full_name'];
            $newuser->username = $data['username'];
            $newuser->email = $data['email'];
            $newuser->password = $password;
            $newuser->added_by = $data['role'];
            $newuser->photo = $data['image'];
            $newuser->phone = $data['phone'];
            $newuser->address = $data['address'];
            $newuser->status = $status;
            $newuser->save();
        }elseif($data['role'] == 'admin'){
            $newuser = new Adminview();
            $newuser->full_name = $data['full_name'];
            $newuser->username = $data['username'];
            $newuser->email = $data['email'];
            $newuser->password = $password;
            $newuser->added_by = $data['role'];
            $newuser->photo = $data['image'];
            $newuser->phone = $data['phone'];
            $newuser->address = $data['address'];
            $newuser->status = $status;
            $newuser->save(); 
        }else{
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
            

            if (empty($data['status']) || $data['status'] == null) {
                $status = 0;
            } else {
                $status = 1;
            }
            
            Seller::where('id', $id)->update([
               
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
