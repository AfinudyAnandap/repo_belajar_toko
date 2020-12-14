<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');


Route::group(['middleware' => ['jwt.verify']], function (){
    Route::group(['middleware' => ['api.superadmin']], function (){

    });

    Route::group(['middleware' => ['api.admin']], function (){

    });

   Route::post('/order', 'order@store');
   Route::get('/order', 'order@show');
   Route::get('/order/{id}', 'order@detail');
   Route::delete('/order/{id}', 'order@destroy');

   Route::post('/product', 'product@store');
   Route::get('/product', 'product@show');
   Route::get('/product/{id}', 'product@detail');
   Route::delete('/product/{id}', 'product@destroy');

   Route::get('/customers', 'customer@show');
   Route::get('/customers/{id}', 'customer@detail');
   Route::post('/customers', 'customer@store');
   Route::put('/customers/{id}', 'customers@update');
   Route::delete('/customers/{id}', 'customers@destroy');
});