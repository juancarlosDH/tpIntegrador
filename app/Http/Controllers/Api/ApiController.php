<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class ApiController extends Controller
{

    public function buscarpormail( $email ){

      $cantidad = User::where('email', $email)->count();

      return response()->json( $cantidad );


    }

}
