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

Route::post('/generate', 'App\Http\Controllers\PDFController@index');

Route::post('/set-data', 'App\Http\Controllers\PDFController@setDataToSession');
Route::get('/data/{random}', 'App\Http\Controllers\PDFController@getDataToSession');
Route::get('/generate-cookie-key', 'App\Http\Controllers\PDFController@generateCookieKey');

