<?php

namespace App\Http\Controllers;

use File;
use Session;
use App\Models\User;
use App\Models\banner;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use App\Mail\verficationVendors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Mail\verfication_admin_email_for_vendors;

class frontPageController extends Controller
{
    //add data from database to front page

    public function HomePage()
    {
        //get the data
        $banners = banner::where('status', 'active')->where('is_banner', '1')->get();
        $categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();

        $home_3_Categories= category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->take(3)->get();



        return view('frontend.frontend_pages.homepage',compact('banners', 'categories','home_3_Categories'));
    }


    // login form

 //++++++++++++++++++++++++++++  User Products Section   ++++++++++++++++++++++++++++++//


    public function ShopPage(Request $request)
    {
        $products = product::where('status', 1)->get();
        // use it for the filtter using ajax (sort prodcuts)
        $sort = '';
        if ($request->sort != null) {
            $sort = $request->sort; // get the value
        }
    if ($products == null) {
        return view('errors.404');
    } else {
        //start the sort depends on the valueof ajax
        if ($sort == 'price-low') {
        } elseif ($sort == 'price-low') {
            $products = product::orderBy('price', 'ASC')->where(['status' => 1])->paginate(12);
        } elseif ($sort == 'price-high') {
            $products = product::orderBy('price', 'DESC')->where(['status' => 1])->paginate(12);
        } elseif ($sort == 'alpha-asc') {
            $products = product::orderBy('title', 'ASC')->where(['status' => 1])->paginate(12);
        } elseif ($sort == 'alpha-desc') {
            $products = product::orderBy('title', 'DESC')->where(['status' => 1])->paginate(12);
        } elseif ($sort == 'discountLTH') {
            $products = product::orderBy('discound', 'ASC')->where(['status' => 1])->paginate(12);
        } elseif ($sort == 'discountHTL') {
            $products = product::orderBy('discound', 'DESC')->where(['status' => 1])->paginate(12);
        } else {
            $products = product::where(['status' => 1])->paginate(12);
        }
}
        $route='shop';
        return view('frontend.frontend_pages.products.shop',compact('products','route'));

    }

    public function shop_list()
    {
        return view('frontend.frontend_pages.products.shop_list');
    }

    public function special_category_product(Request $request , $slug)
    {
        $category_product = category::with('one_cat_has_many_products')->where('slug', $slug)->first();

        //get the sort value from the Ajax
    
        $sort = '';
        if($request->sort != null){
            $sort = $request->sort; // get the value
        }

        if($category_product == null){
            return view('errors.404');
        }else{
            //start the sort depends on the valueof ajax
            if($sort == 'price-low'){

            }elseif($sort == 'price-low'){
            $products= product::orderBy('price','ASC')->where(['status'=> 1 , 'category_id'=>$category_product->id])->paginate(12);
            } elseif ($sort == 'price-high') {
                $products = product::orderBy('price', 'DESC')->where(['status' => 1, 'category_id' => $category_product->id])->paginate(12);
            } elseif ($sort == 'alpha-asc') {
                $products = product::orderBy('title', 'ASC')->where(['status' => 1, 'category_id' => $category_product->id])->paginate(12);

            } elseif ($sort == 'alpha-desc') {
                $products = product::orderBy('title', 'DESC')->where(['status' => 1, 'category_id' => $category_product->id])->paginate(12);

            } elseif ($sort == 'discountLTH') {
                $products = product::orderBy('discound', 'ASC')->where(['status' => 1, 'category_id' => $category_product->id])->paginate(12);

            } elseif ($sort == 'discountHTL') {
                $products = product::orderBy('discound', 'DESC')->where(['status' => 1, 'category_id' => $category_product->id])->paginate(12);

            }else{
                $products = product::where(['status' => 1, 'category_id' => $category_product->id])->paginate(12);

            }
            
        }
        $count_product =  count($products);
        $route = 'Shop/prodcuts';
        return view('frontend.frontend_pages.products.shop_list_products',compact('category_product', 'route' , 'products', 'count_product'));
    }

    public function Single_product($slug)
    {
      $single_product = product::with('rel_product')->where('slug',$slug)->first();
      if($single_product){
        return view('frontend.frontend_pages.products.single_product',compact('single_product'));
      }else{
        return back()->with('error','This Product Is Not Valid');
      }
    }


 //++++++++++++++++++++++++++++  User Login Section   ++++++++++++++++++++++++++++++//

    public function loginForm()
    {
        #show the login form

        return view('frontend.frontend_pages.auth.loginForm');
    }


