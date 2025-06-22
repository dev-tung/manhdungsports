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
        Route::post('insert', ['as' => 'product.insert', 'uses' => 'POS\ProductController@insert']);
        Route::get('edit/{product_id}', ['as' => 'product.edit', 'uses' => 'POS\ProductController@edit']);
        Route::post('update/{product_id}', ['as' => 'product.update', 'uses' => 'POS\ProductController@update']);
        Route::get('delete/{product_id}', ['as' => 'product.delete', 'uses' => 'POS\ProductController@delete']);
    });
    Route::prefix('category')->group(function () {
        Route::get('index', ['as' => 'category.index', 'uses' => 'POS\CategoryController@index']);
        Route::get('add', ['as' => 'category.add', 'uses' => 'POS\CategoryController@add']);
        Route::post('insert', ['as' => 'category.insert', 'uses' => 'POS\CategoryController@insert']);
        Route::get('edit', ['as' => 'category.edit', 'uses' => 'POS\CategoryController@edit']);
        Route::post('update', ['as' => 'category.update', 'uses' => 'POS\CategoryController@update']);
    });
});





