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
Route::resource('advertisements.services', 'ServiceController')->shallow();
Route::get('/advertisements/all', 'AdvertisementController@index')->name('advertisements.all');
Route::resource('professionals.advertisements', 'AdvertisementController')->shallow()->except(['index']);
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/contato', 'HomeController@contato')->name('contato');
Route::resource('professionals', 'ProfessionalController')->shallow()->except(['index', 'show', 'edit']);
Route::get('/category/{category}/advertisements', 'CategoryController@getAdvertisements')->name('category.advertisements');
Route::get('/login/professionals', 'Auth\LoginProfessionalsController@login')->name('login.professional');
Route::post('/login/professionals', 'Auth\LoginProfessionalsController@authenticate')->name('login.professional.post');

Route::middleware('auth:professional')->group(function () {
    Route::get('/dados/', 'HomeController@meusDados')->name('meusDados');
    Route::resource('professionals.advertisements', 'AdvertisementController')->shallow()->except(['index', 'show']);
    Route::post('/advertisements/{advertisement}/restore', 'AdvertisementController@restore')->name('advertisements.restore');
    Route::get('/professionals/{professional}/dashboard', 'ProfessionalDashboardController@index')->name('professionals.dashboard');
    Route::resource('professionals', 'ProfessionalController')->shallow()->except(['create']);
    Route::resource('people.phones', 'PhoneController')->shallow()->except(['index', 'show']);
    Route::resource('people.addresses', 'AddressController')->shallow()->except(['index', 'show']);
});
Route::middleware('auth')->group(function () {
    Route::resource('clients', 'ClientController');
    Route::get('/dados/', 'HomeController@meusDados')->name('meusDados');
    Route::resource('clients.payments', 'PaymentMethodController');
    Route::resource('people.phones', 'PhoneController')->shallow()->except(['index', 'show']);
    Route::resource('people.addresses', 'AddressController')->shallow()->except(['index', 'show']);
});


