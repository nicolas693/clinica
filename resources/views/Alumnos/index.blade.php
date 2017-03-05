@extends('layouts.app')
@section('title','Lista de Pacientes')
@section('content')
<head>
  {!!Html::style('css/micss.css')!!}
</head>
   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb fondoC1 ">
        <li><a href="{{url('Alumno')}}"> Alumno</a></li>
        <li class="active">Panel Alumno</li>
      </ol>


   <div class="row fondoC centro">
     <div class="page-header centrar" style=" margin-right:20%;"  >
       <h1>Lista de Clínicas<small></small></h1>
     </div>
     <div class="col-md-10 ">

        <div class="panel panel-primary centrar" >
          <div class="panel-heading">
             Clínicas
           </div>
          <div class="panel-body" >

             <table class="table table-bordered">
               <thead>
                 <th>id</th>
                  <th>Clinica</th>
                  <th>Acción</th>
               </thead>
               <tbody>

               	@foreach($clinica as $cli)

               	<tr>
                  <td>{{$cli->id_Clinica}}</td>
               		<td>{{$cli->Nombre_Clinica}}</td>

                  <td><a <button href={{ route('Alumno.mostrar',$cli->id_Clinica) }} type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-info" style ="margin-left: 20px"  >Ver pacientes</button></a>

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
