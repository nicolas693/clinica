@extends('layouts.app')
@section('title','Administrador')
@section('content')

<head>
  {!!Html::style('css/micss.css')!!}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

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


                    <div class="col-sm-4"><button type="button" id='usuario'  name='ver_docente' class="btn  navbar-btn btn-info" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Usuarios</button></div>


                    <div class="panel panel-default" id="1" style="display:none; margin-top:8%;">
                      <div class="panel-heading" ><b>Docentes</b></div>
                        <div class="panel-body">

                          <table class="table table-bordered" >

                            <thead>
                               <th>Rut</th>
                               <th>Nombre</th>
                               <th>Telefono</th>
                               <th>Accion</th>
                            </thead>
                            <tbody>

                             @foreach($doce as $do)

                             <tr>
                               <td>{{$do->id}}</td>
                               <td>{{$do->Nombre}}</td>
                               <td>{{$do->Telefono}}</td>

                               <td><a <button href="{{route('Docente.edit',$do->id)}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>

                               </td>
                             </tr>
                             @endforeach
                            </tbody>
                          </table>

                          <a <button href="{{route('Docente.create')}}" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Ingresar</button></a>



                        </div>
                      </div>






                        <div class="panel panel-default" id="3" style="display:none; margin-top:8%;">
                          <div class="panel-heading" ><b>Usuarios</b></div>
                            <div class="panel-body">
                              <table class="table table-bordered" >
                                <thead>
                                   <th>id</th>
                                   <th>Nombre</th>
                                   <th>E-mail</th>
                                   <th>Permisos de : </th>
                                   <th>Accion</th>
                                </thead>
                                <tbody>

                                 @foreach($user as $us)

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
                                 @endforeach
                                </tbody>
                              </table>

                            </div>
                          </div>

              </div>
        </div>
  </div>






</div>


<script>

$(document).on("click", function(e){
    if($(e.target).is("#docente")){
      $("#1").show();

      $("#3").hide();
    }
});




$(document).on("click", function(e){
    if($(e.target).is("#usuario")){
      $("#3").show();

      $("#1").hide();

    }
});



</script>






@endsection
