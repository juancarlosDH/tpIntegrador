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

Route::get('/genres/list', 'GenresController@listar')->middleware('auth')->name('generos');

Route::prefix('/peliculas')->group( function(){

  Route::get('agregar', 'PeliculasController@agregar');
  Route::post('agregar', 'PeliculasController@guardar');

  Route::get('listar', 'PeliculasController@listar');

  Route::get('{id}', 'PeliculasController@editar');
  Route::post('{id}', 'PeliculasController@actualizar');

});



Route::get('/', 'MiControlador@principal');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
