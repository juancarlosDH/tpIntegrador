@extends('plantillas.primera')

@section('contenido')

  <form action="/peliculas/{{$pelicula->id}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="form-group {{ $errors->has('title')?'has-error':'' }}">
    <label for="title">Título</label>
    <input name="title" value="{{ old('title')??$pelicula->title }}" class="form-control" type="text" placeholder="Ingrese el título">
    @if($errors->has('title'))
      <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
</div>
    <label for="awards">Premios</label>
    <input name="awards" value="{{ old('awards')??$pelicula->awards }}" class="form-control" type="number" step="1" min="0" placeholder="Premios ">

    <label for="rating">Rating</label>
    <input name="rating" value="{{ old('rating')??$pelicula->rating }}" class="form-control" type="number" step="0.1" placeholder="Rating (1 al 10)">

    <label for="release_date">Fecha de Lanzamiento</label>
    <input name="release_date" value="{{ old('release_date')??$pelicula->release_date }}" class="form-control" type="" placeholder="Fecha de lanzamiento">

    <label for="genre_id">Genero</label>
    <select id="genre_id" name="genre_id" class="form-control">
      <option value="">Seleccione</option>
      @foreach ($generos as $genero)
        <option value="{{$genero->id}}">{{$genero->name}}</option>
      @endforeach
    </select>

    {{-- <label for="poster">Poster</label>
    <input name="poster" type="file" class="form-control"> --}}

    <button type="submit" class="btn btn-primary">Guardar pelicula</button>
</form>

@endsection
