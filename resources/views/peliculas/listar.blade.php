@extends('plantillas.primera')


@section('contenido')
  <h2><span>Listado de Peliculas</span>

    <div class="pull-right">
    <form class="form-inline" action="#">
        <div class="form-group">
            <input name="q" type="search" class="form-control" placeholder="Buscar...">
        </div>
        <button type="submit" class="btn btn-default">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
    </form>


    </div>
  </h2>
{{--  este es un mensaje enviado por el redirect, por eso uso es session --}}
  @if (session('mensaje'))
   <div class="alert alert-info" role="alert">
     {{ session('mensaje') }}
   </div>
  @endif

  <a href="/peliculas/agregar" class="btn btn-primary">Nueva Peli</a>



  <div class="row">

  @foreach ($listado as $peli)
    <div class="col-sm-12">
  		<img src="{{ \Storage::disk('public')->url($peli->ruta_imagen) }}" class="thumbnail miniatura" >
        <a href="/peliculas/{{ $peli->id }}">{{ $peli->title }}
          ({{ $peli->genre->name }})</a>
      </div>
  @endforeach

  </div>


{{ $listado->links() }}

@endsection
