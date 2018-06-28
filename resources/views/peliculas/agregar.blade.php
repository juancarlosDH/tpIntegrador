@extends('plantillas.primera')

@section('contenido')

  <form class="" action="" method="post">
    <div class="">
      <label for="">Titulo</label>
      <input type="text" name="title" value="">
    </div>

    <div class="">
      <label for="">Premios</label>
      <input type="text" name="awards" value="">
    </div>

    <div class="">
      <label for="">Rating</label>
      <input type="text" name="rating" value="">
    </div>

    <div class="">
      <label for="">Fecha de Lanzamiento</label>
      <input type="text" name="release_date" value="">
    </div>

    <div class="">
    <button type="submit" name="button">Guardar</button>
    </div>
  </form>

@endsection
