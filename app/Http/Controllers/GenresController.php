<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;

class GenresController extends Controller
{

    public function listar(){

      $generos = Genre::all();

      return view('genres.listar')
        ->with('generos', $generos);


    }

}
