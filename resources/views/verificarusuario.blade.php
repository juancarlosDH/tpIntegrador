@extends('plantillas.primera')


@section('contenido')
  <h1 id="ache1">Buscar Usuario</h1>

  {{-- <a href="/peliculas/agregar" class="btn btn-primary">Nueva Peli</a> --}}
<div class="">
  <form class="" action="" method="get" id="formulario">
    @csrf
    <div class="form-group">
      <label for="" class="">
        Email
        <input class="form-control" type="text" name="email" id="email" value="">
      </label>
      <div id="mensaje" class="">

      </div>
    </div>


    <button type="submit" class="btn btn-primary" id="enviar">Buscar</button>
  </form>


</div>


  <div class="">
    <img src="/images/imagen_cargando.gif" id="imagen_cargando" style="display:none" alt="" class="thumbnail">
  </div>



<script src="/js/verificarusuario.js"></script>
@endsection
