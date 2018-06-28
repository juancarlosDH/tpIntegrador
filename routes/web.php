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

Route::get('/peliculas/agregar', 'PeliculasController@agregar');
Route::get('/peliculas/listar', 'PeliculasController@listar');



Route::get('/login', 'MiControlador@login');

Route::get('/registro', 'MiControlador@registro');

Route::get('/', 'MiControlador@principal');
