@extends('layouts.app')
@section('title','Inscribir Alumno')
@section('content')

  <ol class="breadcrumb">
       <li><a href="{{url('Docente')}}"> Docente</a></li>
       <li class="active">Inscribir Nuevo Alumno</li>
     </ol>
  <div class="page-header" >
    <h1>Docente<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
            Inscribir Alumno
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">

          </div><button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 3px 20px;margin-left: 600px">Inscribir</button>
        </p>
         <div class="panel-body">

           {!!Form::open(['route'=>'Alumnos.store','method'=>'POST'])!!}


           <div class="col-sm-12">
              {!!form::label('Rut Alumno')!!}
              {!!form::text('Rut Alumno',null,['id'=>'rut_alumno','class'=>'form-control'])!!}

         </div>
         <div class="col-sm-4">
             {!!form::label('Nombre')!!}
             {!!form::text('Nombre',null,['id'=>'Nombre_Alumno','class'=>'form-control'])!!}
        </div>
        <div class="col-sm-4">
             {!!form::label('Apellido ')!!}
             {!!form::text('Apellido Paterno',null,['id'=>'Apellido_Alumno','class'=>'form-control'])!!}
        </div>
        <div class="col-sm-4">
             {!!form::label('Teléfono')!!}
             {!!form::text('Teléfono',null,['id'=>'Telefono_Alumno','class'=>'form-control'])!!}
        </div>


         </div>
       </div>
    </div>
  </div>

<script>
  $("#nuevo").click(function(event)
  {
      document.location.href = "{{route('Docente.create')}}";
  });
  </script>

@endsection
