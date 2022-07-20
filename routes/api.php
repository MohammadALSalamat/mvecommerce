<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\OrderController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ShippingCartController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\api\v1\frontPageApiController;
use App\Http\Controllers\api\v2\ApiItajerUpdatedInformation;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



//++++++++++++++++++++++++++ v2 of api routes +++++++++++++++++++++++++
Route::group(['perfix'=>'v2'],function(){
   //+++++++++++++++++++++++++ users information api/v2 +++++++++++++++++++++++++++++++++++
    Route::get('v2/users/{id?}', [ApiItajerUpdatedInformation::class,'users_info']);
    Route::post('v2/login',[ApiItajerUpdatedInformation::class,'login_user']);
    Route::post('v2/register',[ApiItajerUpdatedInformation::class,'register_new_user']);
    Route::get('/v2/user/{id?}/user_addresses',[ApiItajerUpdatedInformation::class,'user_addresses']);
    Route::post('v2/create_address',[ApiItajerUpdatedInformation::class,'add_user_address']);
    Route::post('v2/update_address/{id?}',[ApiItajerUpdatedInformation::class,'add_user_address']);

});

















// +++++++++++++++ Defualt Sittings For API +++++++++++++++++++++++++++++++
// get banners of home page
Route::get('/sellers_list',[frontPageApiController::class,'sellers_list']);
Route::get('/single_seller/{id}',[frontPageApiController::class,'single_seller']);

Route::post('/login_user',[frontPageApiController::class,'login_user']);
Route::post('/new_register_user',[frontPageApiController::class,'register_new_user']);


Route::get('/shop',[frontPageApiController::class,'ShopPage'])->name('api_shop_page');

Route::get('/grocery',[frontPageApiController::class,'grocery_shop_only'])->name('api_grocery_shop_only');

// shop page as list 
Route::get('/shop_list', [frontPageApiController::class, 'shop_list'])->name('api_shop_list');

// products for a category
Route::get('/Shop/prodcuts/{slug}',[frontPageApiController::class,'special_category_product'])->name('api_shop_special_category');
Route::get('/Shop/prodcuts/sub_product/{slug}',[frontPageApiController::class,'shop_child_cat'])->name('api_shop_child_cat');
// single prodcut [age]
Route::get('single_product/{slug}', [frontPageApiController::class, 'Single_product'])->name('api_singleproduct');

// shop for brands 

Route::get('brands_category/{slug}',[frontPageApiController::class,'shop_brands'])->name('api_shop_brands');


// shop filter routes
Route::post('shop_filter',[frontPageApiController::class, 'shop_filter'])->name('api_shop_filter');

//grocry filter
Route::post('grocery_filter',[frontPageApiController::class, 'grocery_filter'])->name('api_grocery_filter');


// auto search products

Route::get('autosearch',[frontPageApiController::class,'autosearch'])->name('api_autosearch');
Route::post('search_product',[frontPageApiController::class,'search_product'])->name('api_search_product');

// best dealies page

Route::get('best-deals',[frontPageApiController::class,'best_dealis'])->name('api_best_deals');


Route::get('/',[frontPageApiController::class,'HomePage'])->name('api_homepage');

// countries and cities 
Route::post('api/fetch-states', [OrderController::class, 'fetchState']);
Route::post('api/fetch-cities', [OrderController::class, 'fetchCity']);


// email for vendor help

Route::post('vendor_help',[frontPageApiController::class,'vendor_email_help'])->name('api_vendor_email_help');

// auth show the  login form.
Route::get('my-account',[frontPageApiController::class,'loginForm'])->name('api_loginForm');
// auth submit the login info
Route::post('authsubmit',[frontPageApiController::class,'loginSubmit'])->name('api_submitlogin');
// register custmor data
Route::post('registerusers',[frontPageApiController::class,'register_users'])->name('api_registerusers');

//log out front user

Route::get('user/logout',[frontPageApiController::class,'logout_front_user'])->name('api_logout_front_user');


// become a vendor
Route::get('/become_seller',[frontPageApiController::class,'become_seller'])->name('api_become_seller');
Route::get('register_seller',[frontPageApiController::class,'view_register_seller_form'])->name('api_vendor_form');
Route::post('/vendor_info',[frontPageApiController::class,'vendor_info'])->name('api_vendor_info');

// view the list of stores

Route::get('vendors_list',[frontPageApiController::class,'sellers_list'])->name('api_sellers_list');
Route::get('single_seller/{id}',[frontPageApiController::class,'single_seller'])->name('api_single_seller');

// cart section
Route::get('cart',[ShippingCartController::class, 'viewcart'])->name('api_viewcart');
Route::post('/cart/store',[ShippingCartController::class,'add_to_cart'])->name('api_add_to_cart');
Route::post('/cart/delete', [ShippingCartController::class, 'cart_delete'])->name('api_cart_delete');
Route::get('clear_cart/',function(){
    Cart::instance('shopping')->destroy();
    Session::forget('coupon');
    return back()->with('message','Your Cart is empty');
})->name('api_clear_cart');

//update the cart
Route::post('update_cart',[ShippingCartController::class,'update_cart'])->name('api_update_cart');
// update the add to cart in single product page
Route::post('sing_page_update_cart',[ShippingCartController::class,'sing_page_update_cart'])->name('api_sing_page_update_cart');

// add Frequently bought togher to cart
Route::post('freq-product-add-to-cart',[ShippingCartController::class,'freq_product_add_to_cart'])->name('api_sing_freq_page_update_cart');

//coupon
Route::post('/coupon_discound',[ShippingCartController::class, 'code_coupon'])->name('api_code_coupon');


// whish list section

Route::get('wishlist',[WishlistController::class,'view_wishlist'])->name('api_view_wishlist');
Route::post('/wishlist', [WishlistController::class, 'add_to_wishlist'])->name('api_add_to_wishlist');
Route::post('/wishlist_move_to_cart',[WishlistController::class, 'wishlist_move_to_cart'])->name('api_wishlist_move_to_cart');
Route::post('/wishlist_delete', [WishlistController::class, 'wishlist_delete'])->name('api_wishlist_delete');


// check out page just for login users

Route::get('checkout',[OrderController::class,'view_checkout'])->name('api_checkout')->middleware('user');

Route::post('checkout/process',[OrderController::class,'checkout_process'])->name('api_checkout_process');

// Product review section

Route::post('review_submit/{slug}',[ProductReviewController::class,'reviewSubmit'])->name('api_review_submit');

// validation for Seller Regiestration  using AJAX
Route::post('email-validate', [frontPageApiController::class, 'checkEmail'])->name('api_checkEmail');
Route::post('shopname-validate', [frontPageApiController::class, 'checkshopname'])->name('api_checkshopname');
Route::post('username-validate', [frontPageApiController::class, 'checkusername'])->name('api_checkusername');

// validation in users forms
Route::post('user_email-validate', [frontPageApiController::class, 'user_checkEmail'])->name('api_user_checkEmail');




// channge language
Route::get('lang/{lang}',[frontPageApiController::class,'switchLang'])->name('api_lang.switch');

// user dashboard and settings
Route::get('helpus',[HelpUsController::class,'helpus'])->name('api_helpus');
