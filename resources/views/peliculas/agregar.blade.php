@extends('plantillas.primera')

@section('contenido')

  <form action="/movies/add" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <label for="title">Título</label>
    <input name="title" value="" class="form-control" type="text" placeholder="Ingrese el título">

    <label for="awards">Premios</label>
    <input name="awards" value="" class="form-control" type="number" step="1" min="0" placeholder="Premios ">

    <label for="rating">Rating</label>
    <input name="rating" value="" class="form-control" type="number" step="0.1" placeholder="Rating (1 al 10)">

    <label for="release_date">Fecha de Lanzamiento</label>
    <input name="release_date" value="" class="form-control" type="date" placeholder="Fecha de lanzamiento">

    <label for="genre_id">Genero</label>
    <select id="genre_id" name="genre_id" class="form-control">
        <option value="">Seleccione</option>
    </select>

    {{-- <label for="poster">Poster</label>
    <input name="poster" type="file" class="form-control"> --}}

    <button type="submit" class="btn btn-primary">Crear pelicula</button>
</form>

@endsection
