
@extends('layouts.app')
@section('title','Inscribir Docente')
@section('content')
  @include('partials.messages')

<head>
  {!!Html::style('css/micss.css')!!}
</head>
<ol class="breadcrumb fondoC1 ">
     <li class="pull-right"><a href="/Admin" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     <li class="active">Editar Usuario</li>
   </ol>





  <div class="row fondoC centro">

    <div class="col-md-8">
       <div class="panel panel-primary">
         <div class="panel-heading">
            Datos de  {{$user->email}}
          </div>
         <div class="panel-body">
            {!!Form::model($user,['route'=>['User.update',$user->id],'method'=>'PUT'])!!}

           <div class="col-sm-12">
              {!!form::label('Id usuario')!!}
              {!!form::text('id',null,['id'=>'id','class'=>'form-control'])!!}

            </div>

         <div class="col-sm-6">
             {!!form::label('Nombre Usuario')!!}
             {!!form::text('name',null,['id'=>'Nombre_Alumno','class'=>'form-control'])!!}
        </div>

        <div class="col-sm-6">
            {!!form::label('Email Usuario')!!}
            {!!form::text('email',null,['id'=>'Nombre_Alumno','class'=>'form-control'])!!}
       </div>

       <div class="col-sm-6">
           {!!form::label('Permisos de usuario')!!}
              {!! Form::select('idrol',$permisos,null,['id'=>'asignatura_id','class'=>'form-control']) !!}

      </div>




       {!!form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px; margin-left: 16px; margin-right:400px'])!!}
       {!!Form::close()!!}


         </div>

        </div>
       </div>
    </div>
  </div>
</div>



@endsection
