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
Route::get('/clients/dashboard', 'ClientController@dashboard')->name('clients.dashboard');
Route::resource('clients.payments', 'PaymentMethodController')->shallow()->except(['index', 'show', 'edit']);

Route::get('/advertisements/all', 'AdvertisementController@index')->name('advertisements.all');
Route::post('/advertisements/results', 'AdvertisementController@searchByTitle')->name('advertisements.search');
Route::resource('professionals.advertisements', 'AdvertisementController')->shallow()->except(['index']);
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/contato', 'HomeController@contato')->name('contato');
Route::resource('professionals', 'ProfessionalController')->only(['create', 'store']);
Route::get('/category/{category}/advertisements', 'CategoryController@getAdvertisements')->name('category.advertisements');
Route::get('/login/professionals', 'Auth\LoginProfessionalsController@login')->name('login.professional');
Route::post('/login/professionals', 'Auth\LoginProfessionalsController@authenticate')->name('login.professional.post');

Route::middleware('auth:professional')->group(function () {
    Route::get('/professionals/data/', 'HomeController@professionalData')->name('professionals.data');
    Route::resource('professionals.advertisements', 'AdvertisementController')->shallow()->except(['index', 'show']);
    Route::post('/advertisements/{advertisement}/restore', 'AdvertisementController@restore')->name('advertisements.restore');
    Route::get('/services/{service}/accept', 'ServiceController@accept')->name('services.accept');
    Route::get('/services/{service}/start', 'ServiceController@start')->name('services.start');
    Route::get('/services/{service}/finish', 'ServiceController@finish')->name('services.finish');
    Route::get('/professionals/services/{service}', 'ServiceController@show')->name('professionals.services.show');
    Route::get('/professionals/{professional}/dashboard', 'ProfessionalDashboardController@index')->name('professionals.dashboard');
    Route::resource('professionals', 'ProfessionalController')->shallow()->except(['create', 'store']);
    Route::resource('professionals.phones', 'PhoneController')
        ->parameters([
            'professionals' => 'person',
        ])
        ->shallow()
        ->except(['index', 'show']);
    Route::resource('professionals.addresses', 'AddressController')
        ->parameters([
            'professionals' => 'person',
        ])
        ->shallow()
        ->except(['index', 'show']);
});

Route::middleware('auth')->group(function () {
    Route::put('/services/{service}/finish', 'ServiceController@clientFinish')->name('clients.services.finish');
    Route::resource('advertisements.services', 'ServiceController')->shallow();
    Route::resource('clients', 'ClientController');
    Route::get('/dados/', 'HomeController@meusDados')->name('meusDados');
    Route::resource('clients.payments', 'PaymentMethodController');
    Route::resource('people.phones', 'PhoneController')->shallow()->except(['index', 'show']);
    Route::resource('people.addresses', 'AddressController')->shallow()->except(['index', 'show']);
});


