@extends('layouts.app')

@section('title','Ficha del Paciente')
@section('content')

<head>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      {!!Html::style('css/micss.css')!!}
      <meta charset="utf-8" />
      <title>Fechas</title>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Odontograma de {{$paciente->Nombre}} {{$paciente->Paterno}}</li>
   </ol>


<div class="row fondoC centro">
<div class="page-header " style="margin-right:15%;"  >
    <h1>Pieza {{$id2}} <small></small></h1>
  </div>
  <div  style="max-height: 250px;overflow: auto; margin-right:15%;margin-bottom:5%;">
 {!!Form::open(['route'=>'Problema.store','method'=>'POST'])!!}
    <ul class="list-group" style"margin-top: 5%;">


        @foreach($prob as $pro)

        <li class="list-group-item">
          {{$pro}}
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="checkProb" type="checkbox" checked/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>

        @endforeach


    </ul>
    <button type="submit" class="btn btn-success" style=" margin-bottom:5%;">Guardar</button>
    {!! Form::close() !!}

  </div>
  <a <button href={{URL::previous()}} type="button"  class="btn  btn-warning" style=" margin-bottom:5%; margin-right:50%;"   >Volver</button></a>

</div>

@endsection
