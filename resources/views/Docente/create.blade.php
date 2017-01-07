@extends('layouts.app')
@section('title','Inscribir Docente')
@section('content')

  <ol class="breadcrumb">
       <li><a href="{{url('Docente')}}"> Docente</a></li>
       <li class="active">Inscribir Nuevo Docente</li>
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
           {!!Form::open(['route'=>'Docente.store','method'=>'POST'])!!}


           <div class="col-sm-12">
              {!!form::label('Rut Docente')!!}
              {!!form::text('id',null,['id'=>'id','class'=>'form-control'])!!}

         </div>
         <div class="col-sm-4">
             {!!form::label('Nombre')!!}
             {!!form::text('Nombre_Docente',null,['id'=>'Nombre_Alumno','class'=>'form-control'])!!}
        </div>


        <div class="col-sm-4">
             {!!form::label('Teléfono')!!}
             {!!form::text('Telefono_Docente',null,['id'=>'Telefono_Alumno','class'=>'form-control'])!!}
        </div>

        <div class="col-sm-5">
           {!!form::label('Asignatura')!!}
           {!! Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']) !!}
        </div>



      </div>
          {!!form::submit('Inscribir Alumno',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;'])!!}
       {!!Form::close()!!}
    </div>



         </div>



       </div>
    </div>
  </div>
</div>



@endsection
