@extends('layouts.app')
@section('title','Inscribir Alumno')
@section('content')

<head>{!!Html::style('css/micss.css')!!}</head>
  <ol class="breadcrumb fondoC1 ">
       <li class="active">Inscribir Nuevo Alumno</li>
       <li class="pull-right"><a href="/Docente" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Docente<small></small></h1>
    </div>
    <div class="col-md-10">
      <div class="centrarIT">@include('partials.messages')  </div>
      <div class="panel panel-primary centrarIT">
        <div class="panel-heading"><b> Crear Alumno </b></div>

        <div class="panel-body">
          {!!Form::open(['route'=>'Alumno.store','method'=>'POST'])!!}

          <div class="form-group col-sm-12">
             {!!form::label('Rut Alumno')!!}
             {!!form::text('alumno_id',null,['id'=>'alumno_id','class'=>'form-control'])!!}

        </div>

        <div class="form-group col-sm-4">
            {!!form::label('Nombre')!!}
            {!!form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control'])!!}
       </div>

      <div class="form-group col-sm-4">
          {!!form::label('Apellido Paterno')!!}
          {!!form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control'])!!}
     </div>

     <div class="form-group col-sm-4">
         {!!form::label('Apellido Materno')!!}
         {!!form::text('Materno',null,['id'=>'Materno','class'=>'form-control'])!!}
    </div>

       <div class="form-group col-sm-6">
            {!!form::label('Teléfono')!!}
            {!!form::text('Telefono',null,['id'=>'Telefono','class'=>'form-control'])!!}
       </div>


       <div class="form-group col-sm-5">
          {!!form::label('Asignatura')!!}
          {!! Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']) !!}
       </div>

       <div class="form-group col-sm-5">
          {!!form::label('Clínica')!!}
          {!! Form::select('id_Clinica',$clinica,null,['id'=>'id_Clinica','class'=>'form-control']) !!}
       </div>

        <div class="form-group col-sm-6">
          {!!form::label('Código Usuario')!!}
          {!!form::text('user_id',null,['id'=>'user_id','class'=>'form-control'])!!}
        </div>

        <div class="form-group col-sm-12">
          {!!form::submit('Inscribir',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success '])!!}
         {!!Form::close()!!}
        </div>

        </div>
      </div>


         </div>
      </div>



@endsection
