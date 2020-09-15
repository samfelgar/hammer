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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/ad', 'AdController@show')->name('ad.show');
Route::get('/ad/service', 'AdController@service')->name('ad.service');
Route::get('/payments', 'PaymentsController@index')->name('payments.view');

