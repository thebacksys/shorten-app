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

Route::group(['namespace' => 'App\Http\Controllers\Guest'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('why', 'WhyController@index')->name('why');
    Route::get('product', 'ProductController@index')->name('product');
    Route::get('pricing', 'PricingController@index')->name('pricing');
    Route::get('resource', 'ResourceController@index')->name('resource');
    Route::get('login', 'LoginController@index')->name('login');
    Route::get('signup', 'RegisterController@showRegistrationForm')->name('signup');
});

Route::group(['namespace' => 'App\Http\Controllers\User', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
