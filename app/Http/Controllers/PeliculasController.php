<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;
use App\Genre;

class PeliculasController extends Controller
{

  public function listar(){

    $peliculas = Pelicula::all();

    return view('peliculas.listar')
      ->with('listado', $peliculas);
  }


  public function agregar(){
    //obtengo los generos ordenados.
    $genres = Genre::orderBy('name', 'ASC')->get();

    //dd($genres);

    return view('peliculas.agregar')
      ->with('generos', $genres);
  }


  public function guardar(Request $request){

    $reglas = [
      'title' => 'required|unique:movies|min:2',
      'awards' => 'required',
      'rating' => 'required',
      'release_date' => 'required',
      'genre_id' => 'required'
    ];

    $mensajes = [
      'required' => 'El campo es requerido'
    ];

    $this->validate( $request, $reglas,  $mensajes);


    $pelicula = Pelicula::create(
      $request->except(['_token'])
    );

    echo 'Se guardó la pelicula';

    dd($pelicula);

  }

  public function editar($id ){

    $pelicula = Pelicula::find($id);

    $genres = Genre::orderBy('name', 'ASC')->get();

    return view('peliculas.editar')
      ->with('pelicula', $pelicula)
      ->with('generos', $genres);

  }

  public function actualizar($id, Request $request){
    //me traigo la pelicula
    $pelicula = Pelicula::find($id);

    //guardo los nuevos valores del post o request
    $pelicula->fill( $request->except(['_token']) );

    $pelicula->save();

    echo 'se actualizo la pelicula';

    dd($pelicula);

  }


}
