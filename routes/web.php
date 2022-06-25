<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminviewController;
use App\Http\Controllers\frontPageController;
use App\Http\Controllers\AdminbackendController;
use App\Http\Controllers\ShippingCartController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProductAttributeController;

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


require __DIR__.'/backend.php';
require __DIR__.'/delivery.php';
require __DIR__.'/seller.php';
require __DIR__.'/frontend.php';


Auth::routes(['register'=>false]);

Route::get('/clearCash',function(){
    Artisan::call('optimize');
    return ' its clear now';
});
Route::get('/clearview',function(){
    Artisan::call('view:clear');
    return ' view clear now';
});
Route::get('/clearroute',function(){
    Artisan::call('route:clear');
    return ' route clear now';
});
Route::get('/storagelink',function(){
    Artisan::call('storage:link');
    return ' its storage now';
});

// ADMIN LOGIN FORM 
Route::group(['prefix'=>'delivery'],function(){
    Route::get('/login',[DeliveryController::class,'showloginpage_delivery'])->name('delivery_login_form');
    Route::post('/login',[DeliveryController::class,'login_delivery'])->name('delivery_login');
   });
   Route::group(['prefix'=>'delivery','middleware'=>['delivery']],function(){
    Route::get('/',[DeliveryController::class,'dashboard'])->name('delivery');

});


