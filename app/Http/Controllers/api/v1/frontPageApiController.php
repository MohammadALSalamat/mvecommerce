<?php

namespace App\Http\Controllers\api\v1;

use Helper;
use App\Models\City;
use App\Models\brand;
use App\Models\Order;
use App\Models\Region;
use App\Models\Country;
use App\Models\category;
use App\Models\sponserAds;
use App\Models\ProductReview;
use App\Models\categoryBanner;
use App\Models\productGallary;
use App\Models\productAttribute;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Jobs\sellerRegistertionEmail;
use App\Mail\Single_vendor_email_help;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Jobs\sellerRegistertionEmail_forAdmin;
use App\Models\userLocation;
use App\Models\User;
use App\Models\banner;
use App\Models\Seller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class frontPageApiController extends Controller
{
    // ++++++++++++++++++++++++++ HOME PAGE INTERFACE +++++++++++++++++++++++++++++

    public function HomePage()
    {
        //get the data
        $banners = banner::where('status', 'active')->where('is_banner', '1')->get();
        $categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        $categories_discound = category::with('best_descound')->where('is_parent', 0)->where('status', 1)->get();
        $sponsers = sponserAds::where('status',1)->get();
        $home_3_Categories= category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->where('id','!=',4)->get();
        $home_Grocery_Categories =category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->where('id',4)->get();
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
        if(Auth::check()){
            $user_locations = userLocation::orderBy('themain_address','DESC')->where('user_id',auth()->user()->id)->get();
        }else{
            $user_locations = null;
        }
        
        return response()->json([
            'home_Grocery_Categories'=>$home_Grocery_Categories,
            'brands'=>$brands,
            'products_bestSelling_top3'=>$products_bestSelling_top3,
            'new_products'=>$new_products,
            'top_reviewed'=>$top_reviewed,
            'sponsers'=>$sponsers,
            'banners'=>$banners, 
            'categories'=>$categories,
            'home_3_Categories'=>$home_3_Categories,
            'products_bestSelling'=>$products_bestSelling,
            'categories_discound'=>$categories_discound,
            'user_locations'=>$user_locations
        ]);
    }

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
         //brands
         if (!empty($_GET['brand'])) {
             $slug = explode(',', $_GET['brand']);
             $brands_ids = brand::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();
             // get the products with the selected categories
             $products = $products->whereIn('brand_id', $brands_ids);
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
         $products = $products->with('this_belong_to_category')->where(['status' => 1])->where('category_id','!=', 4)->paginate(50); 
        
         $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
         #vendors
 
         // brands and related products
 
         $brands_rel_product = brand::with('products')->where('status',1)->get();
 
         $main_vendors = User::where('status', 'active')->where('role','seller')->get();
         #type of work filter
         $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->where('added_by','seller')->pluck('type_of_work');
         
 
         return response()->json([
         'brands_rel_product'=>$brands_rel_product,
         'products'=>$products,
         'route'=>$route, 
         'main_categories'=>$main_categories, 
         'main_vendors'=>$main_vendors, 
         'type_of_work'=>$type_of_work
        ]);
 
     } 

     // Grocery Shop Only 
    public function grocery_shop_only(Request $request)
    {

        // product filter in shop page get the data from the link top
        $products = product::query();
        if (!empty($_GET['category'])) {
            $slug = explode(',', $_GET['category']);
            $cat_ids = category::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();
            // get the products with the selected categories
            $products = $products->whereIn('category_id', $cat_ids);
        }
        //brands
        if (!empty($_GET['brand'])) {
            $slug = explode(',', $_GET['brand']);
            $brands_ids = brand::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();
            // get the products with the selected categories
            $products = $products->whereIn('brand_id', $brands_ids);
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
        $route='grocery';
        // Filter Section
        #categories
        $products = $products->with('this_belong_to_category')->where(['status' => 1])->where('category_id', 4)->paginate(50); 
        #vendors
        $banner_category = categoryBanner::where('category_place_id',4)->get();

        $category_product = category::with('one_cat_has_many_products')->where('id',4 )->first();
        $main_categories = category::with('one_child_cat_has_many_products')->where('parent_id',$category_product->id)->where('status',1)->get();
        // brands and related products
        $main_vendors = User::where('status', 'active')->where('role','seller')->get();
        return response()->json([
            'banner_category'=>$banner_category,
            'category_product'=>$category_product,
            'products'=>$products,
            'route'=>$route, 
            'main_categories'=>$main_categories, 
            'main_vendors'=>$main_vendors
        ]);
    } 



    // ++++++++++++++++++++++++++++ SELLERS INFORMTION ++++++++++++++++++++++++++++++
    public function sellers_list()
    {
        $seller_list = Seller::get(['id','full_name','email','username','phone','address','city','country','shop_name','is_verify','status','type_of_work','added_by']);
        
        return json_decode($seller_list);

    }

    public function single_seller($id)
    {
        $seller = Seller::where('username',$id)->where('status',1)->where('is_verify' , 1)->first(['id','full_name','email','username','phone','address','city','country','shop_name','is_verify','status','type_of_work','added_by']);
        $vendor_product = product::where('vendor_id',$seller->id)->where('added_by','seller')->get();
        $top_selles_vendor = DB::table('product_orders')->select('product_id',DB::raw('COUNT(product_id) as count'))->groupBy('product_id')->orderBy('count','desc')->take(6)->get();
        $top_reviewed_vendor_product= DB::table('product_reviews')->select('product_id',DB::raw('AVG(rate) as rate'))->groupBy('product_id')->orderBy('rate','desc')->take(6)->get();

        return response()->json([
        'seller_details'=>$seller,
        'seller_products'=>$vendor_product,
        'top_products_sells_of_seller'=>$top_selles_vendor,
        'top_reviewed_seller_produtcs'=>$top_reviewed_vendor_product
        ]);

    }

     // ++++++++++++++++++++++++++++ USERS INFORMTION ++++++++++++++++++++++++++++++
    public function register_new_user(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data,[
            'full_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ],[
        'full_name.required'=>'full name file is required',
        'email.required'=>'email is required',
        'email.unique'=>'email is already there',
        ]);
        
        if($validator->failed()){
            return response()->json(['errors'=>'check Validation'],403);
        }
       
        $addnewcustumer = new User();
        $addnewcustumer->full_name = $data['full_name'];
        $addnewcustumer->email = $data['email'];
        $addnewcustumer->password = Hash::make(($data['password']));
        $addnewcustumer->save();

        $token = $addnewcustumer->createToken('ItajerCustomerToken')->accessToken;

        return response()->json(['token'=>$token,'full_name'=>$addnewcustumer->full_name ,'email'=> $addnewcustumer->email],200) ;

    }

     // login get the info details
    public function login_user(Request $request)
    {
         $data = $request->all();
         $validator = Validator::make($data,[
             'email'=> 'email|required|exists:users,email',
             'password'=>'required|min:4',
         ]);
         if ($validator->failed()) {
             if ($validator->failed()) {
                 return response()->json(['errors'=>'check Validation'], 403);
             }
         }
         $userInfo=[
            'email'=>$data['email'],
            'password'=>$data['password'],
            'status'=>'active'
         ];
         if(auth()->attempt($userInfo)){

             $token = auth()->user()->createToken('ItajerCustomerToken')->accessToken;
             return response()->json(['token'=>$token,'full_name'=>auth()->user()->full_name ,'email'=> auth()->user()->email],200) ;

         }else{
             return response()->json(['errors'=>'something Went Wrong '], 401);
         }
    }
 
}