    // login get the info details
    public function loginSubmit(Request $request)
    {
        $data = $request->all();
        $this->validate($request,[
            'email'=> 'email|required|exists:users,email',
            'password'=>'required|min:4',
        ]);
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            if(Session::get('url.intended')){
                return Redirect::to(Session::get('url.intended'));
            }else{

                return redirect()->route('homepage')->with('message','Welcome Back '.auth()->user()->username);
            }
        }else{
            return back()->with('error','Invalid Email & Password Or the Status of your account is inactive please contact the Admin');
        }
    }

    public function register_users( Request $request)
{
     $data = $request->all();
     if(!empty($data['check-seller']) == 'on' && empty($data['check-customer'])){
            if ($data['full_name'] == null || empty($data['full_name'])) {
                return back()->with('error', 'full name is required');
            }
            if ($data['email'] == null || empty($data['email'])) {
                return back()->with('error', 'full name is required');
            }
            if ($data['password'] == null || empty($data['email'])) {
                return back()->with('error', 'full name is required');
            }
            if ($data['type_work'] == null || empty($data['type_work'])) {
                return back()->with('error', 'type of work is required');
            }
            if ($data['shop-name'] == null || empty($data['shop-name'])) {
                return back()->with('error', 'shop name is required');
            }
            if ($data['phone-number'] == null || empty($data['phone-number'])) {
                return back()->with('error', 'Phone is required');
            }
            //checck email if exist
            $emailCheck = User::where('email',$data['email'])->count();
            if($emailCheck > 0){
                return back()->with('error','Email Is Already Exist');
            }
            if ($data['type_work'] == 'mall') {
                //get the attached name
                $path = public_path('verify_vendors');
                $attachment = $request->file('vendor-mall');

                $name = time() . '.' . $attachment->getClientOriginalExtension();
                ;

                // create folder
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
                $attachment->move($path, $name);

                $filename = $path . '/' . $name;
            }elseif($data['type_work'] == 'home'){
                //get the attached name
                $path = public_path('verify_vendors');
                $attachment = $request->file('vendor-home');

                $name = time() . '.' . $attachment->getClientOriginalExtension();;

                // create folder
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
                $attachment->move($path, $name);

                $filename = $path . '/' . $name;
            }else{
                $filename = null;
            }
            // send email to hold it before activation 
            $adminData = [
                'email' => $data['email'],
                'full_name' => $data['full_name'],
                'phone' => $data['phone-number'],
                'type_of_work' => $data['type_work'],
                'license' => $filename,
            ];
            Mail::to($data['email'])->send(new verficationVendors($data));
            //send the data to admin to verify the user 
            Mail::to('alomda.alslmat@gmail.com')->send(new verfication_admin_email_for_vendors($adminData));
            $addnewvendor = new User();
            $addnewvendor->full_name = $data['full_name'];
            $addnewvendor->email = $data['email'];
            $addnewvendor->username = $data['email'];
            $addnewvendor->phone = $data['phone-number'];
            $addnewvendor->license_passport = $filename;
            $addnewvendor->password = Hash::make(($data['password']));
            $addnewvendor->status = 'inactive';
            $addnewvendor->role ='seller';
            $addnewvendor->save();
           
            return back()->with('message', 'kindly check your email , the Verification Email has been sent');

     }
     
     elseif(!empty($data['check-customer']) == 'on' && empty($data['check-seller'])){

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
            return back()->with('message','Congrats you have registerd as a custumer');
        
     }else{
        return back()->with('error','There is an Error with the data that you have inserted, refresh the page');
    }
}

public function logout_front_user()
{
    Session::forget('user');
    Auth::logout();
    return redirect()->route('homepage')->with('message','You Have logged out Seccessfuly!!');
}



 //++++++++++++++++++++++++++++ Current User Dashboard   ++++++++++++++++++++++++++++++//

// user dahsboard
public function userdashboard()
{
    $current_user = Auth::user();
    if($current_user){
        // dd($current_user);
        return view('frontend.frontend_pages.auth.user_dashboard', compact('current_user'));
    }else{
        return redirect()->route('loginForm')->with('warning','Login First To have access');
    }
}
// update the current user billing address
public function billingupdate(Request $request,$id)
{
    $data = $request->all();
    $user_address = User::find($id);
if ($user_address) {
    if (!empty($data['shipping_copy_billing_info'])) {
        $saddress =  $data['address'];
        $scountry =  $data['country'];
        $scity =     $data['city'];
        $sstate=     $data['state'];
        $spostcode = $data['postcode'];
    } else {
        $saddress =  $user_address->saddress;
        $scountry =  $user_address->scountry;
        $scity =     $user_address->scity;
        $sstate =     $user_address->sstate;
        $spostcode = $user_address->spostcode;
    }
    User::where('id', $id)->update([

    'address' => $data['address'],
    'country' => $data['country'],
    'city' => $data['city'],
    'postcode' => $data['postcode'],
    'state' => $data['state'],
    'saddress' => $saddress,
    'scountry' => $scountry,
    'scity' => $scity,
    'spostcode' => $spostcode,
    'sstate' => $sstate,
        
    ]);
    return back()->with('message', 'you have added Shipping Info same As billing Info');
}else{
    return back()->with('error', 'user is not exsits');
}

}

    // update the current user billing address
    public function shippingupdate(Request $request, $id)
    {
        $data = $request->all();
        $user_address = User::find($id);
        if ($user_address) {
            User::where('id', $id)->update([
                'saddress' => $data['saddress'],
                'scountry' => $data['scountry'],
                'scity' => $data['scity'],
                'spostcode' => $data['spostcode'],
                'sstate' => $data['sstate'],
            ]);
            return back()->with('message', 'you have Updated Shipping Info ');
        } else {
            return back()->with('error', 'user is not exsits');
        }
    }

    // update the user details 

    public function update_useraccount(Request $request,$id)
    {
        $data = $request->all();
        $current_user = User::find($id);

        if(empty($data['full_name']) || $data['full_name'] == null){
            return back()->with('error','full name is required');
        }

        if (empty($data['username']) || $data['username'] == null) {
            return back()->with('error', 'Username is required');
        }

        if (empty($data['phone']) || $data['phone'] == null) {
            return back()->with('error', 'full name is required');
        }
        if($current_user){
            //check the old password
            $oldpasscheker = Hash::check($data['old_password'],$current_user->password);
            if($oldpasscheker || $data['old_password'] == null){
                if($data['old_password'] == null){
                    $passowrd = $current_user->password;
                }else{
                    $passowrd = Hash::make($data['new_password']);
                }
               

                User::where('id',$id)->update([
                    "full_name"=> $data['full_name'],
                    "username"=> $data['username'],
                    "phone"=> $data['phone'],
                    "password" => $passowrd,
                 ]);
                 return back()->with('message','Your data has been updated');
            }else{
                return back()->with('error','Your Current Password is not Correct');
            }


        }else{
            return back()->with('error','the user is not found');
        }
    }

}
