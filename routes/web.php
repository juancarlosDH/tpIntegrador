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

Route::get('/serie/{id}', function($id){
  //validar que sea un numero


  //buscar en la BD


  //mostrar el html
});

Route::get('/hola', function(){
  return view('saludos.saludar');
});

Route::get('/', function () {
    return view('welcome');
});
