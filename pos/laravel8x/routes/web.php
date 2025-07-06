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
Route::prefix('{screen}')->group(function () {
    Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => 'POS\DashboardController@index']);
    Route::prefix('product')->group(function () {
        Route::get('index', ['as' => 'product.index', 'uses' => 'POS\ProductController@index']);
        Route::get('add', ['as' => 'product.add', 'uses' => 'POS\ProductController@add']);
        Route::post('insert', ['as' => 'product.insert', 'uses' => 'POS\ProductController@insert']);
        Route::get('edit/{product_id}', ['as' => 'product.edit', 'uses' => 'POS\ProductController@edit']);
        Route::post('update/{product_id}', ['as' => 'product.update', 'uses' => 'POS\ProductController@update']);
        Route::get('delete/{product_id}', ['as' => 'product.delete', 'uses' => 'POS\ProductController@delete']);
    });
    Route::prefix('productype')->group(function () {
        Route::get('index', ['as' => 'productype.index', 'uses' => 'POS\ProductypeController@index']);
        Route::get('add', ['as' => 'productype.add', 'uses' => 'POS\ProductypeController@add']);
        Route::post('insert', ['as' => 'productype.insert', 'uses' => 'POS\ProductypeController@insert']);
        Route::get('edit/{productype_id}', ['as' => 'productype.edit', 'uses' => 'POS\ProductypeController@edit']);
        Route::post('update/{productype_id}', ['as' => 'productype.update', 'uses' => 'POS\ProductypeController@update']);
        Route::get('delete/{productype_id}', ['as' => 'productype.delete', 'uses' => 'POS\ProductypeController@delete']);
    });
    Route::prefix('productorder')->group(function () {
        Route::get('index', ['as' => 'productorder.index', 'uses' => 'POS\ProductorderController@index']);
        Route::get('add', ['as' => 'productorder.add', 'uses' => 'POS\ProductorderController@add']);
        Route::post('insert', ['as' => 'productorder.insert', 'uses' => 'POS\ProductorderController@insert']);
        Route::get('edit/{productorder_id}', ['as' => 'productorder.edit', 'uses' => 'POS\ProductorderController@edit']);
        Route::post('update/{productorder_id}', ['as' => 'productorder.update', 'uses' => 'POS\ProductorderController@update']);
        Route::get('delete/{productorder_id}', ['as' => 'productorder.delete', 'uses' => 'POS\ProductorderController@delete']);
    });
    Route::prefix('stringorder')->group(function () {
        Route::get('index', ['as' => 'stringorder.index', 'uses' => 'POS\StringorderController@index']);
        Route::get('add', ['as' => 'stringorder.add', 'uses' => 'POS\StringorderController@add']);
        Route::post('insert', ['as' => 'stringorder.insert', 'uses' => 'POS\StringorderController@insert']);
        Route::get('edit/{stringorder_id}', ['as' => 'stringorder.edit', 'uses' => 'POS\StringorderController@edit']);
        Route::post('update/{stringorder_id}', ['as' => 'stringorder.update', 'uses' => 'POS\StringorderController@update']);
        Route::get('delete/{stringorder_id}', ['as' => 'stringorder.delete', 'uses' => 'POS\StringorderController@delete']);
    });
    Route::prefix('string')->group(function () {
        Route::get('index', ['as' => 'string.index', 'uses' => 'POS\StringController@index']);
        Route::get('add', ['as' => 'string.add', 'uses' => 'POS\StringController@add']);
        Route::post('insert', ['as' => 'string.insert', 'uses' => 'POS\StringController@insert']);
        Route::get('edit/{string_id}', ['as' => 'string.edit', 'uses' => 'POS\StringController@edit']);
        Route::post('update/{string_id}', ['as' => 'string.update', 'uses' => 'POS\StringController@update']);
        Route::get('delete/{string_id}', ['as' => 'string.delete', 'uses' => 'POS\StringController@delete']);
    });
    Route::prefix('customer')->group(function () {
        Route::get('index', ['as' => 'customer.index', 'uses' => 'POS\CustomerController@index']);
        Route::get('add', ['as' => 'customer.add', 'uses' => 'POS\CustomerController@add']);
        Route::post('insert', ['as' => 'customer.insert', 'uses' => 'POS\CustomerController@insert']);
        Route::get('edit/{customer_id}', ['as' => 'customer.edit', 'uses' => 'POS\CustomerController@edit']);
        Route::post('update/{customer_id}', ['as' => 'customer.update', 'uses' => 'POS\CustomerController@update']);
        Route::get('delete/{customer_id}', ['as' => 'customer.delete', 'uses' => 'POS\CustomerController@delete']);
    });
    Route::prefix('customergroup')->group(function () {
        Route::get('index', ['as' => 'customergroup.index', 'uses' => 'POS\CustomergroupController@index']);
        Route::get('add', ['as' => 'customergroup.add', 'uses' => 'POS\CustomergroupController@add']);
        Route::post('insert', ['as' => 'customergroup.insert', 'uses' => 'POS\CustomergroupController@insert']);
        Route::get('edit/{customergroup_id}', ['as' => 'customergroup.edit', 'uses' => 'POS\CustomergroupController@edit']);
        Route::post('update/{customergroup_id}', ['as' => 'customergroup.update', 'uses' => 'POS\CustomergroupController@update']);
        Route::get('delete/{customergroup_id}', ['as' => 'customergroup.delete', 'uses' => 'POS\CustomergroupController@delete']);
    });
    Route::prefix('expense')->group(function () {
        Route::get('index', ['as' => 'expense.index', 'uses' => 'POS\ExpenseController@index']);
        Route::get('add', ['as' => 'expense.add', 'uses' => 'POS\ExpenseController@add']);
        Route::post('insert', ['as' => 'expense.insert', 'uses' => 'POS\ExpenseController@insert']);
        Route::get('edit/{expense_id}', ['as' => 'expense.edit', 'uses' => 'POS\ExpenseController@edit']);
        Route::post('update/{expense_id}', ['as' => 'expense.update', 'uses' => 'POS\ExpenseController@update']);
        Route::get('delete/{expense_id}', ['as' => 'expense.delete', 'uses' => 'POS\ExpenseController@delete']);
    });
});







