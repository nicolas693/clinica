@extends('layouts.app')

@section('title','Planificación de Tratamiento')
@section('content')

  <div class="page-header "  >
    <h1>Planificación de Tratamiento<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Tratamiento
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">

             </p>
          </div>
          <div class="panel-body">
            {!!Form::open(['route'=>'Paciente.store','method'=>'POST'])!!}
            {{!!Form::close}}
          </div>
        </div>
      </div>
    </div>

@endsection
