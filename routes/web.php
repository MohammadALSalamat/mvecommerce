<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontPageController;
use App\Http\Controllers\AdminbackendController;

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


//shop page

Route::get('/shop',[frontPageController::class,'ShopPage'])->name('shop_page');
Route::get('/shop_list', [frontPageController::class, 'shop_list'])->name('shop_list');

Route::get('/Shop/prodcuts/{slug}',[frontPageController::class,'special_category_product'])->name('shop_special_category');
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

// user dashboard and settings

Route::group(['perfix'=>'user'],function(){

    //view dashboard
    Route::get('/dashboard',[frontPageController::class,'userdashboard'])->name('userdashboard');
    Route::post('billing_update/{id}',[frontPageController::class, 'billingupdate'])->name('billingupdate');


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


});
