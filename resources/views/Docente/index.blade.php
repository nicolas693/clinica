@extends('layouts.app')
@section('title','Inscribir Alumno')
@section('content')

  <ol class="breadcrumb">

       <li><a href="{{url('Docente')}}"> Docente</a></li>
     </ol>
  <div class="page-header" >
    <h1>Docente<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
            Menú
            <button type="button" id='inscribir'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 40px">Inscribir Alumno</button>
            <button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 40px">Evaluar Alumno</button>
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">

            </p>
            <div class="panel-body">


            </div>
          </div>
    </div>
  </div>

<script>
  $("#inscribir").click(function(event)
  {
      document.location.href = "{{route('Alumno.create')}}";
  });
  </script>

@endsection
