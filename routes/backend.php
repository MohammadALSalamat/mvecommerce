<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShippingController;

use App\Http\Controllers\AdminbackendController;
use App\Http\Controllers\AdminviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductAttributeController;
use App\Http\Controllers\SponserAdsController;

// ADMIN LOGIN FORM 
Route::group(['prefix'=>'admin'],function(){
 Route::get('/login',[AdminviewController::class,'showloginpage'])->name('admin_login_form');
 Route::post('/login',[AdminviewController::class,'login'])->name('admin_login');
});

// admin side
Route::group(['prefix'=>'admin','middleware'=>['admin']],function(){
    Route::get('/',[AdminbackendController::class,'dashboard'])->name('admin');

    // banners section

    Route::get('/banners',[BannerController::class, 'viewbanners'])->name('bannersview');
    Route::get('/create_banner', [BannerController::class, 'createbanner'])->name('createbanner');
    Route::post('/add_new_banner',[BannerController::class,'addbanner'])->name('addbanner');
    Route::get('/edit_banner/{id}', [BannerController::class, 'editbanner'])->name('editbanner');
    Route::match(['get','post'],'/update_banner/{id}', [BannerController::class, 'updatebanner'])->name('updatebanner');
    Route::match(['get', 'post'], '/deletbanner/{id}', [BannerController::class, 'deletbanner'])->name('deletbanner');


  // banners section

  Route::get('/ads',[SponserAdsController::class, 'viewaads'])->name('adsview');
  Route::get('/create_ads', [SponserAdsController::class, 'createads'])->name('createads');
  Route::post('/add_new_ads',[SponserAdsController::class,'addads'])->name('addads');
  Route::get('/edit_ads/{id}', [SponserAdsController::class, 'editads'])->name('editads');
  Route::match(['get','post'],'/update_ads/{id}', [SponserAdsController::class, 'updateads'])->name('updateads');
  Route::match(['get', 'post'], '/deletads/{id}', [SponserAdsController::class, 'deletads'])->name('deletads');




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
    Route::get('/admin_products', [ProductController::class, 'viewownproducts'])->name('adminviewproducts');
    Route::get('/create_products', [ProductController::class, 'createproducts'])->name('createproducts');
    Route::post('/add_new_products', [ProductController::class, 'addproducts'])->name('addproducts');
    Route::get('/edit_products/{id}', [ProductController::class, 'editproducts'])->name('editproducts');
    Route::match(['get', 'post'], '/update_products/{id}', [ProductController::class, 'updateproducts'])->name('updateproducts');
    Route::match(['get', 'post'], '/deletproducts/{id}', [ProductController::class, 'deletproducts'])->name('deletproducts');


    //Products Attribute section

    Route::get('AddProductAttrebuite/{id}',[ProductAttributeController::class,'add_productAttr'])->name('add_productAttr');
    Route::post('CreateProductAttrebuite/{id}',[ProductAttributeController::class,'create_productAttr'])->name('create_productAttr');
    Route::match(['get', 'post'], '/deletproductAttr/{id}', [ProductAttributeController::class, 'deletproductAttr'])->name('deletproductAttr');




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
    
// orders sections
    Route::get('vieworders', [OrderController::class, 'view_order'])->name('view_order');
    Route::get('view_singleOrder/{id}',[OrderController::class,'singleOrder'])->name('singleOrder');

    // get the invoice template
    Route::get('invoice_template/{id}',[OrderController::class,'invoice_template'])->name('invoice_template');
    Route::get('generate-invoice-pdf/{id}', [OrderController::class,'generateInvoicePDF'])->name('pdfviewer');

});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// channge language
Route::get('lang/{lang}',[AdminviewController::class,'switchLang'])->name('lang.switch');