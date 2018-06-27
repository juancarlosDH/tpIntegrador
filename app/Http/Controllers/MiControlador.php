<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function listarCosas(){

      $cosas = [ 'celular', 'silla', 'laptop' ];

      return view('listadoCosas')->with('pepe', $cosas)->with('usuario', 'JC');

    }
}
