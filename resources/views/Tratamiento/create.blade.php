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
<<<<<<< HEAD
            {!!Form::open(['route'=>'Tratamiento.store','method'=>'POST'])!!}

=======
            {!!Form::open(['route'=>'Paciente.store','method'=>'POST'])!!}
>>>>>>> 8c939b17911f8056aa42f452cf2fa179f082bd8f
            {{!!Form::close}}
          </div>
        </div>
      </div>
    </div>

@endsection
