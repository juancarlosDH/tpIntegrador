@extends('plantillas.primera')


@section('contenido')
  <h2>Listado de Peliculas</h2>

<a href="/peliculas/agregar">Nueva Peli</a>
  <ul>

  @foreach ($listado as $peli)
    <li>{{ $peli->title }}</li>
  @endforeach

  </ul>

@endsection
