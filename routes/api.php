<?php

use App\Http\Controllers\api\v1\frontPageApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// get banners of home page
Route::get('/Sellers_list',[frontPageApiController::class,'Sellers_list']);

Route::post('/new_register_user',[frontPageApiController::class,'register_new_user']);
