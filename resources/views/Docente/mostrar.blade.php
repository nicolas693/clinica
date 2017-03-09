@extends('layouts.app')
@section('title','Alumnos')

@section('content')
<head>
{!!Html::style('css/micss.css')!!}
</head>
   <!-- Main component for a primary marketing message or call to action -->

   <ol class="breadcrumb fondoC1 ">

        <li class="active">Evaluar Alumno</li>
        <li class="pull-right"><a href="/Docente" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
      </ol>

   <div class="row fondoC centro">
     <div class="page-header "  >
       <h1>Alumnos<small></small></h1>
     </div>
     <div class="col-md-8">

        <div class="panel panel-default " >
          <div class="panel-heading">
             Lista

           </div>
          <div class="panel-body " >

             <table class="table stripe compact">
               <thead>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Asignatura</th>
                  <th>Clínica</th>
                  <th>Acción</th>
               </thead>
               <tbody>

               	@foreach($alumno as $al)
               	<tr>
               		<td>{{$al->alumno_id}}</td>
               		<td>{{$al->Nombre}}</td>
               		<td>{{$al->Apellido}}</td>
                  @if ($al->asignatura_id!=NULL)
                    @foreach($asignatura as $asig)
                      @if($al->asignatura_id == $asig->id)
                        <td>{{$asig->nombre}}</td>
                      @endif
                    @endforeach
                  @endif
                  <td>{{$al->id_Clinica}}</td>
                  <td>
                    <a <button href={{url('/Docente/evaluar',$al->alumno_id)}} type="button" id='Evaluar' name='Evaluar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Evaluar</button></a>
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
