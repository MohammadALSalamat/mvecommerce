<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\OrderController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\frontPageController;
use App\Http\Controllers\ShippingCartController;
use App\Http\Controllers\ProductReviewController;

//shop page for all products frid system

Route::get('/shop',[frontPageController::class,'ShopPage'])->name('shop_page');

// shop page as list 
Route::get('/shop_list', [frontPageController::class, 'shop_list'])->name('shop_list');

// products for a category
Route::get('/Shop/prodcuts/{slug}',[frontPageController::class,'special_category_product'])->name('shop_special_category');
Route::get('/Shop/prodcuts/sub_product/{slug}',[frontPageController::class,'shop_child_cat'])->name('shop_child_cat');
// single prodcut [age]
Route::get('/single_product/{slug}', [frontPageController::class, 'Single_product'])->name('singleproduct');



// shop filter routes
Route::post('shop_filter',[frontPageController::class, 'shop_filter'])->name('shop_filter');








Route::get('/',[frontPageController::class,'HomePage'])->name('homepage');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// auth show the  login form.
Route::get('my-account',[frontPageController::class,'loginForm'])->name('loginForm');
// auth submit the login info
Route::post('authsubmit',[frontPageController::class,'loginSubmit'])->name('submitlogin');
// register custmor data
Route::post('registerusers',[frontPageController::class,'register_users'])->name('registerusers');

//log out front user

Route::get('user/logout',[frontPageController::class,'logout_front_user'])->name('logout_front_user');


// become a vendor
Route::get('/become_seller',[frontPageController::class,'become_seller'])->name('become_seller');
Route::get('register_seller',[frontPageController::class,'view_register_seller_form'])->name('vendor_form');
Route::post('/vendor_info',[frontPageController::class,'vendor_info'])->name('vendor_info');

// view the list of stores

Route::get('vendors_list',[frontPageController::class,'sellers_list'])->name('sellers_list');
Route::get('single_seller/{id}',[frontPageController::class,'single_seller'])->name('single_seller');

// cart section
Route::get('cart',[ShippingCartController::class, 'viewcart'])->name('viewcart');
Route::post('/cart/store',[ShippingCartController::class,'add_to_cart'])->name('add_to_cart');
Route::post('/cart/delete', [ShippingCartController::class, 'cart_delete'])->name('cart_delete');
Route::get('clear_cart/',function(){
    Cart::instance('shopping')->destroy();
    Session::forget('coupon');
    return back()->with('message','Your Cart is empty');
})->name('clear_cart');

//update the cart
Route::post('update_cart',[ShippingCartController::class,'update_cart'])->name('update_cart');

// update the add to cart in single product page
Route::post('sing_page_update_cart',[ShippingCartController::class,'sing_page_update_cart'])->name('sing_page_update_cart');

//coupon
Route::post('/coupon_discound',[ShippingCartController::class, 'code_coupon'])->name('code_coupon');


// whish list section

Route::get('wishlist',[WishlistController::class,'view_wishlist'])->name('view_wishlist');
Route::post('/wishlist', [WishlistController::class, 'add_to_wishlist'])->name('add_to_wishlist');
Route::post('/wishlist_move_to_cart',[WishlistController::class, 'wishlist_move_to_cart'])->name('wishlist_move_to_cart');
Route::post('/wishlist_delete', [WishlistController::class, 'wishlist_delete'])->name('wishlist_delete');


// check out page just for login users

Route::get('checkout',[OrderController::class,'view_checkout'])->name('checkout')->middleware('user');

Route::post('checkout/process',[OrderController::class,'checkout_process'])->name('checkout_process');

// Product review section

Route::post('review_submit/{slug}',[ProductReviewController::class,'reviewSubmit'])->name('review_submit');


// channge language
Route::get('lang/{lang}',[frontPageController::class,'switchLang'])->name('lang.switch');

// user dashboard and settings

Route::group(['perfix'=>'user'],function(){
    
    //view dashboard
    Route::get('/dashboard',[frontPageController::class,'userdashboard'])->name('userdashboard');
    Route::post('billing_update/{id}',[frontPageController::class, 'billingupdate'])->name('billingupdate');
    Route::post('shipping/{id}',[frontPageController::class, 'shippingupdate'])->name('shippingupdate');
    
    // update user password
    Route::post('update_account/{id}',[frontPageController::class, 'update_useraccount'])->name('updateuseraccount');
    

});