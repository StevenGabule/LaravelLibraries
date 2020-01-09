<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('submitForm','GeneratePDF\UserDetailController@store');
Route::get('/index','GeneratePDF\UserDetailController@index');
Route::get('/downloadPDF/{id}','GeneratePDF\UserDetailController@downloadPDF');


Route::get('/charts/index','Charts\CoinController@home');
Route::get('/coins', 'Charts\CoinController@index');
Route::post('/coins', 'Charts\CoinController@store');
