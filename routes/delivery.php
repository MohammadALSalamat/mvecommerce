<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;


// ADMIN LOGIN FORM 
    Route::group(['prefix'=>'delivery'],function(){
    Route::get('/login-delivery',[DeliveryController::class,'showloginpage_delivery'])->name('delivery_login_form');
    Route::post('/login-delivery',[DeliveryController::class,'login_delivery'])->name('delivery_login');
   });
   Route::group(['prefix'=>'delivery','middleware'=>['delivery']],function(){
   
});