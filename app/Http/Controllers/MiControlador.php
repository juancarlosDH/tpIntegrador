<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
  public function principal(){
    return view('principal');
  }

  public function registro(){
    return view('registro');
  }

  public function login(){
    return view('login');
  }
























    public function listarCosas(){

      $cosas = [ 'celular', 'silla', 'laptop' ];

      return view('listadoCosas')->with('pepe', $cosas)->with('usuario', 'JC');

    }
}
