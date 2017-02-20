@extends('layouts.app')

@section('title','Planificación de Tratamiento')
@section('content')

  <head>
      {!!Html::style('css/micss.css')!!}
  </head>

  <ol class="breadcrumb fondoC1 ">
       <li><a href="{{url('Alumno')}}"> Alumno</a></li>
       <li><a href="{{url('Ficha', $id)}}">Ficha</a></li>
       <li class="active">Plan de Tratamiento</li>
     </ol>


<div class="row fondoC centro">
  <div class="page-header "  >
    <h1>Planificación de Tratamiento<small></small></h1>
  </div>
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Tratamiento
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href={{route ('Tratamiento.nuevo',$id)}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ingresar Tratamiento</button></a>
             </p>
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                 <th>Fecha</th>
                 <th>Acción a realizar</th>
                 <th>Diente</th>
                 <th>Profesor a cargo</th>
                 <th>Costo</th>
              </thead>
              </table>

              <div >
                 <a <button href={{route('Ficha.index', $id) }} type="button"  class="btn btn-primary"   >Volver</button></a>
               </div>

           </div>
         </div>
       </div>
     </div>


@endsection
