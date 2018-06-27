<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function principal(){
    return view('welcome');
  }

    public function index(){

        return view('saludos.saludar');

    }

    public function saludarUsuario( $nombre ){

        return view('saludos.saludarUsuario',
          [ 'nombre' => $nombre ] );
    }

}
