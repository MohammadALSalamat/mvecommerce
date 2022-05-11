<?php

namespace App\Http\Controllers;

use Helper;
use Carbon\Carbon;
use App\Models\User;
use App\Models\banner;
use App\Models\Seller;
use App\Models\product;
use App\Models\category;
use App\Models\sponserAds;
use App\Models\productOrder;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\productGallary;
use App\Mail\verficationVendors;
use App\Models\productAttribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use App\Mail\verfication_admin_email_for_vendors;
use App\Models\categoryBanner;
use App\Models\Order;

class frontPageController extends Controller
{
    //add data from database to front page

    public function HomePage()
    {
        //get the data
        $banners = banner::where('status', 'active')->where('is_banner', '1')->get();
        $categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        $sponsers = sponserAds::where('status',1)->get();
        $home_3_Categories= category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        $top_selles = DB::table('product_orders')->select('product_id',DB::raw('COUNT(product_id) as count'))->groupBy('product_id')->orderBy('count','desc')->get();
        $top_reviewed= DB::table('product_reviews')->select('product_id',DB::raw('AVG(rate) as rate'))->groupBy('product_id')->orderBy('rate','desc')->get();
        $new_products =product::orderBy('created_at','desc')->get();
        $brands = DB::table('brands')->select('title','image')->where('status','1')->get();
        // more products (random product)
        $get_product_top_selling_ids = array();
        foreach($top_selles as $selles){
            array_push($get_product_top_selling_ids,$selles->product_id);
        }
        // get the products that are in array (best selling)
        $products_bestSelling_top3 = product::wherein('id',$get_product_top_selling_ids)->take(3)->get();
        $products_bestSelling = product::wherein('id',$get_product_top_selling_ids)->get();
        $products_review_ids = product::get();
        $products_review_ids_array = array();
      
        foreach($products_review_ids as $all_ids){
            array_push($products_review_ids_array,$all_ids->id);
        }
       
        return view('frontend.frontend_pages.homepage',compact('brands','products_bestSelling_top3','new_products','top_reviewed','sponsers','banners', 'categories','home_3_Categories','products_bestSelling'));
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
        $products = $products->with('this_belong_to_category')->where(['status' => 1])->paginate(50); 
        $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        #vendors
        $main_vendors = User::where('status', 'active')->where('role','seller')->get();
        #type of work filter
        $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->where('added_by','seller')->pluck('type_of_work');

        
        return view('frontend.frontend_pages.products.shop',compact('products','route', 'main_categories', 'main_vendors', 'type_of_work'));

    }   
    public function shop_list( Request $request)
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
        $route = 'shop_list';
        // Filter Section
         // Filter Section
        #categories
        $products = $products->where(['status' => 1])->paginate(12); 

        $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        #vendors
        $main_vendors = User::where('status', 'active')->where('role','seller')->get();
        #type of work filter
        $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->pluck('type_of_work');
    
