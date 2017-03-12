@extends('layouts.app')
@section('title','Ficha del Paciente')
@section('content')

<head>{!!Html::style('css/micss.css')!!}</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Menú Ficha</li>
      <li class="pull-right"><a href="/Alumno/mostrar/{{$paciente->clinica_id}}" class="btn btn-primary btn-xs"> <b>Volver</b> </a></li>
   </ol>


<div class="row fondoC centro">
    <div class="page-header centrar" style="margin-right:350px;" >
      <h1>Menú Ficha<small></small></h1>
    </div>
    <div class="col-md-10">

       <div class="panel panel-primary centrarIT" >
         <div class="panel-heading">
            Datos Paciente
          </div>
              <div class="panel-body">

                  {!!Form::open()!!}
                  <div class="form-group col-sm-6">
                    {!!form::label('Nombre : ')!!}
                    {!!$paciente->Nombre !!} {!!$paciente->Paterno !!} {!!$paciente->Materno !!}
                 </div>

                 <div class="form-group col-sm-6">
                    {!!form::label('Rut : ')!!}
                     {!!$paciente->rut !!}
                 </div>

                 <div class="form-group col-sm-6">
                    {!!form::label('Sexo : ')!!}
                     {!!$paciente->Genero !!}
                 </div>

                 <div class="form-group col-sm-6">
                    {!!form::label('Teléfono : ')!!}
                     {!!$paciente->Telefono_Movil !!}
                 </div>

                 <div class="form-group col-sm-6">
                    {!!form::label('Dirección : ')!!}
                     {!!$paciente->Calle !!} {!!$paciente->Numero_calle !!}
                 </div>

                 <div class="form-group col-sm-6">
                    {!!form::label('Cobertura Médica : ')!!}
                     {!!$paciente->Cobertura_Medica !!}
                 </div>


                 {!!Form::close()!!}



                  @if($paciente->Odontograma_id==NULL)

                  {!!Form::open(['route'=>'Odontograma.store','method'=>'POST'])!!}
                      {!!form::text('Odontograma_id',$paciente->rut,['id'=>'Odontograma_id','class'=>'form-control hidden'])!!}
                      <div class="btn-group">
                        <button type="submit" class="btn btn-success" style="margin-left:10px;">Crear Odontograma</button>
                      </div>
                    {!!Form::close()!!}

                  @else
                    <div class="btn-group">
                        @if ($ficha_exists!=NULL)
                          <a <button type="button" href={{route('Tratamiento.index', $id) }} class="btn btn-warning">Ver Plan de Tratamiento</button></a>
                          <a <button type="button" href={{route('Odontograma.index',$id) }} class="btn btn-info">Ver Odontograma</button></a>
                          <a <button href={{route('Ficha.verficha',$id) }} type="button"  class="btn btn-primary">Ver Ficha</button> </a>
                        @else
                          <a <button type="button" href={{route('Odontograma.index',$id) }} class="btn btn-info">Ver Odontograma</button></a>
                          <a <button href={{route('Ficha.ficha',$id) }} type="button"  class="btn btn-success">Ingresar Ficha</button> </a>
                        @endif

                      </div>
                 @endif

                  </div>
          </div>
      </div>

@endsection
