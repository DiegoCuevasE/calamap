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
    return view('welcome');
});

Route::get('formulario', function () {
    return view('formulario');
});

Route::get('inicio', function () {
    return view('inicio');
});


Route::get('inicio2', function () {
    return view('inicio2');
});

Route::get('formulario2', function () {
    return view('formulario2');
});



