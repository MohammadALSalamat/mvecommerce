<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\seller\SellerProductAttribute;
use App\Http\Controllers\seller\SellerProductController;

Route::group(['prefix'=>'seller'],function(){

Route::get('/login',[SellerController::class,'showloginpage'])->name('seller_login_form');
Route::post('/login',[SellerController::class,'login'])->name('seller_login');
});
// admin side
Route::group(['prefix'=>'seller','middleware'=>['seller']],function(){
    Route::get('/',[SellerController::class,'dashboard'])->name('seller');
      //Products section

      Route::get('/products', [SellerProductController::class, 'viewproducts'])->name('seller_viewproducts');
      Route::get('/create_products', [SellerProductController::class, 'createproducts'])->name('seller_createproducts');
      Route::post('/add_new_products', [SellerProductController::class, 'addproducts'])->name('seller_addproducts');
      Route::get('/edit_products/{id}', [SellerProductController::class, 'editproducts'])->name('seller_editproducts');
      Route::match(['get', 'post'], '/update_products/{id}', [SellerProductController::class, 'updateproducts'])->name('seller_updateproducts');
      Route::match(['get', 'post'], '/deletproducts/{id}', [SellerProductController::class, 'deletproducts'])->name('seller_deletproducts');
  
  
      //Products Attribute section
  
      Route::get('AddProductAttrebuite/{id}',[SellerProductAttribute::class,'add_productAttr'])->name('seller_add_productAttr');
      Route::post('seller_CreateProductAttrebuite/{id}',[SellerProductAttribute::class,'create_productAttr'])->name('seller_create_productAttr');
      Route::post('CreateProductAttrebuite/{id}',[SellerProductAttribute::class,'create_productAttr_gallary'])->name('create_productAttr_gallary');
      Route::match(['get', 'post'], '/deletproductAttr/{id}', [SellerProductAttribute::class, 'deletproductAttr'])->name('seller_deletproductAttr');
      Route::match(['get', 'post'], '/gallary_deletproductAttr/{id}', [SellerProductAttribute::class, 'gallary_deletproductAttr'])->name('gallary_deletproductAttr');
  
  
  

});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// channge language
Route::get('lang/{lang}',[SellerController::class,'switchLang'])->name('lang.switch');