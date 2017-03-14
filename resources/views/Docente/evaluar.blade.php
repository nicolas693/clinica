@extends('layouts.app')
@section('title','Evaluación de Alumnos')
@section('content')

  <head>
  {!!Html::style('css/micss.css')!!}
  </head>

  <ol class="breadcrumb fondoC1 ">

       <li class="active">Evaluar Alumno</li>
       <li class="pull-right"><a href="/Docente" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     </ol>

  <div class="row fondoC centro">

    <div class="page-header "  >
      <h1>Evaluar Alumnos<small></small></h1>
    </div>

    <div class="col-md-10">
       <div class="panel panel-primary " style=" margin-right:10%;" >
         <div class="panel-heading">
           Evaluar Alumno {{$alumnos->Nombre}} {{$alumnos->Apellido}}
       </div>

              <div class="panel-body" >
                {!!Form::model( ['route'=>['Docente.evaluarAlumno'],'method'=>'PUT'] )!!}

                <div class="col-sm-6">
                  {{Form::label('Asignatura: ')}}
                  @foreach($asignatura as $asig)
                    @if($alumnos->asignatura_id == $asig->id)
                      {{$asig->nombre}}
                    @endif
                  @endforeach
               </div>


               <div class="col-sm-10" style="margin-top:15px;">
                   {!!form::label('Observaciones')!!}
                   {!!form::text('Observaciones',null,['id'=>'Observaciones','class'=>'form-control' ])!!}
              </div>

              <div class="col-sm-6" style="margin-top:15px;">
                {!!form::label('Calificación')!!}
                {!!form::text('Calificacion',null,['id'=>'Calificacion','class'=>'form-control'])!!}
              </div>

              <div class="col-sm-8" style="margin-top:15px;">
              {!!form::label('pacientesevaluar','Pacientes a evaluar')!!}
              {!! Form::select('PacienteEvaluado',$pacientes,null,['id'=>'PacienteEvaluado',
                  'class'=>'form-control']) !!}
            </div>


              <div class="col-sm-8">
              {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px;'])!!}
              {!!Form::close()!!}
             </div>

              </div>
        </div>
      </div>
  </div>

@endsection
