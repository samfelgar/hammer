<?php

use App\Http\Controllers\ServiceController;
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
Route::get('/payments', 'PaymentsController@index')->name('payments.view');
Route::get('/payments/all', 'PaymentsController@all')->name('payments.all');
Route::resource('advertisements.services', 'ServiceController')->shallow();
Route::get('/advertisements/all', 'AdvertisementController@index')->name('advertisements.all');
Route::resource('professionals.advertisements', 'AdvertisementController')->shallow()->except(['index']);
Route::resource('clients', 'ClientController');
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/contato', 'HomeController@contato')->name('contato');
Route::resource('professionals', 'ProfessionalController');
Route::get('/professionals/{professional}/dashboard', 'ProfessionalDashboardController@index')->name('professionals.dashboard');
Route::resource('people.phones', 'PhoneController')->shallow()->except(['index', 'show']);
Route::resource('people.addresses', 'AddressController')->shallow()->except(['index', 'show']);
Route::get('/category/{category}/advertisements', 'CategoryController@getAdvertisements')->name('category.advertisements');

