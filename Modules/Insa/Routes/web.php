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

  //route de solicitar prestamo

    Route::prefix('insa')->group(function() {

    //Route::get('/index', 'InsaController@index');

    Route::get('/home', 'HomeController@index');


    Route::get('/SolicitarPrestamo', 'SolicitarController@index')->name('index');

    Route::post('/SolicitarPrestamo', 'SolicitarController@store')->name('store');

    Route::get('/AutorizaSolicitud', 'AuthorizaController@index');

//route pdf
    Route::get('/pdf', 'PDFController@show')->name('show');

//route administracion solo estan las vistas conectadas a un controlador

    Route::get('/administrador', 'VigilantController@index');

    Route::get('/RegistroPrestamo', 'LoanRecordController@index')->name('lrindex');
    Route::post('/RegistroPrestamo', 'LoanRecordController@show')->name('lrshow');

    Route::get('/Devolucion', 'ReturnController@index');
});

