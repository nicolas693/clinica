@extends('layouts.app')
@section('title','Administrador')
@section('content')

<head>
  {!!Html::style('css/micss.css')!!}
</head>

  <div class="page-header" >
    <h1>Administrador<small></small></h1>
  </div>

  <div class="row divCenter" style="margin:0 auto;">
    <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading">Panel Administrador</div>
              <div class="panel-body">
                  Menú
                  <button type="button" id='inscribir'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 40px">Inscribir Docente</button>
              </div>
        </div>
  </div>

<script>
  $("#inscribir").click(function(event)
  {
      document.location.href = "{{ url('Docente/create') }}";
  });
  </script>




@endsection
