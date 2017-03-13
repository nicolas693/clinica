@extends('layouts.app')
@section('title','Administrador')
@section('content')

<head>
  {!!Html::style('css/micss.css')!!}

  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">










</head>


<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Admin')}}"> Administrador</a></li>
     <li class="active">Panel Administrador</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Administrador<small></small></h1>
    </div>
    <div class="col-md-12">
        <div class="panel panel-primary" style="margin-right:10%;">
          <div class="panel-heading">Menú</div>
              <div class="panel-body">
                  <div class="col-sm-4"><button type="button" id='docente'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Docentes</button></div>
                  <div class="col-sm-4"><button type="button" id='docente2'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Docentes de baja</button></div>


                    <div class="col-sm-4"><button type="button" id='usuario'  name='ver_docente' class="btn  navbar-btn btn-info" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Usuarios</button></div>


                    <div class="panel panel-default" id="1" style="margin-top:8%;">
                      <div class="panel-heading" ><b>Docentes</b></div>
                        <div class="panel-body">

                          <table class="table stripe compact" id="myTable1" >

                            <thead>
                               <th>Rut</th>
                               <th>Nombre</th>
                               <th>Teléfono</th>
                               <th>Acción</th>
                            </thead>
                            <tbody>

                             @foreach($doce as $do)

                              @if($do->activo==true)
                              <tr>
                                <td>{{$do->id}}</td>
                                <td>{{$do->Nombre}} {{$do->Paterno}} {{$do->Materno}}</td>
                                <td>{{$do->Telefono}}</td>

                                <td><a <button href="{{route('Docente.edit',$do->id)}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>
                                  <a <button href="{{route('Docente.alta',$do->id)}}" type="button" id= 'Eliminar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" style ="margin-left: 20px" >Eliminar</button></a>

                                </td>
                              </tr>

                              @endif
                             @endforeach
                            </tbody>
                          </table>

                          <a <button href="{{route('Docente.create')}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-success"   >Inscribir Docente</button></a>



                        </div>
                      </div>

                      <div class="panel panel-default" id="2" style="display:none; margin-top:8%;">
                        <div class="panel-heading" ><b>Docentes dados de baja</b></div>
                          <div class="panel-body">

                            <table class="table stripe compact" id="myTable2" >

                              <thead>
                                 <th>Rut</th>
                                 <th>Nombre</th>
                                 <th>Teléfono</th>
                                 <th>Acción</th>
                              </thead>
                              <tbody>

                               @foreach($doce as $do)

                                @if($do->activo==false)
                                <tr>
                                  <td>{{$do->id}}</td>
                                  <td>{{$do->Nombre}} {{$do->Paterno}} {{$do->Materno}}</td>
                                  <td>{{$do->Telefono}}</td>


                                    <td><a <button href="{{route('Docente.alta',$do->id)}}" type="button" id= 'quitar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" >Quitar la baja</button></a>

                                  </td>
                                </tr>

                                @endif
                               @endforeach
                              </tbody>
                            </table>


                          </div>
                        </div>


                        <div class="panel panel-default" id="3" style="display:none; margin-top:8%;">
                          <div class="panel-heading" ><b>Usuarios</b></div>
                            <div class="panel-body">
                              <table class="table  stripe compact" id="myTable3" >
                                <thead>
                                   <th>id</th>
                                   <th>Nombre</th>
                                   <th>E-mail</th>
                                   <th>Permisos de : </th>
                                   <th>Acción</th>
                                </thead>
                                <tbody>

                                 @foreach($user as $us)

                                 @if($us->idrol!=1)
                                 <tr>
                                   <td>{{$us->id}}</td>
                                   <td>{{$us->name}}</td>
                                    <td>{{$us->email}}</td>
                                    @if($us->idrol==1)
                                      <td>Administrador</td>
                                    @endif
                                    @if($us->idrol==2)
                                      <td>Docente</td>
                                    @endif
                                    @if($us->idrol==3)
                                      <td> Alumno </td>
                                    @endif
                                    @if($us->idrol==4)
                                      <td> Invitado</td>
                                    @endif


                                   <td><a <button href="{{route('User.edit',$us->id)}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>

                                   </td>
                                 </tr>
                                 @endif
                                 @endforeach
                                </tbody>
                              </table>

                            </div>
                          </div>

              </div>
        </div>
  </div>






</div>


<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script>

$(document).on("click", function(e){
    if($(e.target).is("#docente")){
      $("#1").show();
      $("#2").hide();
      $("#3").hide();
    }
});

$(document).on("click", function(e){
    if($(e.target).is("#docente2")){
      $("#2").show();
      $("#1").hide();
      $("#3").hide();
    }
});





$(document).on("click", function(e){
    if($(e.target).is("#usuario")){
      $("#3").show();
      $("#2").hide();
      $("#1").hide();

    }
});



</script>
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

$(document).ready(function() {
    $('#myTable3').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );

</script>






@endsection
