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

Route::get('/', 'FrontEndController@index');

Route::get('/qurban', 'FrontEndController@list');
Route::get('/qurban/1', 'FrontEndController@show');
Route::get('/cart', 'FrontEndController@cart');
Route::get('/checkout', 'FrontEndController@checkout');
Route::get('/confirmation', 'FrontEndController@confirmation');
