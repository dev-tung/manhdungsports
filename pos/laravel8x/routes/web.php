<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// POS
Route::prefix('pos')->group(function () {
    Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => 'POS\DashboardController@index']);
    Route::prefix('product')->group(function () {
        Route::get('index', ['as' => 'product.index', 'uses' => 'POS\ProductController@index']);
        Route::get('add', ['as' => 'product.add', 'uses' => 'POS\ProductController@add']);
        Route::post('create', ['as' => 'product.create', 'uses' => 'POS\ProductController@create']);
        Route::get('edit', ['as' => 'product.edit', 'uses' => 'POS\ProductController@edit']);
        Route::post('update', ['as' => 'product.update', 'uses' => 'POS\ProductController@update']);
    });
});


// Website


