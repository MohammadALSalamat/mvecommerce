<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\frontPageController;
use App\Http\Controllers\AdminbackendController;
use App\Http\Controllers\ShippingCartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // get the data of seller from the director below
// require __DIR__.'seller.php';




//shop page for all products frid system

Route::get('/shop',[frontPageController::class,'ShopPage'])->name('shop_page');

// shop page as list 
Route::get('/shop_list', [frontPageController::class, 'shop_list'])->name('shop_list');

// products for a category
Route::get('/Shop/prodcuts/{slug}',[frontPageController::class,'special_category_product'])->name('shop_special_category');
// single prodcut [age]
Route::get('/single_product/{slug}', [frontPageController::class, 'Single_product'])->name('singleproduct');



Route::get('/',[frontPageController::class,'HomePage'])->name('homepage');

Auth::routes(['register'=>false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// auth show the  login form.
Route::get('my-account',[frontPageController::class,'loginForm'])->name('loginForm');
// auth submit the login info
Route::post('authsubmit',[frontPageController::class,'loginSubmit'])->name('submitlogin');
// regirster data
Route::post('registerusers',[frontPageController::class,'register_users'])->name('registerusers');

//log out front user

Route::get('user/logout',[frontPageController::class,'logout_front_user'])->name('logout_front_user');

// cart section
Route::get('cart',[ShippingCartController::class, 'viewcart'])->name('viewcart');
Route::post('/cart/store',[ShippingCartController::class,'add_to_cart'])->name('add_to_cart');
Route::post('/cart/delete', [ShippingCartController::class, 'cart_delete'])->name('cart_delete');
Route::get('clear_cart/',function(){
    Cart::instance('shopping')->destroy();
return back()->with('message','Your Cart is empty');
})->name('clear_cart');

//update the cart
Route::post('update_cart',[ShippingCartController::class,'update_cart'])->name('update_cart');

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


// user dashboard and settings

Route::group(['perfix'=>'user'],function(){
    
    //view dashboard
    Route::get('/dashboard',[frontPageController::class,'userdashboard'])->name('userdashboard');
    Route::post('billing_update/{id}',[frontPageController::class, 'billingupdate'])->name('billingupdate');
    Route::post('shipping/{id}',[frontPageController::class, 'shippingupdate'])->name('shippingupdate');
    
    // update user password
    Route::post('update_account/{id}',[frontPageController::class, 'update_useraccount'])->name('updateuseraccount');
    

});


// admin side
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
Route::get('/',[AdminbackendController::class,'dashboard'])->name('admin');

// banners section

Route::get('/banners',[BannerController::class, 'viewbanners'])->name('bannersview');
Route::get('/create_banner', [BannerController::class, 'createbanner'])->name('createbanner');
Route::post('/add_new_banner',[BannerController::class,'addbanner'])->name('addbanner');
Route::get('/edit_banner/{id}', [BannerController::class, 'editbanner'])->name('editbanner');
Route::match(['get','post'],'/update_banner/{id}', [BannerController::class, 'updatebanner'])->name('updatebanner');
Route::match(['get', 'post'], '/deletbanner/{id}', [BannerController::class, 'deletbanner'])->name('deletbanner');

    // Categories Section
    Route::get('/category', [CategoryController::class, 'viewCategory'])->name('viewcategories');
    Route::get('/create_category', [CategoryController::class, 'createCategory'])->name('createcategories');
    Route::post('/add_new_category', [CategoryController::class, 'addCategory'])->name('addcategories');
    Route::get('/edit_category/{id}', [CategoryController::class, 'editCategory'])->name('editcategories');
    Route::match(['get', 'post'], '/update_category/{id}', [CategoryController::class, 'updateCategory'])->name('updatecategories');
    Route::match(['get', 'post'], '/deletcategory/{id}', [CategoryController::class, 'deletCategory'])->name('deletcategories');

    // get child category
    Route::post('/category/{id}/child',[CategoryController::class,'get_category_child_by_parent_id']);

    //brand section

    Route::get('/Brand', [BrandController::class, 'viewBrand'])->name('viewbrand');
    Route::get('/create_Brand', [BrandController::class, 'createBrand'])->name('createbrand');
    Route::post('/add_new_Brand', [BrandController::class, 'addBrand'])->name('addbrand');
    Route::get('/edit_Brand/{id}', [BrandController::class, 'editBrand'])->name('editbrand');
    Route::match(['get', 'post'], '/update_Brand/{id}', [BrandController::class, 'updateBrand'])->name('updatebrand');
    Route::match(['get', 'post'], '/deletBrand/{id}', [BrandController::class, 'deletBrand'])->name('deletbrand');

     //Products section

    Route::get('/products', [ProductController::class, 'viewproducts'])->name('viewproducts');
    Route::get('/create_products', [ProductController::class, 'createproducts'])->name('createproducts');
    Route::post('/add_new_products', [ProductController::class, 'addproducts'])->name('addproducts');
    Route::get('/edit_products/{id}', [ProductController::class, 'editproducts'])->name('editproducts');
    Route::match(['get', 'post'], '/update_products/{id}', [ProductController::class, 'updateproducts'])->name('updateproducts');
    Route::match(['get', 'post'], '/deletproducts/{id}', [ProductController::class, 'deletproducts'])->name('deletproducts');

    //users section
    Route::get('/users', [UserController::class, 'viewusers'])->name('viewusers');
    Route::get('/activation_sellers', [UserController::class, 'activation_sellers'])->name('activation_sellers');
    Route::get('/create_users', [UserController::class, 'createusers'])->name('createusers');
    Route::post('/add_new_users', [UserController::class, 'addusers'])->name('addusers');
    Route::get('/edit_users/{id}', [UserController::class, 'editusers'])->name('editusers');
    Route::match(['get', 'post'], '/update_users/{id}', [UserController::class, 'updateusers'])->name('updateusers');
    Route::match(['get', 'post'], '/deletusers/{id}', [UserController::class, 'deletusers'])->name('deletusers');

    // Coupon section

    Route::get('view_coupon',[CouponController::class,'view_coupon'])->name('view_coupon');
    Route::get('/create_coupon', [CouponController::class, 'create_coupon'])->name('create_coupon');
    Route::post('/add_new_coupon', [CouponController::class, 'add_coupon'])->name('add_coupon');
    Route::get('/edit_coupon/{id}', [CouponController::class, 'edit_coupon'])->name('edit_coupon');
    Route::match(['get', 'post'], '/update_coupon/{id}', [CouponController::class, 'update_coupon'])->name('update_coupon');
    Route::match(['get', 'post'], '/delet_coupon/{id}', [CouponController::class, 'delet_coupon'])->name('delet_coupon');

    // shipping section
    Route::get('view_shipping', [ShippingController::class, 'view_shipping'])->name('view_shipping');
    Route::get('/create_shipping', [ShippingController::class, 'create_shipping'])->name('create_shipping');
    Route::post('/add_new_shipping', [ShippingController::class, 'add_shipping'])->name('add_shipping');
    Route::get('/edit_shipping/{id}', [ShippingController::class, 'edit_shipping'])->name('edit_shipping');
    Route::match(['get', 'post'], '/update_shipping/{id}', [ShippingController::class, 'update_shipping'])->name('update_shipping');
    Route::match(['get', 'post'], '/delet_shipping/{id}', [ShippingController::class, 'delet_shipping'])->name('delet_shipping');
    


});
