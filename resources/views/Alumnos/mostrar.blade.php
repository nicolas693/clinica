@extends('layouts.app')
@section('title','Lista de Pacientes')
@section('content')
<head>
  {!!Html::style('css/micss.css')!!}
  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
</head>
   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb fondoC1 ">

        <li class="active">Pacientes </li>
        <li class="pull-right"><a href="/Alumno" class="btn btn-primary btn-xs"> <b>Volver</b> </a></li>
      </ol>
   <!-- Main component for a primary marketing message or call to action -->


   <div class="row fondoC centro">

     <div class="col-md-12 " style="margin-top:5%;">

        <div class="panel panel-primary  " style=" margin-right:10%;" >
          <div class="panel-heading">
            Lista de Pacientes
        </div>

        <div class="col-sm-6" style="margin-top:3%;margin-bottom:5%;"><a <button href="#" id="pacientes" type="button"  class="btn btn-success" style=" margin-right: 40%;" >Mis Pacientes</button></a>
      </div>

      <div class="col-sm-6" style="margin-top:3%;margin-bottom:5%;"><a <button href="#" id="alta" type="button"  class="btn btn-success" style=" margin-right: 40%;" >Pacientes Con Alta Medica</button></a>
    </div>



    <div class="panel panel-default" id="1" style="margin-left:2%; margin-right:2%; margin-top:10%;">
      <div class="panel-heading" ><b>Pacientes</b>


    </div>
        <div class="panel-body">

          <table class="table stripe compact " id="myTable1"  >
            <thead>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Clínica</th>
               <th>Acción</th>
            </thead>


             @foreach($paciente as $pa)

               @if ($pa->clinica_id == $id && $pa->alta==false )
               <tr>
                 <td>{{$pa->rut}}</td>
                 <td>{{$pa->Nombre}}
                 {{$pa->Paterno}}
                 {{$pa->Materno}}</td>
                 <td>{{$pa->clinica_id}}</td>


                 <td>


                     <div class="btn-group">
                        <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href={{route('Ficha.index', $pa->rut) }}>Antecedentes Clinicos</a></li>
                          <li><a href={{route('Paciente.edit',$pa->rut)}}>Editar</a></li>
                          <li><a href={{route('Paciente.show',$pa->rut)}}>Dar de Alta</a></li>
                        </ul>
                     </div>
                 </td>
               </tr>
               @endif

             @endforeach
          </table>




        </div>
          <a href={{route('Paciente.create',$id)}} class="btn btn-success btn-sm" style="margin-left:3%;margin-bottom:3%;" > <b>Ingresar nuevo paciente</b> </a>

      </div>






        <div class="panel panel-default" id="3" style="display:none; margin-left:2%; margin-right:2%; margin-top:10%">
          <div class="panel-heading" ><b>Pacientes Con Alta</b></div>
            <div class="panel-body">
              <table class="table stripe compact " id="myTable2"   >
                <thead>
                   <th>Rut</th>
                   <th>Nombre</th>
                   <th>Clínica</th>
                   <th>Acción</th>
                </thead>


                 @foreach($paciente as $pa)

                   @if ($pa->alta==true)
                   <tr>
                     <td>{{$pa->rut}}</td>
                     <td>{{$pa->Nombre}}
                     {{$pa->Paterno}}
                     {{$pa->Materno}}</td>
                     <td>{{$pa->clinica_id}}</td>


                     <td>
                         <a <button href={{route('Paciente.alta',$pa->rut)}}  type="button"  class="btn btn-success btn-sm" style=" margin-right: 40%;" >Nuevo tratamiento</button></a>
                     </td>
                   </tr>
                   @endif

                 @endforeach
              </table>

            </div>

          </div>









               </div>
           </div>


        </div>
     </div>
   </div>

   <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

   <script>



   $(document).ready(function() {
       $('#myTable1').DataTable( {
           "language": {
               "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
           }
       } );
   } );

   $(document).ready(function() {
       $('#myTable2').DataTable( {
           "language": {
               "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
           }
       } );
   } );


   $(document).on("click", function(e){
       if($(e.target).is("#alta")){
         $("#3").show();

         $("#1").hide();
       }
   });

   $(document).on("click", function(e){
       if($(e.target).is("#pacientes")){
         $("#1").show();

         $("#3").hide();
       }
   });

   </script>


@endsection
