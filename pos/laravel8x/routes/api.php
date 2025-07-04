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