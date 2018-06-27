@extends('plantillas.primera')

@section('contenido')
  <h1>Listado de cosas de {{ $usuario }}</h1>

  <ol>
    @foreach ($pepe as $cosa)
      <li>{{ $cosa }}</li>
    @endforeach
  </ol>
@endsection