        return view('frontend.frontend_pages.products.shop_list', compact('products','route', 'main_categories', 'main_vendors', 'type_of_work'));
    }

    public function special_category_product(Request $request , $slug)
    {
        $category_product = category::with('one_cat_has_many_products')->where('slug', $slug)->first();

        $banner_category = categoryBanner::where('category_place_id',$category_product->id)->get();
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
        #vendors
        $main_vendors = Seller::where('status',1)->where('added_by','seller')->get();
        #type of work filter
        $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->pluck('type_of_work');
        return view('frontend.frontend_pages.products.shop_list_products',compact('banner_category','category_product', 'route' , 'products', 'count_product', 'main_categories' , 'main_vendors', 'type_of_work'));
    }
    //still empty 
    public function shop_child_cat(Request $request , $slug)
    {
        $category_product = category::with('one_cat_has_many_products')->where('slug', $slug)->first();
        //get the sort value from the Ajax
        $banner_category = categoryBanner::where('category_place_id',$category_product->id)->get();

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
            $products= product::orderBy('price','ASC')->where(['status'=> 1 , 'child_category_id'=>$category_product->id])->paginate(12);
            } elseif ($sort == 'price-high') {
                $products = product::orderBy('price', 'DESC')->where(['status' => 1, 'child_category_id' => $category_product->id])->paginate(12);
            } elseif ($sort == 'alpha-asc') {
                $products = product::orderBy('title', 'ASC')->where(['status' => 1, 'child_category_id' => $category_product->id])->paginate(12);

            } elseif ($sort == 'alpha-desc') {
                $products = product::orderBy('title', 'DESC')->where(['status' => 1, 'child_category_id' => $category_product->id])->paginate(12);

            } elseif ($sort == 'discountLTH') {
                $products = product::orderBy('discound', 'ASC')->where(['status' => 1, 'child_category_id' => $category_product->id])->paginate(12);

            } elseif ($sort == 'discountHTL') {
                $products = product::orderBy('discound', 'DESC')->where(['status' => 1, 'child_category_id' => $category_product->id])->paginate(12);

            }else{
                $products = product::where(['status' => 1, 'child_category_id' => $category_product->id])->paginate(50);
            }
            
        }

        $count_product =  count($products);
        $route = 'Shop/prodcuts/sub_product';

        // Filter Section
        $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        #vendors
        $main_vendors = Seller::where('status',1)->where('added_by','seller')->get();
        #type of work filter
        $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->pluck('type_of_work');
        return view('frontend.frontend_pages.products.shop_child_cat',compact('banner_category','category_product', 'route' , 'products', 'count_product', 'main_categories' , 'main_vendors', 'type_of_work'));
    }
    public function Single_product($slug)
    {
      $single_product = product::with('rel_product')->where('slug',$slug)->first(); // single product info
      $related_product = product::where('category_id',$single_product->category_id)->where('id','!=',$single_product->id)->get();
      $vendor_info = Seller::where('id',$single_product->vendor_id)->first(); // vednof info
      $vendor_products= product::where('vendor_id',$vendor_info->id)->where('added_by','seller')->get();
      $product_attr = productAttribute::where('product_id',$single_product->id)->get();
      $product_gallary =productGallary::where('product_id',$single_product->id)->get();
      $user_review = ProductReview::where('product_id',$single_product->id)->latest()->paginate(10); // product_review
      $avareg_review = ProductReview::where('product_id',$single_product->id)->get();
      $Category_related_product = category::where('id',$single_product->category_id)->first();
      $more_products_left_side = product::where('id','!=',$single_product->id)->inRandomOrder()->take(7)->get();

     #review comments 
     if(empty($single_product->frequantly_boughts_ids) || $single_product->frequantly_boughts_ids == null){
        $freq_products = 0;
     }else{
         $freq_products = product::wherein('id',$single_product->frequantly_boughts_ids)->get(); // get frequantly products
     }
     $avareg = 0;
                                       $sum = 0;
                                       foreach($avareg_review as $avg){
                                           $sum += $avg->rate;
                                           $countavg = count($avareg_review);
                                           $avareg = $sum / $countavg;
                                        }
      if($single_product){
        return view('frontend.frontend_pages.products.single_product',compact('more_products_left_side','freq_products','related_product','vendor_products','avareg','avareg_review','single_product','vendor_info','product_gallary','product_attr','user_review','Category_related_product'));
      }else{
        return back()->with('error','This Product Is Not Valid');
      }
    }

    // shop for brnads 

    public function shop_brands(Request $request, $slug)
    {
        $data = $request->all();
        dd($data);
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


    
//++++++++++++++++++++++++++++++++ User to Become a Seller Login And Register  +++++++++++++++++++++++++++++++++++++++++++++++++//

        public function become_seller()
        {
            return view('frontend.frontend_pages.sellers.become_seller');
        }

        public function view_register_seller_form()
        {
        return view('frontend.frontend_pages.auth.register_vendors');
        }
        public function vendor_info(Request $request)
        {
            $data = $request->all();
            
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
            //checck email if exist
            $emailCheck = Seller::where('username',$data['username'])->count();
            if($emailCheck > 0){
                return back()->with('error','username Is Already Exist');
            }
            $shop_name_checker = Seller::where('shop_name', $data['shop-name'])->count();
            if($shop_name_checker > 0){
                return back()->with('error', 'shop name is Already there , please change it');
            }
            $shop_name_checker = Seller::where('username', $data['username'])->count();
            if($shop_name_checker > 0){
                return back()->with('error', 'User name is Already there , please change it');
            }
            //checck email if exist
            $validator =  Validator::make($data, [
                'brand_logo' => 'max:10240',
                'photo' => 'max:10240',
                'license' => 'max:10240',
            ]);
            if($validator->fails()){
                return back()->with('error','your Images are too big to be uploaded');
            }
                //get the attached License
                $attachment = $request->file('license');
                $name_filename = time() . '.' . $attachment->getClientOriginalExtension();
                Storage::disk('public')->put('seller/'.$name_filename,File::get($attachment));
                $filename =$name_filename;


                //get the attached personal Photo
                $attachment = $request->file('photo');
                $name_filephoto = time() . '.' . $attachment->getClientOriginalExtension();
                Storage::disk('public')->put('seller/'.$name_filephoto,File::get($attachment));
                $filephoto = $name_filephoto;

                //get the attached company brand logo
                $attachment = $request->file('brand_logo');
                $name_filebrandLogo = time() . '.' . $attachment->getClientOriginalExtension();
                // create folder
                Storage::disk('public')->put('seller/'.$name_filebrandLogo,File::get($attachment));
                $file_brand_logo = $name_filebrandLogo;
                // send email to hold it before activation 
            $adminData = [
                'email' => $data['email'],
                'full_name' => $data['name'],
                'phone' => $data['phone-number'],
                'type_of_work' => $data['type_of_work'],
                'shopname'=> $data['shop-name'],
                'address' => $data['address'],
                'license' =>$filename,
                'country' =>$data['country']
            ];
            $newdata = [
                'email' => $data['email'],
                'name' => $data['name'],
                'phone' => $data['phone-number'],
                'type_of_work' => $data['type_of_work'],
                'shopname'=> $data['shop-name'],
                'address' => $data['address'],
                'country' =>$data['country']
            ];
            
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

            try {
                Mail::to($data['email'])->send(new verficationVendors($newdata));
                //send the data to admin to verify the user 
                Mail::to('alomda.alslmat@gmail.com')->send(new verfication_admin_email_for_vendors($adminData));
            } catch (\Throwable $th) {
                //throw $th;
                return back()->with('error','your email has problem');
            }
        
            return back()->with('message', 'kindly check your email , the Verification Email has been sent');

        }
        // +++++++++++++++++++++++++++++ VVendors pages ++++++++++++++++++++++++++++//

        public function sellers_list()
        {
            $sellers = Seller::where('status',1)->get();
            return view('frontend.frontend_pages.sellers.sellers_pages.sellers_shops',compact('sellers'));
        }
        public function single_seller($id)
        {
            $seller = Seller::where('username',$id)->where('status',1)->first();
            $vendor_product = product::where('vendor_id',$seller->id)->where('added_by','seller')->get();
            $top_selles_vendor = DB::table('product_orders')->select('product_id',DB::raw('COUNT(product_id) as count'))->groupBy('product_id')->orderBy('count','desc')->take(6)->get();
            $top_reviewed_vendor_product= DB::table('product_reviews')->select('product_id',DB::raw('AVG(rate) as rate'))->groupBy('product_id')->orderBy('rate','desc')->take(6)->get();

            return view('frontend.frontend_pages.sellers.sellers_pages.single_seller',compact('top_reviewed_vendor_product','top_selles_vendor','seller','vendor_product'));
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
                return redirect()->route('userdashboard')->with('message','Welcome Back '.auth()->user()->username);
            }
        }else{
            return back()->with('error','Invalid Email & Password Or the Status of your account is inactive please contact the Admin');
        }
    }

    public function register_users( Request $request)
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
        $user_orders = Order::where('user_id',$current_user->id)->get();
        if($current_user){
            // dd($current_user);
            return view('frontend.frontend_pages.auth.user_dashboard', compact('user_orders','current_user'));
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
            $sstate =     $user_address->sstat;
            $spostcode = $user_address->spostcode;
        }
        User::where('id', $id)->update([

        'address' => $data['address'],
        'country' => $data['country'],
        'city' => $data['city'],
        'postcode' => $data['postcode'],
        'stat' => $data['state'],
        'saddress' => $saddress,
        'scountry' => $scountry,
        'scity' => $scity,
        'spostcode' => $spostcode,
        'sstat' => $sstate,
            
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
                'sstat' => $data['sstat'],
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



    //+++++++++++++++++++++++++++++++ Languages Switcher ++++++++++++++++++++++++++//

    public function switchLang($lang)
    {
       
       if(array_key_exists($lang,Config::get('languages'))){
        Session::put('applocale',$lang);
       }
       return Redirect::back();
    }
}
