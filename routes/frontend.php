<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\OrderController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\HelpUsController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\frontPageController;
use App\Http\Controllers\ShippingCartController;
use App\Http\Controllers\ProductReviewController;

// Other Pages

Route::get('/about-us',[frontPageController::class,'aboutUs'])->name('aboutus');

Route::get('/refund-cancellation-policy',[frontPageController::class,'refund_can'])->name('refund_can');

Route::get('/policy',[frontPageController::class,'policy'])->name('policy');

Route::get('/Terms-condations',[frontPageController::class,'terms_condations'])->name('terms_condations');

Route::get('/data-scurtiy',[frontPageController::class,'datascurity'])->name('datascurity');
Route::get('/DISCLAIMER',[frontPageController::class,'DISCLAIMER'])->name('DISCLAIMER');


//shop page for all products frid system



Route::get('/shop',[frontPageController::class,'ShopPage'])->name('shop_page');

Route::get('/grocery',[frontPageController::class,'grocery_shop_only'])->name('grocery_shop_only');

// shop page as list 
Route::get('/shop_list', [frontPageController::class, 'shop_list'])->name('shop_list');

// products for a category
Route::get('/Shop/prodcuts/{slug}',[frontPageController::class,'special_category_product'])->name('shop_special_category');
Route::get('/Shop/prodcuts/sub_product/{slug}',[frontPageController::class,'shop_child_cat'])->name('shop_child_cat');
// single prodcut [age]
Route::get('single_product/{slug}', [frontPageController::class, 'Single_product'])->name('singleproduct');

// shop for brands 

Route::get('brands_category/{slug}',[frontPageController::class,'shop_brands'])->name('shop_brands');


// shop filter routes
Route::post('shop_filter',[frontPageController::class, 'shop_filter'])->name('shop_filter');

//grocry filter
Route::post('grocery_filter',[frontPageController::class, 'grocery_filter'])->name('grocery_filter');


// auto search products

Route::get('autosearch',[frontPageController::class,'autosearch'])->name('autosearch');
Route::post('search_product',[frontPageController::class,'search_product'])->name('search_product');

// best dealies page

Route::get('best-deals',[frontPageController::class,'best_dealis'])->name('best_deals');


Route::get('/',[frontPageController::class,'HomePage'])->name('homepage');

// countries and cities 
Route::post('api/fetch-states', [OrderController::class, 'fetchState']);
Route::post('api/fetch-cities', [OrderController::class, 'fetchCity']);


// email for vendor help

Route::post('vendor_help',[frontPageController::class,'vendor_email_help'])->name('vendor_email_help');

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

// add Frequently bought togher to cart
Route::post('freq-product-add-to-cart',[ShippingCartController::class,'freq_product_add_to_cart'])->name('sing_freq_page_update_cart');

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
Route::get('helpus',[HelpUsController::class,'helpus'])->name('helpus');

Route::group(['perfix'=>'user'],function(){
    
    //view dashboard
    Route::get('/dashboard',[frontPageController::class,'userdashboard'])->name('userdashboard');
    Route::get('/deliver_address',[frontPageController::class,'deliver_address'])->name('deliver_address');
    Route::post('/add_deliver_address',[frontPageController::class,'add_deliver_address'])->name('add_deliver_address');
    Route::get('/edit_deliverAddress/{id}',[frontPageController::class,'edit_deliverAddress'])->name('edit_deliverAddress');
    Route::get('/delete_deliverAddress/{id}',[frontPageController::class,'delete_deliverAddress'])->name('delete_deliverAddress');
    Route::get('/set_deliverAddress_asDefualt/{id}',[frontPageController::class,'set_deliverAddress_asDefualt'])->name('set_deliverAddress_asDefualt');
    Route::post('selected_address',[frontPageController::class,'selected_address'])->name('selected_address');
    Route::post('address_update/{id}',[frontPageController::class, 'address_update'])->name('address_update');
    
    Route::post('shipping/{id}',[frontPageController::class, 'shippingupdate'])->name('shippingupdate');
    
    // update user password
    Route::post('update_account/{id}',[frontPageController::class, 'update_useraccount'])->name('updateuseraccount');
    


Route::post('improve_submit',[HelpUsController::class,'helpusform'])->name('helpusform');
Route::post('ajax_like',[HelpUsController::class,'like_submition'])->name('like_submition');


});