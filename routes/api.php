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

Route::prefix('/admin')->group(static function () {
    Route::get('/partner/{id}', 'App\Http\Controllers\PartnersController@getPartner');
    Route::get('/partners', 'App\Http\Controllers\PartnersController@getPartners');
    Route::post('/create', 'App\Http\Controllers\PartnersController@create');
    Route::post('/update', 'App\Http\Controllers\PartnersController@update');
    Route::post('/delete', 'App\Http\Controllers\PartnersController@delete');
});

Route::get('/partner/{id}', 'App\Http\Controllers\PartnersController@getPartners');
Route::get('/partners', 'App\Http\Controllers\PartnersController@getPartners');

