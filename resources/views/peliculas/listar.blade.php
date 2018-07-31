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

  {{-- <a href="/peliculas/agregar" class="btn btn-primary">Nueva Peli</a> --}}

  <form class="" action="index.html" method="post">

    <select class="" name="idPais" id="idPais">

    </select>


  </form>


  <a href="#" id="btn_recarga" class="btn btn-success">Cargar Pelis</a>

  <div class="">
    <img src="/images/imagen_cargando.gif" id="imagen_cargando" style="display:none" alt="" class="thumbnail">
  </div>

  <div class="row" id="carga_pelis">

<?php /*
    @foreach ($listado as $peli)
      <div class="col-sm-12">
    		<img src="{{ \Storage::disk('public')->url($peli->ruta_imagen) }}" class="thumbnail miniatura" >
          <a href="/peliculas/{{ $peli->id }}">{{ $peli->title }}
            ({{ $peli->genre->name }})</a>
        </div>
    @endforeach

    */ ?>

  </div>

<?php /*
{{ $listado->links() }}
*/ ?>
<script src="/js/pelis.js"></script>
<script src="/js/techo.js"></script>
@endsection
