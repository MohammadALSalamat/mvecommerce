<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;


// ADMIN LOGIN FORM 
    Route::group(['prefix'=>'driver'],function(){
    Route::get('/login-driver',[DriverController::class,'showloginpage_driver'])->name('driver_login_form');
    Route::post('/login-driver',[DriverController::class,'login_driver'])->name('driver_login');
   });
   Route::group(['prefix'=>'driver','middleware'=>['driver']],function(){
   
});