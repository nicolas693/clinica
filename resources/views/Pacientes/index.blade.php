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


                  <th>Accion</th>
               </thead>
               <tbody>

               	@foreach($paciente as $pa)

               	<tr>
               		<td>{{$pa->rut}}</td>
               		<td>{{$pa->Nombre}}</td>
               		<td>{{$pa->Paterno}}</td>
                  <td>{{$pa->Materno}}</td>
               		<td>{{$pa->clinica_id}}</td>


                  <td><a <button href={{route('Paciente.edit',$pa->rut)}} type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>
                      <a <button href={{route('Paciente.show',$pa->rut)}} type="button" id= 'Eliminar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" style ="margin-left: 20px">Eliminar</button></a>
                      <!--<a <button href={{route('Ficha.show',$pa->rut)}} type="button" id= 'Ver_Ficha' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" style ="margin-left: 200px; margin-top: 1px ">Ver Ficha</button></a>-->
                  </td>
               	</tr>

               	@endforeach

               </tbody>



             </table>


          </div>
        </div>


     </div>
   </div>

   <!--<script>$("#nuevo").click(function(event){document.location.href = "{{route('Paciente.create')}}";});</script>-->




@endsection
