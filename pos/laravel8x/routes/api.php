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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('file')->group(function () {
    Route::post('upload', ['as' => 'api.file.upload', 'uses' => 'API\FileController@upload']);
    Route::post('move', ['as' => 'api.file.move', 'uses' => 'API\FileController@move']);
    Route::post('delete', ['as' => 'api.file.delete', 'uses' => 'API\FileController@delete']);
});

Route::prefix('customer')->group(function () {
    Route::get('get', ['as' => 'api.customer.get', 'uses' => 'API\CustomerController@get']);
});

Route::prefix('product')->group(function () {
    Route::get('get', ['as' => 'api.product.get', 'uses' => 'API\ProductController@get']);
});

Route::prefix('invoice')->group(function () {
    Route::post('status', ['as' => 'api.invoice.status', 'uses' => 'API\InvoiceController@status']);
    Route::post('ispayment', ['as' => 'api.invoice.ispayment', 'uses' => 'API\InvoiceController@ispayment']);
});