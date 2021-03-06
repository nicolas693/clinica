@extends('layouts.app')
@section('title','Planificación de Tratamiento')
@section('content')

  <head>
      {!!Html::style('css/micss.css')!!}
  </head>

  <ol class="breadcrumb fondoC1 ">


       <li class="active">Plan de Tratamiento</li>
        <li class="pull-right"><a href="/Ficha/{{$paciente->rut}}" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
  </ol>


<div class="row fondoC centro">
  <div class="page-header "  >
    <h1>Planificación de Tratamiento<small></small></h1>
  </div>
    <div class="col-md-10">

       <div class="panel panel-primary centrarIT " >
         <div class="panel-heading">
            Tratamiento
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href={{route ('Tratamiento.nuevo',$id)}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ingresar Tratamiento</button></a>
             </p>
          </div>

          <div class="panel-body">
            <table class="table stripe compact">
              <thead>
                 <th>Fecha</th>
                 <th>Acción a realizar</th>
                 <th>Pieza Dental</th>
                 <th>Accion</th>
              </thead>


               @foreach($tratamiento as $tra)
                @if ($tra->paciente_id == $id )
                  <tr>
                    <td>{{$tra->Fecha}}</td>
                    <td>{{$tra->AccionR}}</td>
                    <td>{{$tra->DienteTratamiento}}</td>
                    <td><a href="/Tratamiento/{{$paciente->rut}}/edit/{{$tra->id_Tratamiento}}" class="btn btn-success btn-sm"  > <b>Editar</b> </a></td>
                  </tr>
                @endif
              @endforeach

              </table>



           </div>
         </div>
       </div>
     </div>


@endsection
