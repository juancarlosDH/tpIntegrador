<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;
use App\Genre;

class PeliculasController extends Controller
{

  public function listar(){

    $peliculas = Pelicula::paginate(3);

    /*$peliculas->filter( function($peli){
      return $peli->rating >= 5 ;
    });*/

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
      'genre_id' => 'required',
      'poster' => 'image'
    ];

    $mensajes = [
      'required' => 'El campo es requerido'
    ];

    $this->validate( $request, $reglas,  $mensajes);

    $ruta_imagen='';
    //$archivo = $request->file('poster')->storePublicly('public/posters');
    if($request->file('poster')){
      $ruta_imagen = $request->file('poster')->store('posters', 'public');
    }

    //podemos tener un atajo para obetener un array asociativo de clave con nombre de input y valor del mismo
    $pelicula = Pelicula::create(
      [ 'title' => $request->input('title'),
       'awards' => $request->input('awards'),
       'rating' => $request->input('rating'),
       'release_date' => $request->input('release_date'),
       'genre_id' => $request->input('genre_id'),
       'ruta_imagen' => $ruta_imagen
      ]
    );

    //o hacerlos uno a uno
    /*
    Pelicula::create(
      [ 'title' => $request->input('title'),
       'awards' => $request->input('awards'),
       ...
      ]
    );
    */
    //aqui redirijo al listar de las peliculas
    return redirect('/peliculas/listar')
    //y quiero mostrar un mensaje que diga que fue agregada la pelicula exitosamente
      ->with('mensaje', 'Pelicula creada exitosamente');

  }

  public function editar($id ){

    $pelicula = Pelicula::find($id);

    $genres = Genre::orderBy('name', 'ASC')->get();

    return view('peliculas.editar')
      ->with('pelicula', $pelicula)
      ->with('generos', $genres);

  }

  public function actualizar($id, Request $request){

    $this->validate($request, [
      'title' => 'required|unique:movies,title,'.$id,
      'awards' => 'required',
      'rating' => 'required',
      'release_date' => 'required'
    ]);

    //me traigo la pelicula
    $pelicula = Pelicula::find($id);

    //guardo los nuevos valores del post o request
    $pelicula->fill( $request->except(['_token']) );

    $pelicula->save();

    echo 'se actualizo la pelicula';

    dd($pelicula);

  }


}
