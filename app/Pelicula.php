<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{

    protected $table = 'movies';

    protected $guarded = [];

    public function genre(){

      return $this->belongsTo( Genre::class, 'genero_id',  'id_genero' );

    }



}
