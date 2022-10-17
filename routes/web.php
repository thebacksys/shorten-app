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

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('login', 'LoginController@showAdminLoginForm')->name('login');
    Route::get('signup', 'RegisterController@showRegistrationForm')->name('signup');
    Route::post('confirmLogin', 'LoginController@confirmLogin')->name('confirmLogin');
    Route::post('confirmSignup', 'RegisterController@confirmSignup')->name('confirmSignup');
    Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::group(['namespace' => 'App\Http\Controllers\Guest'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('why', 'WhyController@index')->name('why');
    Route::get('product', 'ProductController@index')->name('product');
    Route::get('pricing', 'PricingController@index')->name('pricing');
    Route::get('resource', 'ResourceController@index')->name('resource');
});

Route::group(['namespace' => 'App\Http\Controllers\User', 'as' => 'user.', 'middleware' => ['auth', 'is_user']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/report', 'ReportController@index')->name('report');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/report', 'ReportController@index')->name('report');
});
