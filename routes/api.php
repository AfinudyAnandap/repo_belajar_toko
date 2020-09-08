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
   Route::post('/order', 'order@store');
   Route::get('/order', 'order@show');
   Route::get('/order/{id}', 'order@detail');

   Route::post('/product', 'product@store');
   Route::get('/product', 'product@show');
   Route::get('/product/{id}', 'product@detail');

   Route::get('/customer', 'customer@show');
   Route::get('/customer/{id}', 'customer@detail');
   Route::post('/customer', 'customer@store');
   Route::put('/siswa/{id}', 'customers@update');