<?php

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

Route::prefix('insa')->group(function() {
    Route::get('/index', 'InsaController@index');

    Route::get('/home', 'HomeController@index');

    Route::get('/SolicitarPrestamo', 'SolicitarController@index');
    Route::post('/SolicitarPrestamo/select', 'SolicitarController@show')->name('select');
    // Route::get('/SolicitarPrestamo', 'SolicitarController@create')->name('authorizations');
    // Route::post('/SolicitarPrestamo', 'SolicitarController@store');

    Route::get('/search', 'SearchController@search')->name('search');
    Route::get('/search{data}', 'SearchController@replace')->name('replace');

    // Route::get('/SolicitarPrestamo', 'SearchController@index');

    Route::get('/administrador', 'VigilantController@index');

    //Route::resource('/SolicitarPrestamo', 'SearchController@index');

    Route::get('/RegistroPrestamo', 'LoanRecordController@index');

    Route::get('/Devolucion', 'ReturnController@index');
});
