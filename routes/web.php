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
Route::get('/ad/service', 'AdController@service')->name('ad.service');
Route::get('/payments', 'PaymentsController@index')->name('payments.view');
Route::get('/payments/all', 'PaymentsController@all')->name('payments.all');
Route::get('/ad/new', 'AdController@new')->name('ad.new')->middleware('auth');
Route::get('/ad/search', 'AdController@search')->name('ad.search');
Route::get('/ad/evaluation', 'AdController@evaluation')->name('ad.evaluation');
Route::get('/ad/all', 'AdController@all')->name('ad.all');
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/contato', 'HomeController@contato')->name('contato');
Route::resource('professionals', 'ProfessionalController');
Route::get('/professionals/{professional}/dashboard', 'ProfessionalDashboardController@index')->name('professionals.dashboard');
Route::resource('people.phones', 'PhoneController')->shallow()->except(['index', 'show']);
Route::resource('people.addresses', 'AddressController')->shallow();


