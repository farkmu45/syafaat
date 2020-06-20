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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\AdminController@index');
    Route::resource('/sliders', 'Admin\SliderController');
    Route::resource('/qurbans', 'Admin\QurbanItemController');
    Route::resource('/payments', 'Admin\PaymentController')->except(['show']);
    Route::resource('/orders', 'Admin\OrderController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontEndController@index');

Route::get('/qurban', 'FrontEndController@list');
Route::get('/qurban/{qurban}', 'FrontEndController@show');
Route::post('/qurban/{qurban}', 'FrontEndController@saveToCart');

Route::get('/cart', 'FrontEndController@cart');
Route::patch('/cart', 'FrontEndController@editCart');

Route::get('/checkout', 'FrontEndController@checkout');
Route::post('/checkout', 'FrontEndController@processCheckout');

Route::get('/confirmation', 'FrontEndController@confirmation');
Route::get('/check', 'FrontEndController@check');