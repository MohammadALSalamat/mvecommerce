<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\seller\SellerOrderController;
use App\Http\Controllers\seller\SellerProductAttribute;
use App\Http\Controllers\seller\SellerProductController;
use App\Http\Controllers\seller\sellerSittingsController;
use App\Http\Controllers\SubscriptionController;

Route::group(['prefix'=>'seller'],function(){

Route::get('/login',[SellerController::class,'showloginpage'])->name('seller_login_form');
Route::post('/login',[SellerController::class,'login'])->name('seller_login');
});
// admin side
Route::group(['prefix'=>'seller','middleware'=>['seller']],function(){
    Route::get('/',[SellerController::class,'dashboard'])->name('seller');
    
    //test payment for subscribtion sellers
    Route::post('viewcardPayment/',[SubscriptionController::class,'viewcardPayment'])->name('viewcardPayment');
    Route::post('Subscription/{id}',[SubscriptionController::class,'get_card_info'])->name('sendinfocard');

    Route::get('Subscription_Status',[SubscriptionController::class,'viewSubscription_Status'])->name('viewSubscription_Status');

    
    // documentation for seller

    Route::get('documentaion',[SellerController::class,'documentaion'])->name('documentaion');
    
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
  
  // Seller sittings page

  Route::get('seller/details',[sellerSittingsController::class,'view_seller_details'])->name('view_seller_details');
  Route::post('seller/edit/{id}',[sellerSittingsController::class,'seller_edit_info'])->name('seller_edit_info');
  
    // get child category
    Route::post('/category/{id}/child',[SellerProductController::class,'get_category_child_by_parent_id']);

  // orders sections
  Route::get('vieworders', [SellerOrderController::class, 'view_order'])->name('view_order_seller');
  Route::get('view_singleOrder/{id}',[SellerOrderController::class,'singleOrder'])->name('singleOrder_seller');

  // get the invoice template
  Route::get('invoice_template/{id}',[SellerOrderController::class,'invoice_template'])->name('invoice_template_seller');
  Route::get('generate-invoice-pdf/{id}', [SellerOrderController::class,'generateInvoicePDF'])->name('pdfviewer_seller');


});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// channge language
Route::get('lang/{lang}',[SellerController::class,'switchLang'])->name('lang.switch');