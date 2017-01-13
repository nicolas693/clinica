@extends('layouts.app')
@section('title','Inscribir Alumno')
@section('content')
@include('partials.messages')

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

         <div class="panel-body">

           {!!Form::open(['route'=>'Alumno.store','method'=>'POST'])!!}


           <div class="col-sm-12">
              {!!form::label('Rut Alumno')!!}
              {!!form::text('alumno_id',null,['id'=>'alumno_id','class'=>'form-control'])!!}

         </div>
         <div class="col-sm-4">
             {!!form::label('Nombre')!!}
             {!!form::text('Nombre_Alumno',null,['id'=>'Nombre_Alumno','class'=>'form-control'])!!}
        </div>
        <div class="col-sm-4">
             {!!form::label('Apellido ')!!}
             {!!form::text('Apellido_Alumno',null,['id'=>'Apellido_Alumno','class'=>'form-control'])!!}
        </div>

        <div class="col-sm-4">
             {!!form::label('Teléfono')!!}
             {!!form::text('Telefono_Alumno',null,['id'=>'Telefono_Alumno','class'=>'form-control'])!!}
        </div>

        <div class="col-sm-5">
           {!!form::label('Asignatura')!!}
           {!! Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']) !!}
        </div>

        <div class="col-sm-5">
           {!!form::label('Clínica')!!}
           {!! Form::select('id_Clinica',$clinica,null,['id'=>'id_Clinica','class'=>'form-control']) !!}
        </div>

        <div class="col-sm-6">
           {!!form::label('Código Usuario')!!}
           {!!form::text('user_id',null,['id'=>'user_id','class'=>'form-control'])!!}

         </div>

      </div>
          {!!form::submit('Inscribir Alumno',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;'])!!}
       {!!Form::close()!!}
    </div>

         </div>
       </div>
    </div>
  </div>


@endsection
