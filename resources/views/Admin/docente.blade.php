@extends('layouts.app')
@section('title','Lista de Docentes')
@section('content')

<head>
  {!!Html::style('css/micss.css')!!}
</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Admin')}}"> Administrador</a></li>
     <li class="active">Lista de Docentes</li>
   </ol>

<div class="row fondoC centro">
  <div class="page-header" style=" margin-right:25%;" >
    <h1>Docentes<small></small></h1>
  </div>
  <div class="col-md-10" >

     <div class="panel panel-default" style=" margin-right:0%;">
       <div class="panel-heading">
            Lista de Docentes
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                 <th>Rut</th>
                 <th>Nombre</th>
                 <th>Teléfono</th>
                 <th>Asignatura</th>
              </thead>

              <tbody>
                @foreach($docente as $doc)

               	<tr>
               		<td>{{$doc->id}}</td>
               		<td>{{$doc->Nombre}}</td>
                  <td>{{$doc->Telefono}}</td>
                  @foreach($asignatura as $asig)
                    @if($doc->asignatura_id == $asig->id)
                      <td>{{$asig->nombre}}</td>
                    @endif
                  @endforeach
               	</tr>

              @endforeach
              </tbody>
            </table>

          </div>

        </div>

  </div>
  <p class="navbar-text navbar-right" style=" margin-top: 1px;">
    <a <button type="button" href={{URL::previous()}} class="btn btn-primary" style=" margin-right: 60%;">Volver</button> </a>
  </p>
</div>
</div>

@endsection
