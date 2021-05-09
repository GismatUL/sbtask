<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [App\Http\Controllers\SkateBoardController::class, 'skateboard']);
Route::get('/order/{id}', [App\Http\Controllers\SkateBoardController::class, 'get_order_details']);
Route::post('/order/{id}', [App\Http\Controllers\SkateBoardController::class, 'order']);
Route::get('/orders_list', [App\Http\Controllers\SkateBoardController::class, 'show_orders']);
Route::view('/set_delivery_and_preparation_date/{id}', 'set_delivery_and_preparation_date');
Route::put('/set_delivery_and_preparation_date/{id}',[App\Http\Controllers\SkateBoardController::class,'set_delivery_and_preparation_date']);
