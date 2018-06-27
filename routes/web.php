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
Route::get('/listado', 'MiControlador@listarCosas');

Route::get('/hola/{nombre}', 'HomeController@saludarUsuario');

Route::get('/hola', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});
