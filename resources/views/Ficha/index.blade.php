@extends('layouts.app')

@section('title','Ficha del Paciente')
@section('content')

<head>
    {!!Html::style('css/micss.css')!!}
</head>
<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Ficha Paciente</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header "  >
      <h1>Ficha del Paciente<small></small></h1>
    </div>
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Datos personales
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">

              <a <button href={{URL::previous()}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
              <a <button href="#" type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-warning" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver plan de Tratamiento</button></a>

             </p>
          </div>

          <div class="panel-body">


           </div>


@endsection
