<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{

    protected $table = 'movies';

    protected $guarded = [];

    public function genre(){

      return $this->belongsTo( Genre::class );

    }

    public function actors(){

      return $this->belongsToMany( Actor::class
      , 'actor_movie', 'movie_id', 'actor_id' );

    }



}
