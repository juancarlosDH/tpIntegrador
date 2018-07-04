@extends('plantillas.primera')

@section('contenido')

<ul>

@foreach ($generos as $genero)

  <li>{{ $genero->name }}
    <ol>
    @foreach($genero->movies as $peli)
      <li>{{$peli->title}}</li>
    @endforeach
    </ol>
  </li>

@endforeach

</ul>


@endsection
