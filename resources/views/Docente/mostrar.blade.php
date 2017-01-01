@extends('layouts.app')



@section('title','Alumnos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header "  >
     <h1>Alumnos<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default " >
          <div class="panel-heading">
             Lista

           </div>
          <div class="panel-body " >

             <table class="table table-bordered">
               <thead>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Asignatura</th>
                  <th>Clinica</th>
                  <th>Accion</th>
               </thead>
               <tbody>

               	@foreach($alumno as $al)

               	<tr>
               		<td>{{$al->rut_alumno}}</td>
               		<td>{{$al->Nombre_Alumno}}</td>
               		<td>{{$al->Apellido_Alumno}}</td>
                  <td>{{$al->asignatura_id}}</td>
                  <td>{{$al->id_Clinica}}</td>

                  <td>
                    <a <button  type="button" id= 'Evaluar' name='Evaluar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Evaluar</button></a>
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
