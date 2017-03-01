@extends('layouts.app')
@section('title','Docente')
@section('content')

<head>
  {!!Html::style('css/micss.css')!!}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

</head>


<ol class="breadcrumb fondoC1 ">
     <li class="active">Panel de Docente</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Docente<small></small></h1>
    </div>
    <div class="col-md-12">
        <div class="panel panel-primary" style="margin-right:10%;">
          <div class="panel-heading">Menú</div>
              <div class="panel-body">
                  <div class="col-sm-4"><button type="button" id='Alumno'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Alumnos</button></div>


                    <div class="panel panel-default" id="1" style="display:none; margin-top:8%;">
                      <div class="panel-heading" ><b>Alumnos</b></div>
                        <div class="panel-body">

                          <table class="table table-bordered" >

                            <thead>
                               <th>Rut</th>
                               <th>Nombre</th>
                               <th>Teléfono</th>
                               <th>Acción</th>
                            </thead>
                            <tbody>

                             @foreach($alumnos as $alu)

                             <tr>
                               <td>{{$alu->alumno_id}}</td>
                               <td>{{$alu->Nombre_Alumno}} {{$alu->Apellido_Alumno}}</td>
                               <td>{{$alu->Telefono_Alumno}}</td>


                               <td><a <button href="{{route('Alumno.edit',$alu->alumno_id)}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>
                                 <a <button href="{{url('/Docente/evaluar',$alu->alumno_id)}}" type="button" id= 'Evaluar' name='evaluar' class="btn btn-default btn-sm m-t-10 btn-info" style ="margin-left: 20px"  >Evaluar Alumno</button></a>
                               </td>
                             </tr>
                             @endforeach
                            </tbody>
                          </table>

                          <a <button href="{{route('Alumno.create')}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-success" style ="margin-left: 0px"  >Ingresar Alumno</button></a>



                        </div>
                      </div>
              </div>
        </div>
  </div>


</div>

<script>

$(document).on("click", function(e){
    if($(e.target).is("#Alumno")){
      $("#1").show();


    }
});








</script>

@endsection
