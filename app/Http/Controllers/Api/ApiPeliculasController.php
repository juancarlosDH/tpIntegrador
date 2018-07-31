<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelicula;

class ApiPeliculasController extends Controller
{

    public function listado(){

      $peliculas = Pelicula::all();

      return response()->json( $peliculas );


    }

}
