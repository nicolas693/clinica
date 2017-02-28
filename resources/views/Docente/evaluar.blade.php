@extends('layouts.app')
@section('title','Evaluación de Alumnos')
@section('content')

  <head>
  {!!Html::style('css/micss.css')!!}
  </head>

  <ol class="breadcrumb fondoC1 ">
       <li><a href="{{url('Docente/mostrar')}}">Lista de Alumnos</a></li>
       <li class="active">Evaluar Alumno</li>
     </ol>

  <div class="row fondoC centro">

    <div class="page-header "  >
      <h1>Evaluar Alumnos<small></small></h1>
    </div>

    <div class="col-md-10">
       <div class="panel panel-primary " style=" margin-right:10%;" >
         <div class="panel-heading">
           Evaluar Alumno {{$alumnos->Nombre_Alumno}} {{$alumnos->Apellido_Alumno}}
       </div>

              <div class="panel-body" >
                {!!Form::open()!!}

                <div class="col-sm-6">
                  {{Form::label('Asignatura: ')}}
                  @foreach($asignatura as $asig)
                    @if($alumnos->asignatura_id == $asig->id)
                      {{$asig->nombre}}
                    @endif
                  @endforeach
               </div>

               <div class="col-sm-10">
                   {!!form::label('Observaciones')!!}
                   {!!form::text('observaciones',null,['id'=>'Observaciones','class'=>'form-control' ])!!}
              </div>

              <div class="col-sm-6">
                {!!form::label('Calificación')!!}
                {!!form::text('calificacion',null,['id'=>'Calificacion','class'=>'form-control'])!!}
              </div>


              <div class="col-sm-8">
              {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px;'])!!}
               <!--!!Form::select('pac',$pacientes ,null,['id'=>'PacienteEvaluado','class'=>'form-control']) !!} -->
               {!!Form::close()!!}
             </div>

              </div>
        </div>
      </div>
  </div>

@endsection
