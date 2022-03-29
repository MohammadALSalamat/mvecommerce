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
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Mail\verfication_admin_email_for_vendors;
use App\Models\productAttribute;
use App\Models\ProductReview;
use Helper;

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

        // product filter in shop page get the data from the link top


        $products = product::query();
        if (!empty($_GET['category'])) {
            $slug = explode(',', $_GET['category']);
            $cat_ids = category::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();
            // get the products with the selected categories
            $products = $products->whereIn('category_id', $cat_ids);
        }
       // price filter
        if(!empty($_GET['price'])){
            $price = explode('-',$_GET['price']);
            $price[0] = floor($price[0]);
            $price[1] = ceil($price[1]);
            $products = $products->whereBetween('price',$price);
        }

        
        // use it for the filtter using ajax-> (sort prodcuts)
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
            $products = product::orderBy('price', 'ASC');
        } elseif ($sort == 'price-high') {
            $products = product::orderBy('price', 'DESC');
        } elseif ($sort == 'alpha-asc') {
            $products = product::orderBy('title', 'ASC');
        } elseif ($sort == 'alpha-desc') {
            $products = product::orderBy('title', 'DESC');
        } elseif ($sort == 'discountLTH') {
            $products = product::orderBy('discound', 'ASC');
        } elseif ($sort == 'discountHTL') {
            $products = product::orderBy('discound', 'DESC');
        } 
    }
    
    
    $route='shop';
    // Filter Section
    #categories
        $products = $products->where(['status' => 1])->paginate(12); 

        $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        #vendors
        $main_vendors = User::where('status', 'active')->where('role','seller')->get();
        #type of work filter
        $type_of_work = User::groupBy('type_of_work')->where('status','active')->where('role','seller')->pluck('type_of_work');

        
        return view('frontend.frontend_pages.products.shop',compact('products','route', 'main_categories', 'main_vendors', 'type_of_work'));

    }

    public function shop_list( Request $request)
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
        $route = 'shop_list';
        // Filter Section
        $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
    
        return view('frontend.frontend_pages.products.shop_list', compact('products', 'route', 'main_categories'));
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
        // Filter Section
        $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
    
        return view('frontend.frontend_pages.products.shop_list_products',compact('category_product', 'route' , 'products', 'count_product', 'main_categories'));
    }

    public function Single_product($slug)
    {
      $single_product = product::with('rel_product')->where('slug',$slug)->first();
      $vendor_info = User::where('id',$single_product->vendor_id)->first();
      $product_attr = productAttribute::where('product_id',$single_product->id)->get();
      $user_review = ProductReview::where('product_id',$single_product->id)->latest()->paginate(10); // product_review
      
     #review comments 
      if($single_product){
        return view('frontend.frontend_pages.products.single_product',compact('single_product','vendor_info','product_attr','user_review'));
      }else{
        return back()->with('error','This Product Is Not Valid');
      }
    }

    // Shop Filter

    public function shop_filter(Request $request)
    {
        $data = $request->all();

        $catUrl = '';
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catUrl)){
                    $catUrl.='&category='.$category;
                }else{
                    $catUrl.=','.$category;
                }
            }
        }


        // price filter 
        if (!empty($data['min_price']) || !empty($data['max_price'])) {
            if ($data['min_price'] < Helper::minPrice() || $data['max_price'] > Helper::maxPrice() || $data['min_price'] > $data['max_price']) {
                return back()->with('error', 'The Price Rang is Not Correct, Search between '. Helper::minPrice() .' And '. Helper::maxPrice());
            }
            if ($data['min_price'] == null || empty($data['min_price'])) {
                $minPrice = Helper::minPrice();
            } else {
                $minPrice = $data['min_price'];
            }

            if ($data['max_price'] == null || empty($data['max_price'])) {
                $maxPrice = Helper::maxPrice();
            } else {
                $maxPrice = $data['max_price'];
            }
            //filter price
            $price = $minPrice.'-'.$maxPrice;
        }
        $price_range_url='';
        if(!empty($price)){
            $price_range_url.='&price='.$price;
        }
        return redirect()->route('shop_page',$catUrl.$price_range_url);
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
            $addnewvendor->shop_name = $data['shop-name'];
            $addnewvendor->type_of_work = $data['type_work'];
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
            return back()->with('message','Congrats you have registerd as a customer');
        
     }else{
        return back()->with('error','Please Choose if you want to register as a customer or vendor');
    }
}

public function logout_front_user()
{
    Session::forget('user');
    Session::forget('coupon');
    Cart::instance('shopping')->destroy();
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

                if($data['shop-name'] != null){
                    $shop_name = $data['shop-name'];
                }else{
                    $shop_name = null;  
                }
               

                User::where('id',$id)->update([
                    "full_name"=> $data['full_name'],
                    "username"=> $data['username'],
                    "phone"=> $data['phone'],
                    "shop_name"=> $shop_name,
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
