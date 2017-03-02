@extends('layouts.app')

@section('title','Lista de Alumnos')

@section('content')

  <ol class="breadcrumb">

       <li><a href="{{url('')}}"> Docente</a></li>
       <li class="active">Lista de alumnos inscritos</li>
     </ol>

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header" >
     <h1>Alumnos<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista de Alumnos
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Inscribir Alumno</button>
              </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Rut </th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Teléfono Alumno</th>
               </thead>
               <tbody>
                 @foreach ($Alumno as $Alumno)
                   <tr>
                     <td>{{$Alumno->alumno_id}}</td>
                     <td>{{$Alumno->Nombre}}</td>
                     <td>{{$Alumno->Apellido}}}</td>
                     <td>{{$Alumno->Telefono}}</td>
                     <td><a href="#">[Editar]</a> <a href="#">[Eliminar]</a></td>
                   </tr>
                 @endforeach
               </tbody>
             </table>
          </div>
        </div>


     </div>
   </div>






@endsection
