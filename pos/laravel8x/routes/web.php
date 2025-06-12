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

Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);

Route::prefix('product')->group(function () {
    Route::get('index', ['as' => 'product.index', 'uses' => 'ProductController@index']);
    Route::get('add', ['as' => 'product.add', 'uses' => 'ProductController@add']);
    Route::post('insert', ['as' => 'product.insert', 'uses' => 'ProductController@insert']);
    Route::get('edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
    Route::post('update', ['as' => 'product.update', 'uses' => 'ProductController@update']);
});
