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
Route::prefix('pos')->middleware('auth')->group(function () {
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
    Route::prefix('invoice')->group(function () {
        Route::get('index', ['as' => 'invoice.index', 'uses' => 'POS\InvoiceController@index']);
        Route::get('order', ['as' => 'invoice.order', 'uses' => 'POS\InvoiceController@order']);
        Route::get('add', ['as' => 'invoice.add', 'uses' => 'POS\InvoiceController@add']);
        Route::post('insert', ['as' => 'invoice.insert', 'uses' => 'POS\InvoiceController@insert']);
        Route::get('edit/{invoice_id}', ['as' => 'invoice.edit', 'uses' => 'POS\InvoiceController@edit']);
        Route::post('update/{invoice_id}', ['as' => 'invoice.update', 'uses' => 'POS\InvoiceController@update']);
        Route::get('delete/{invoice_id}', ['as' => 'invoice.delete', 'uses' => 'POS\InvoiceController@delete']);
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
    Route::prefix('string')->group(function () {
        Route::get('table', ['as' => 'string.table', 'uses' => 'POS\StringController@table']);
    });
});

// WEB
Route::prefix('/')->group(function () {
    Route::get('/', ['as' => 'web.home.index', 'uses' => 'WEB\HomeController@index']);

    Route::prefix('product')->group(function () {
        Route::get('index', ['as' => 'web.product.index', 'uses' => 'WEB\ProductController@index']);
        Route::get('detail/{product_id}', ['as' => 'web.product.detail', 'uses' => 'WEB\ProductController@detail']);
    });
});

Auth::routes();


Route::get('/optimize', function() {
    Artisan::call('optimize');
  
    dd("Cache Clear All");
});
