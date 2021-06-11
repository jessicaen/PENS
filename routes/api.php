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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/KFSales','App\Http\Controllers\KFSalesController@index');
//CRUD
Route::post('/KFSales/store','App\Http\Controllers\KFSalesController@store');
Route::get('/KFSales/show/{id}', 'App\Http\Controllers\KFSalesController@show');
Route::post('/KFSales/update/{id}','App\Http\Controllers\KFSalesController@update');
Route::delete('/KFSales/destroy/{id}','App\Http\Controllers\KFSalesController@destroy');