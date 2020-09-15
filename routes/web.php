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
Route::get('/profile/all', 'ProfileController@listProfiles')->name('profile.all')->middleware('auth');
Route::get('/ad', 'AdController@show')->name('ad.show');
<<<<<<< HEAD
Route::get('/ad/service', 'AdController@service')->name('ad.service');
Route::get('/payments', 'PaymentsController@index')->name('payments.view');

=======
Route::get('/ad/new', 'AdController@new')->name('ad.new')->middleware('auth');
>>>>>>> master
