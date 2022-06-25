<?php
use Illuminate\Support\Facades\Route;


// ADMIN LOGIN FORM 
    Route::group(['prefix'=>'driver'],function(){
    Route::get('/login',[DriverController::class,'showloginpage_driver'])->name('driver_login_form');
    Route::post('/login',[DriverController::class,'login'])->name('driver_login');
   });
   
   ?>