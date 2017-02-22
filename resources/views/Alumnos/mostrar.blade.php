@extends('layouts.app')
@section('title','Lista de Pacientes')
@section('content')
<head>
  {!!Html::style('css/micss.css')!!}
</head>
   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb fondoC1 ">
        <li><a href="{{url('Alumno')}}"> Alumno</a></li>
        <li class="active">Pacientes</li>
      </ol>
   <!-- Main component for a primary marketing message or call to action -->


   <div class="row fondoC centro">
     <div class="page-header " style=" margin-right:10%;"  >
       <h1>Pacientes<small></small></h1>
     </div>
     <div class="col-md-12">

        <div class="panel panel-default  " style=" margin-right:10%;" >
          <div class="panel-heading">
            Lista de Pacientes



        </div>


               <div class="panel-body"    >

                  <table class="table table-bordered "  >
                    <thead>
                       <th>Rut</th>
                       <th>Nombre</th>
                       <th>Apellido Paterno</th>
                       <th>Apellido Materno</th>
                       <th>Clinica</th>


                       <th>Acción</th>
                    </thead>


                     @foreach($paciente as $pa)

                       @if ($pa->clinica_id == $id )
                       <tr>
                         <td>{{$pa->rut}}</td>
                         <td>{{$pa->Nombre}}</td>
                         <td>{{$pa->Paterno}}</td>
                         <td>{{$pa->Materno}}</td>
                         <td>{{$pa->clinica_id}}</td>


                         <td>
                             <!--<div class="btn-group btn-group-justified">
                                   <a href="#" class="btn btn-primary">Ver ficha</a>
                                  <a href={{route('Paciente.edit',$pa->rut)}} class="btn btn-primary btn-success" style="background-color:green;">Editar</a>

<<<<<<< HEAD
                                  <a href={{route('Paciente.show',$pa->rut)}} class="btn btn-primary btn-danger">Dar de alta</a>
                             </div>-->


                             <div class="btn-group">
                                <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href={{route('Ficha.index', $pa->rut) }}>Ver Ficha</a></li>
                                  <li><a href={{route('Paciente.edit',$pa->rut)}}>Editar</a></li>
                                  <li><a href={{route('Paciente.show',$pa->rut)}}>Dar de Baja</a></li>
                                </ul>
                             </div>
                         </td>
                       </tr>
                       @endif

                     @endforeach





                  </table>


               </div>
           </div>

           <p class="navbar-text navbar-right" style=" margin-top: 1px;">

             <a <button href={{route('Paciente.create',$id)}} type="button" id='nuevo'  name='nuevo' class="btn btn-success" style=" margin-right: 40%;" >Ingresar nuevo paciente</button></a>
           </p>

        </div>



     </div>
   </div>

   <!--<script>$("#nuevo").click(function(event){document.location.href = "{route('Paciente.create')}}";});</script>-->




@endsection
