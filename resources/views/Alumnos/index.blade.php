@extends('layouts.app')
@section('title','Lista de Pacientes')
@section('content')
<head>
  {!!Html::style('css/micss.css')!!}
</head>
   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header "  >
     <h1>Pacientes<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8 divCenter">

        <div class="panel panel-default " >
          <div class="panel-heading">
             Lista

           </div>
          <div class="panel-body divCenter " >

             <table class="table table-bordered">
               <thead>
                 <th>id</th>
                  <th>Clinica</th>



                  <th>Accion</th>
               </thead>
               <tbody>

               	@foreach($clinica as $cli)

               	<tr>
                  <td>{{$cli->id_Clinica}}</td>
               		<td>{{$cli->Nombre_Clinica}}</td>



                  <td><a <button href={{ route('Alumno.mostrar',$cli->id_Clinica) }} type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Ver pacientes</button></a>

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
