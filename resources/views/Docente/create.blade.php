@extends('layouts.app')
@section('title','Inscribir Docente')
@section('content')


<head>
  {!!Html::style('css/micss.css')!!}
</head>
<ol class="breadcrumb fondoC1 ">
     <li class="pull-right"><a href="/Admin" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     <li class="active">Ingresar Docente</li>
   </ol>





  <div class="row fondoC centro">
    <div class="page-header  " >
      <h1> Ingresar  Docente<small></small></h1>
    </div>
      <div class="col-md-8"> @include('partials.messages')</div>
    <div class="col-md-8">

       <div class="panel panel-primary">
         <div class="panel-heading">
            Formulario Docente
          </div>
         <div class="panel-body">
           {!!Form::open(['route'=>'Docente.store','method'=>'POST'])!!}

           <div class="col-sm-12">
              {!!form::label('Rut Docente')!!}
              {!!form::text('id',null,['id'=>'id','class'=>'form-control'])!!}

            </div>
         <div class="col-sm-4">
             {!!form::label('Nombre')!!}
             {!!form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control'])!!}
        </div>

       <div class="col-sm-4">
           {!!form::label('Apellido Paterno')!!}
           {!!form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control'])!!}
      </div>

      <div class="col-sm-4">
          {!!form::label('Apellido Materno')!!}
          {!!form::text('Materno',null,['id'=>'Materno','class'=>'form-control'])!!}
     </div>

        <div class="col-sm-6">
             {!!form::label('Teléfono')!!}
             {!!form::text('Telefono',null,['id'=>'Telefono','class'=>'form-control'])!!}
        </div>



       <div class="col-sm-6">
            {!!form::label('Email')!!}
            {!!form::text('email',null,['id'=>'email','class'=>'form-control'])!!}
        </div>


        <div class="col-sm-6">
           {!!form::label('Asignatura')!!}
           {!! Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']) !!}
        </div>


       {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px; margin-left: 16px; margin-right:400px'])!!}
       {!!Form::close()!!}


         </div>

        </div>
       </div>
    </div>
  </div>
</div>



@endsection
