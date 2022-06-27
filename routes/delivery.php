<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliveryController;


// ADMIN LOGIN FORM 
Route::group(['prefix'=>'delivery'],function(){
    Route::get('/login',[DeliveryController::class,'showloginpage_delivery'])->name('delivery_login_form');
    Route::post('/login',[DeliveryController::class,'login_delivery'])->name('delivery_login');
   });
   Route::group(['prefix'=>'delivery','middleware'=>['delivery']],function(){
    Route::get('/',[DeliveryController::class,'dashboard'])->name('delivery');

    // orders sections
    Route::get('vieworders', [DeliveryController::class, 'delivery_view_order'])->name('delivery_view_order');
    Route::get('view_singleOrder/{id}',[DeliveryController::class,'delivery_singleOrder'])->name('delivery_singleOrder');

    // get the invoice template
    Route::get('invoice_template/{id}',[DeliveryController::class,'delivery_invoice_template'])->name('delivery_invoice_template');
    Route::get('generate-invoice-pdf/{id}', [DeliveryController::class,'delivery_generateInvoicePDF'])->name('delivery_pdfviewer');

    Route::post('update_status_order/{id}',[DeliveryController::class,'update_order_status'])->name('update_order_status');

});