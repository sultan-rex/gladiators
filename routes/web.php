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


Route::get('/', 'CustomerController@getLogin');
Route::get('/login', 'CustomerController@getLogin');
Route::post('/login', 'CustomerController@postLogin');
Route::get('/customer-details', 'CustomerController@customerDetails');

Route::resource('/transaction', 'TransactionController');