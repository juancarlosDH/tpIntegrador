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

Route::get('/generos', 'GenresController@listar');

Route::get('/peliculas/agregar', 'PeliculasController@agregar');
Route::post('/peliculas/agregar', 'PeliculasController@guardar');

Route::get('/peliculas/listar', 'PeliculasController@listar');

Route::get('/peliculas/{id}', 'PeliculasController@editar');
Route::post('/peliculas/{id}', 'PeliculasController@actualizar');


Route::get('/login', 'MiControlador@login');

Route::get('/registro', 'MiControlador@registro');

Route::get('/', 'MiControlador@principal');
