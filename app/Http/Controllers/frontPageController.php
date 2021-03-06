<?php

namespace App\Http\Controllers;

use Helper;
use App\Models\City;
use App\Models\User;
use App\Models\brand;
use App\Models\Order;
use App\Models\banner;
use App\Models\Region;
use App\Models\Seller;
use App\Models\Country;
use App\Models\product;
use App\Models\category;
use App\Models\sponserAds;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\categoryBanner;
use App\Models\productGallary;
use App\Models\productAttribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Jobs\sellerRegistertionEmail;
use App\Mail\Single_vendor_email_help;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use App\Jobs\sellerRegistertionEmail_forAdmin;
use App\Models\userLocation;

class frontPageController extends Controller
{
    //add data from database to front page

    public function HomePage()
    {
        
        $banners = banner::where('status', 'active')->where('is_banner', '1')->get();
        $categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        $categories_discound = category::with('best_descound')->where('is_parent', 0)->where('status', 1)->get();
        $sponsers = sponserAds::where('status',1)->get();
        $home_3_Categories= category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->where('id','!=',4)->get();
        $home_Grocery_Categories =category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->where('id',4)->get();
        $top_selles = DB::table('product_orders')->select('product_id',DB::raw('COUNT(product_id) as count'))->groupBy('product_id')->orderBy('count','DESC')->get();
        $top_reviewed= DB::table('product_reviews')->select('product_id',DB::raw('AVG(rate) as rate'))->groupBy('product_id')->orderBy('rate','DESC')->get();
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
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);
        return view('frontend.frontend_pages.homepage',compact('home_Grocery_Categories','brands','products_bestSelling_top3','new_products','top_reviewed','sponsers','banners', 'categories','home_3_Categories','products_bestSelling','categories_discound','user_locations'));
    }

    public function aboutus()
    {
        return view('frontend.frontend_pages.pages.aboutus');
    }
    public function refund_can()
    {
        return view('frontend.frontend_pages.pages.ret_cancl');
    }
    public function policy()
    {
        return view('frontend.frontend_pages.pages.privacy_policy');
    }
    public function terms_condations()
    {
        return view('frontend.frontend_pages.pages.terms_conditions');
    }
    public function datascurity()
    {
        return view('frontend.frontend_pages.pages.datascurity');
    }
    public function DISCLAIMER()
    {
        return view('frontend.frontend_pages.pages.dicmail');
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
        
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);

        return view('frontend.frontend_pages.products.shop',compact('brands_rel_product','products','route', 'main_categories', 'main_vendors', 'type_of_work'));

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
        return view('frontend.frontend_pages.products.GroceryShop.shop_for_grocry',compact('banner_category','category_product','products','route', 'main_categories', 'main_vendors'));
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

        //brands
        if (!empty($_GET['brand'])) {
            $slug = explode(',', $_GET['brand']);
            $brands_ids = brand::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();
            // get the products with the selected categories
            $products = $products->whereIn('brand_id', $brands_ids);
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
    
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);

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
        $main_vendors = Seller::where('status',1)->where('is_verify' , 1)->get();
        #type of work filter
        $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->pluck('type_of_work');
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);
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
        $main_vendors = Seller::where('status',1)->where('is_verify' , 1)->get();
        #type of work filter
        $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->pluck('type_of_work');
        
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);
        
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

     $current_url = URL::current();
     SEOMeta::setCanonical($current_url);

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

    // Collections Filter

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
        $brandsUrl = '';
        if(!empty($data['brand'])){
            foreach($data['brand'] as $brand){
                if(empty($brandsUrl)){
                    $brandsUrl.='&brand='.$brand;
                }else{
                    $brandsUrl.=','.$brand;
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
        return redirect()->route('shop_page',$catUrl.$brandsUrl.$price_range_url);
    }

   
    
    //Grocery Filter
    
    public function Grocery_filter(Request $request)
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
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);
        return redirect()->route('grocery_shop_only',$catUrl.$price_range_url);
    }

    // auto search products 

    public function autosearch(Request $request)
    {
        $data = $request->get('term','');
        // get the products
        $products_autoSearch = product::where('title','LIKE','%'.$data.'%')->orwhere('ar_title','LIKE','%'.$data.'%')->get();

        // add the products to an array

        $products_array = array();
        foreach($products_autoSearch as $product){
            if (preg_match('/[????????-??]/ui', $data)){
                $products_array[]= array('value'=>$product->ar_title,'id'=>$product->id);
            }else{
                $products_array[]= array('value'=>$product->title,'id'=>$product->id);
            }
        }
        if(count($products_array)){
            return $products_array;
        }else{
            if (preg_match('/[????????-??]/ui', $data)){
                return ['value'=>'???? ???????? ???????????? ???????? ?????????' ,'id'=>''];
            }else{
                return ['value'=>'There Is No Reslut Found...' ,'id'=>''];
            }
        }
    }

    // find the currenet product 

    public function search_product(Request $request)
    {
        # get the products

        $query = $request->input('search_product');
        
        $products = product::where('title','LIKE','%'.$query.'%')->orwhere('ar_title','LIKE','%'.$query.'%')->paginate(12);
        $main_categories = category::with('one_cat_has_many_products')->where('is_parent', 0)->where('status', 1)->get();
        #vendors

        // brands and related products

        $brands_rel_product = brand::with('products')->where('status',1)->get();

        $main_vendors = User::where('status', 'active')->where('role','seller')->get();
        #type of work filter
        $type_of_work = Seller::groupBy('type_of_work')->where('status',1)->where('added_by','seller')->pluck('type_of_work');
        $route='shop';
        
        return view('frontend.frontend_pages.products.shop',compact('brands_rel_product','products','route', 'main_categories', 'main_vendors', 'type_of_work'));

    }


    // best dealies of the products where has discound more that 30%

    public function best_dealis(Request $request)
    {
          // product filter in shop page get the data from the link top
          $products = product::query();
          
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
          $route='best-deals';
          
          $products = $products->with('this_belong_to_category')->where(['status' => 1])->where('discound','>',20)->orderBy('discound', 'DESC')->paginate(50);
          
          $current_url = URL::current();
          SEOMeta::setCanonical($current_url);

        return view('frontend.frontend_pages.products.best_Deails.best_deails',compact('products','route'));
    }
    
