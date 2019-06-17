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

Route::get('/', function () {
    return view('moduloTurista.inicio2');
});

Route::get('formulario', function () {
    return view('moduloTurista.formulario');
});



Route::get('inicio2', function () {
    return view('moduloTurista.inicio2');
});

Route::get('formulario2', function () {
    return view('moduloTurista.formulario2');
});

Route::get('inscripcionMype', function () {
    return view('moduloTurista.inscripcionMype');
});

Route::get('vistaSitio', function () {
    return view('moduloTurista.vistaSitio');
});

Route::resource('sitioTuristico','SitioturisticoController');

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');

