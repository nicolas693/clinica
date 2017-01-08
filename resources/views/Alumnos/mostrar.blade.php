@extends('layouts.app')



@section('title','Lista de Pacientes')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header "  >
     <h1>Pacientes<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default " >
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <a <button href={{route('Paciente.create')}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Nuevo</button></a>
                <!--<button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>-->
              </p>
           </div>
          <div class="panel-body " >

             <table class="table table-bordered">
               <thead>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Clinica</th>


                  <th>Acción</th>
               </thead>
               <tbody>

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

                             <a href={{route('Paciente.show',$pa->rut)}} class="btn btn-primary btn-danger">Dar de alta</a>
                        </div>-->

                        <div class="btn-group">
                           <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                             <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu" role="menu">
                             <li><a href={{ url('/Ficha/index', $pac->id_Paciente) }}>Ver Ficha</a></li>
                             <li><a href={{route('Paciente.edit',$pa->rut)}}>Editar</a></li>
                             <li><a href={{route('Paciente.show',$pa->rut)}}>Dar de Baja</a></li>
                           </ul>
                        </div>
                    </td>
                  </tr>
                  @endif

               	@endforeach

               </tbody>



             </table>


          </div>
        </div>


     </div>
   </div>

   <!--<script>$("#nuevo").click(function(event){document.location.href = "{route('Paciente.create')}}";});</script>-->




@endsection
