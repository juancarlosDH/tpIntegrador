@extends('plantillas.primera')


@section('contenido')
  <h1 id="ache1">Formulario</h1>

  {{-- <a href="/peliculas/agregar" class="btn btn-primary">Nueva Peli</a> --}}
<div class="">
  <form class="" action="" method="post">
    <select class="" name="idPais" id="idPais">
    </select>
    <select class="" name="idOrg" id="idOrg">
    </select>
  </form>
  <a href="#" id="btn_siguiente" class="btn btn-success">Siguiente</a>
</div>


<div class="" id="form1">
  <label for="">
    Nombre
    <input type="text" name="" value="">
  </label>

  <label for="">
    Apellido
    <input type="text" name="" value="">
  </label>

</div>











  <div class="">
    <img src="/images/imagen_cargando.gif" id="imagen_cargando" style="display:none" alt="" class="thumbnail">
  </div>

  <div class="row" id="carga_pelis">

  </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

{{-- <script src="/js/techo.js"></script> --}}
<script src="/js/jquery.js"></script>
@endsection
