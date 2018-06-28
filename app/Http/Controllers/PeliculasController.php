<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{

  public function listar(){

    $peliculas = Pelicula::all();

    return view('peliculas.listar')
      ->with('listado', $peliculas);
  }

  public function agregar(){
    return view('peliculas.agregar');
  }

}
