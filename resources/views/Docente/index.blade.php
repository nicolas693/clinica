@extends('layouts.app')
@section('title','Docente')
@section('content')

<head>
  {!!Html::style('css/micss.css')!!}
  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

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

                          <table class="table stripe compact" id="myTable1" >

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
                               <td>{{$alu->Nombre}} {{$alu->Paterno}} {{$alu->Materno}}</td>
                               <td>{{$alu->Telefono}}</td>


                               <td>

                                 <div class="btn-group">
                                    <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="{{route('Alumno.edit',$alu->alumno_id)}}">Editar</a></li>
                                      <li><a href="{{url('/Docente/evaluar',$alu->alumno_id)}}">Evaluar</a></li>

                                    </ul>
                                 </div>
                               </td>
                             </tr>
                             @endforeach
                            </tbody>
                          </table>

                          <a <button href="{{route('Alumno.create')}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-success"   >Inscribir Alumno</button></a>
                        </div>
                      </div>
              </div>
        </div>
  </div>


</div>
<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>

$(document).on("click", function(e){
    if($(e.target).is("#Alumno")){
      $("#1").show();


    }
});

$(document).ready(function() {
    $('#myTable1').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );
</script>

@endsection
