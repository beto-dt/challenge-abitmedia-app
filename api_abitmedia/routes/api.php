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

/* ROUTE SOFTWARE */
Route::get('/softwares','App\Http\Controllers\SoftwareController@index');
Route::post('/softwares','App\Http\Controllers\SoftwareController@store');
Route::put('/softwares/{id}','App\Http\Controllers\SoftwareController@update');
Route::delete('/softwares/{id}','App\Http\Controllers\SoftwareController@destroy');

/* ROUTE SERVICE */
Route::get('/services','App\Http\Controllers\ServiceController@index');
Route::post('/services','App\Http\Controllers\ServiceController@store');
Route::put('/services/{id}','App\Http\Controllers\ServiceController@update');
Route::delete('/services/{id}','App\Http\Controllers\ServiceController@destroy');

/* ROUTE LICENCE */
Route::get('/licences','App\Http\Controllers\LicenceController@index');
Route::post('/licences','App\Http\Controllers\LicenceController@store');
Route::put('/licences/{id}','App\Http\Controllers\LicenceController@update');
Route::delete('/licences/{id}','App\Http\Controllers\LicenceController@destroy');
