@extends('layouts.app')
@section('title','Lista de Clinicas')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header" >
     <h1>Clinicas<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Clinicas
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <a <button href={{route('Clinica.create')}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Nuevo</button></a>

              </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Telefono</th>


                  <th>Acción</th>
               </thead>
               <tbody>

               	@foreach($clinica as $cli)

               	<tr>
               		<td>{{$cli->id_Clinica}}</td>
               		<td>{{$cli->Nombre_Clinica}}</td>
               		<td>{{$cli->Direccion_Clinica}}</td>
               		<td>{{$cli->Telefono_Clinica}}</td>


                  <td><a <button  href={{route('Clinica.edit',$cli->id_Clinica)}} type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>
                      <a <button href={{route('Clinica.show',$cli->id_Clinica)}} type="button" id= 'Eliminar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" style ="margin-left: 20px">Eliminar</button></a>
                  </td>
               	</tr>

               	@endforeach

               </tbody>



             </table>


          </div>
        </div>


     </div>
   </div>



@endsection