//++++++++++++++++++++++++++++++++ User to Become a Seller Login And Register  +++++++++++++++++++++++++++++++++++++++++++++++++//

        public function become_seller()
        {
            $current_url = URL::current();
            SEOMeta::setCanonical($current_url);
            return view('frontend.frontend_pages.sellers.become_seller');
        }

        public function view_register_seller_form()
        {

            $current_url = URL::current();
            SEOMeta::setCanonical($current_url);

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
            if ($data['street'] == null || empty($data['street'])) {
                return back()->with('error', 'address is required');
            }
            if ($data['nearlocation'] == null || empty($data['nearlocation'])) {
                return back()->with('error', 'nearlocation is required');
            }
            if ($data['building'] == null || empty($data['building'])) {
                return back()->with('error', 'building is required');
            }
            if ($data['city'] == null || empty($data['city'])) {
                return back()->with('error', 'city is required');
            }
            if (empty($data['country'])) {
                $data['country'] = 'Untited Arab Emirates';
            }
            if ($data['agreed_policy'] == null || empty($data['agreed_policy'])) {
                return back()->with('error', 'Check Box  Policy is required');
            }
            if ($data['license'] == null || empty($data['license'])) {
                return back()->with('error', 'license is required');
            }
            //check email if exist
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
                'address' => $data['street'].','.$data['nearlocation'].','.$data['building'],
                'license' =>$filename,
                'country' =>$data['country']
            ];
            $newdata = [
                'email' => $data['email'],
                'name' => $data['name'],
                'phone' => $data['phone-number'],
                'type_of_work' => $data['type_of_work'],
                'shopname'=> $data['shop-name'],
                'address' => $data['street'].','.$data['nearlocation'].','.$data['building'],
                'country' =>$data['country']
            ];
          
            
            $addnewvendor = new Seller();
            $addnewvendor->full_name = $data['name'];
            $addnewvendor->username = $data['username'];
            $addnewvendor->email = $data['email'];
            $addnewvendor->city = $data['city'];
            $addnewvendor->country = $data['country'];
            $addnewvendor->address = $data['street'].','.$data['nearlocation'].','.$data['building'];
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
                dispatch(new sellerRegistertionEmail($newdata));
                dispatch(new sellerRegistertionEmail_forAdmin($adminData));
                //send the data to admin to verify the user 
            } catch (\Throwable $th) {
                //throw $th;
                return back()->with('error','your email has problem');
            }
            $current_url = URL::current();
            SEOMeta::setCanonical($current_url);
            return back()->with('message', 'kindly check your email , the Verification Email has been sent');

        }
        
        
        // +++++++++++++++++++++++++++++ VVendors pages ++++++++++++++++++++++++++++//

        public function sellers_list()
        {
            $current_url = URL::current();
            SEOMeta::setCanonical($current_url);
            $sellers = Seller::where('status',1)->where('is_verify' , 1)->get();
            return view('frontend.frontend_pages.sellers.sellers_pages.sellers_shops',compact('sellers'));
        }
        public function single_seller($id)
        {
            $current_url = URL::current();
            SEOMeta::setCanonical($current_url);
            $seller = Seller::where('username',$id)->where('status',1)->where('is_verify' , 1)->first();
            $vendor_product = product::where('vendor_id',$seller->id)->where('added_by','seller')->get();
            $top_selles_vendor = DB::table('product_orders')->select('product_id',DB::raw('COUNT(product_id) as count'))->groupBy('product_id')->orderBy('count','desc')->take(6)->get();
            $top_reviewed_vendor_product= DB::table('product_reviews')->select('product_id',DB::raw('AVG(rate) as rate'))->groupBy('product_id')->orderBy('rate','desc')->take(6)->get();

            return view('frontend.frontend_pages.sellers.sellers_pages.single_seller',compact('top_reviewed_vendor_product','top_selles_vendor','seller','vendor_product'));
        }

        public function vendor_email_help(Request $request)
        {
            #send email to vendor from the user
            $data = $request->all();
            $seller = Seller::where('id',$data['seller_id'])->where('status',1)->where('is_verify' , 1)->first();
            if(empty($data['name']) || $data['name'] == null){
                return back()->with('error','The name is reqired');
            }
            if(empty($data['email_vendor']) || $data['email_vendor'] == null){
                return back()->with('error','The email is reqired');
            }
            if(empty($data['message']) || $data['message'] == null){
                return back()->with('error','The message is reqired');
            }
            $data_info= [
                'name' => $data['name'],
                'email' => $data['email_vendor'],
                'message' => $data['message'],
                'vendor_email' => $seller->email,
            ];

            Mail::to($seller->email)->send(new Single_vendor_email_help($data_info)); // send email to admin

            return back()->with('message','Thank you for your submition , Your email has been sent');

        }

        // Validation The Regiester Form 
        public function checkEmail(Request $request)
        {
            $input = $request->only(['email']);
    
            $request_data = [
                'email' => 'required|email|unique:sellers,email',
            ];
    
            $validator = Validator::make($input, $request_data);
    
            // json is null
            if ($validator->fails()) {
                $errors = json_decode(json_encode($validator->errors()), 1);
                return response()->json([
                    'success' => false,
                    'message' => array_reduce($errors, 'array_merge', array()),
                ]);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'The email is available'
                ]);
            }
        }
        public function checkusername(Request $request)
        {
            $input = $request->only(['username']);
    
            $request_data = [
                'username' => 'required|unique:sellers,username|min:4|max:12',
            ];
    
            $validator = Validator::make($input, $request_data);
    
            // json is null
            if ($validator->fails()) {
                $errors = json_decode(json_encode($validator->errors()), 1);
                return response()->json([
                    'success' => false,
                    'message' => array_reduce($errors, 'array_merge', array()),
                ]);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'The Username is available'
                ]);
            }
        }
        public function checkshopname(Request $request)
        {
            $input = $request->only(['shopname']);
    
            $request_data = [
                'shopname' => 'required|unique:sellers,shop_name|min:6|max:20',
            ];
    
            $validator = Validator::make($input, $request_data);
    
            // json is null
            if ($validator->fails()) {
                $errors = json_decode(json_encode($validator->errors()), 1);
                return response()->json([
                    'success' => false,
                    'message' => array_reduce($errors, 'array_merge', array()),
                ]);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'The Username is available'
                ]);
            }
        }
 //++++++++++++++++++++++++++++  User Login Section   ++++++++++++++++++++++++++++++//

    public function loginForm()
    {
        Session::put('url.intended',URL::previous());
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
                return Redirect::to(Session::get('url.intended'))->with('message','Welcome Back '.auth()->user()->username);
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
                $addnewcustumer->createToken('ItajerCustomerToken')->accessToken;

                return back()->with('message','Congrats you have registerd as a customer');
    }

    public function logout_front_user()
    {
        Session::forget('user');
        Session::forget('coupon');
        Cart::instance('shopping')->destroy();
        Auth::logout();
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);
        return redirect()->route('homepage')->with('message','You Have logged out Seccessfuly!!');
    }



 //++++++++++++++++++++++++++++ Current User Dashboard   ++++++++++++++++++++++++++++++//

    // user dahsboard
    public function userdashboard()
    {
        $current_url = URL::current();
        SEOMeta::setCanonical($current_url);
        
        $current_user = Auth::user();
        $user_orders = Order::orderBy('id','DESC')->where('user_id',$current_user->id)->get();
        $user_locations = userLocation::orderBy('themain_address','DESC')->where('user_id',$current_user->id)->get();
        if($current_user){
            // dd($current_user);
            return view('frontend.frontend_pages.auth.user_dashboard', compact('user_orders','current_user','user_locations'));
        }else{
            return redirect()->route('loginForm')->with('warning','Login First To have access');
        }
    }

    // Validation The Regiester Form 
    public function user_checkEmail(Request $request)
    {
        $input = $request->only(['email']);

        $request_data = [
            'email' => 'required|email|unique:users,email',
        ];

        $validator = Validator::make($input, $request_data);

        // json is null
        if ($validator->fails()) {
            $errors = json_decode(json_encode($validator->errors()), 1);
            return response()->json([
                'success' => false,
                'message' => array_reduce($errors, 'array_merge', array()),
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'The email is available'
            ]);
        }
    }

    // deliver address 

    public function deliver_address()
    {
        $countries = Country::get(["country", "id"]);
        if(Auth::check()){
            $user_locations = userLocation::orderBy('themain_address','DESC')->where('user_id',auth()->user()->id)->get();
        }else{
            $user_locations = null;
        }
        return view('frontend.frontend_pages.auth.add_address',compact('countries','user_locations'));
    }
 // cities and countries dropdown

 public function fetchState(Request $request)
 {
     $data['states'] = Region::where("country_id",$request->country_id)->get(["region", "id"]);
    return response()->json($data);
 }
 public function fetchCity(Request $request)
 {
     $data['cities'] = City::where("region_id",$request->state_id)->get(["city", "id"]);
     return response()->json($data);
 }


 // add new address 

 public function add_deliver_address(Request $request)
 {
    $data = $request->all();
    $current_user = User::find($data['user_id']);
    if($current_user){
    if( empty($data['country']) || $data['country'] == null ){
        return back()->with('error','the country is required');
    }
    
    if (empty($data['state']) || $data['state'] == null) {
        return back()->with('error', 'the state is required');
    }

    if (empty($data['city']) || $data['city'] == null) {
        $city = null;
    }else{
        $city = $data['city'];
    }

    
    if (empty($data['full_name']) || $data['full_name'] == null) {
        $full_name = $current_user->full_name;
    }else{
        $full_name = $data['full_name'];
    }

    if (empty($data['phone']) || $data['phone'] == null) {
        return back()->with('error', 'the phone is required');
    }

    if (empty($data['street_name']) || $data['street_name'] == null) {
        return back()->with('error', 'the Street name is required');
    }

    if (empty($data['full_street_info']) || $data['full_street_info'] == null) {
        return back()->with('error', 'the building information is required');
    }
        $check_ifthe_City_is_UAE = Country::find($data['country']);
        $state = Region::find($data['state']);
        $city_name = City::find($city);
        $check_if_user_has_an_address = userLocation::where('user_id',$current_user->id)->count();
        if($check_if_user_has_an_address == 0){
            $themain_address = 1;
        }else{
            $themain_address = 0;
        }
        
        if($check_ifthe_City_is_UAE->id == 252){
            $new_address = new userLocation();
            $new_address->user_id = $current_user->id;
            $new_address->themain_address = $themain_address;
            $new_address->address = $data['street_name'];
            $new_address->full_name = $full_name;
            $new_address->full_street_info = $data['full_street_info'];
            $new_address->country = $check_ifthe_City_is_UAE->country;
            $new_address->city = $state->region;
            $new_address->phone = $data['phone'];
            $new_address->near_location = $data['near_landmark'];
            $new_address->save();

            return back()->with('message','your address has been saved');
        }else{
            return back()->with('error','the country is not listed in Delivery area');
        }
    }else{
        return redirect()->route('loginForm')->with('warning','Login First To have access');
    }
    
 }

 // update currnt address 

 public function edit_deliverAddress($id)
 {
    $countries = Country::get(["country", "id"]);
    $current_location = userLocation::find($id);
    $state_name = Region::where('region',$current_location->city)->first();
    if(Auth::check()){
        $user_locations = userLocation::orderBy('themain_address','DESC')->where('user_id',auth()->user()->id)->get();
    }else{
        $user_locations = null;
    }
    return view('frontend.frontend_pages.auth.edit_address',compact('current_location','state_name','countries','user_locations'));
 }

 public function address_update(Request $request,$id)
 {
    $data = $request->all();
    $current_user = User::find($data['user_id']);
    if($current_user){
    if( empty($data['country']) || $data['country'] == null ){
        return back()->with('error','the country is required');
    }
    
    if (empty($data['state']) || $data['state'] == null) {
        return back()->with('error', 'the state is required');
    }

    if (empty($data['city']) || $data['city'] == null) {
        $city = null;
    }else{
        $city = $data['city'];
    }

    
    if (empty($data['full_name']) || $data['full_name'] == null) {
        $full_name = $current_user->full_name;
    }else{
        $full_name = $data['full_name'];
    }

    if (empty($data['phone']) || $data['phone'] == null) {
        return back()->with('error', 'the phone is required');
    }

    // if(substr($data['phone'],0,4) == '+971'){
    //     $phone = $data['phone'];
    // }else{
    //     $phone = '+971'.$data['phone'];
    // }

    if (empty($data['street_name']) || $data['street_name'] == null) {
        return back()->with('error', 'the Street name is required');
    }

    if (empty($data['full_street_info']) || $data['full_street_info'] == null) {
        return back()->with('error', 'the building information is required');
    }
        $check_ifthe_City_is_UAE = Country::find($data['country']);
        $state = Region::find($data['state']);
        
        if($check_ifthe_City_is_UAE->id == 252){
            userLocation::where('id',$id)->update([
           'user_id' => $current_user->id,
           'themain_address' => 0,
           'address' => $data['street_name'],
           'full_name' => $full_name,
           'full_street_info' => $data['full_street_info'],
           'country' => $check_ifthe_City_is_UAE->country,
           'city' => $state->region,
           'phone' => $data['phone'],
           'near_location' => $data['near_landmark'],
            ]);

            return back()->with('message','your address has been Updated');
        }else{
            return back()->with('error','the country is not listed in Delivery area');
        }
    }else{
        return redirect()->route('loginForm')->with('warning','Login First To have access');
    }
 }
 // delete the address from the location

 public function delete_deliverAddress($id)
 {
    $current_location = userLocation::find($id);
    if($current_location){
        userLocation::where('id',$id)->delete();
        return back()->with('message','The address has been deleted');
    }else{
        return back()->with('error','the address is not there now');
    }
 }

 public function set_deliverAddress_asDefualt($id)
 {
    $current_location = userLocation::find($id);
    $loations = userLocation::where('id','!=',$current_location->id)->get();
    if($current_location){
        foreach($loations as $location){
            userLocation::where('id',$location->id)->update([
                'themain_address'=> 0
            ]);
        }
        userLocation::where('id',$current_location->id)->update([
            'themain_address'=> 1
        ]);

        return back()->with('message','your address has been set to be used in checkout');
    }else{
        return back()->with('error','The address is not there');

    }

 }

 public function selected_address(Request $request)
 {
    $data = $request->all();

    $current_location = userLocation::find($data['location_id_selected']);
    $loations = userLocation::where('id','!=',$current_location->id)->get();
    if($current_location){
        foreach($loations as $location){
            userLocation::where('id',$location->id)->update([
                'themain_address'=> 0
            ]);
        }
        userLocation::where('id',$current_location->id)->update([
            'themain_address'=> 1
        ]);

        return back()->with('message','your address has been set to be used in checkout');
    }else{
        return back()->with('error','The address is not there');

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
