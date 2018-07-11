<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarDirectorAPelicula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      try{
        \DB::beginTransaction();

        Schema::create('directors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '50');
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('premios')->default(0);
            $table->timestamps();
        });

        \DB::table('directors')->insert([
          [ 'name' => 'Quentin Tarantino' ],
          [ 'name' => 'Francis Ford Copola' ],
        ]);

        Schema::table('movies', function( Blueprint $table ){
          $table->unsignedInteger('director_id')->nullable();

          $table->foreign('director_id')->references('id')->on('directors');
        });
        \DB::commit();
      }catch(\PDOException $e){
        \DB::rollback();
        echo 'error durante la migracion:'.$e->getMessage();
      }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      Schema::table('movies', function( Blueprint $table ){
        $table->dropColumn('director_id');
      });

      Schema::drop('directors');

    }
}
