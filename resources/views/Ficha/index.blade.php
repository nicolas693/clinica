@extends('layouts.app')

@section('title','Ficha del Paciente')
@section('content')

<head>
    {!!Html::style('css/micss.css')!!}
</head>


<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Ficha Paciente</li>
   </ol>


<div class="row fondoC centro">
    <div class="page-header" style="margin-right:350px;" >
      <h1>Antecedentes del Paciente<small></small></h1>
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
                    {!!form::label('Telefono : ')!!}
                     {!!$paciente->Telefono_Movil !!}
                 </div>

                 <div class="form-group col-sm-6">
                    {!!form::label('Direccion : ')!!}
                     {!!$paciente->Calle !!} {!!$paciente->Numero_calle !!}
                 </div>

                 <div class="form-group col-sm-6">
                    {!!form::label('Cobertura Medica : ')!!}
                     {!!$paciente->Cobertura_Medica !!}
                 </div>



                 {!!Form::close()!!}



                  @if($paciente->Odontograma_id==NULL)

                  {!!Form::open(['route'=>'Odontograma.store','method'=>'POST'])!!}
                      {!!form::text('Odontograma_id',$paciente->rut,['id'=>'Odontograma_id','class'=>'form-control hidden'])!!}

                      <div class="btn-group">
                        <button type="submit" class="btn btn-success">Crear Odontograma</button>

                        <a <button type="button" href={{URL::previous()}} class="btn btn-primary">Volver</button></a>
                      </div>


                    {!!Form::close()!!}

                   @endif
                   @if($paciente->Odontograma_id!=NULL)
                   <div class="btn-group">

                     <a <button type="button" href={{route('Tratamiento.index', $id) }} class="btn btn-warning">Ver Plan de Tratamiento</button></a>
                     <a <button type="button" href={{route('Odontograma.index',$id) }} class="btn btn-info">Ver Odontograma</button></a>
                     <a <button href={{route('Ficha.ficha',$id) }} type="button"  class="btn btn-success">Ingresar Ficha</button> </a>
                     <a <button type="button"  id='volver' class="btn btn-primary">Volver</button> </a>
                   </div>
                    @endif
                  </div>
          </div>
        </div>
      </div>

      <script>
        $("#volver").click(function(event)
        {
            document.location.href = "{{route('Alumno.mostrar',$paciente->clinica_id)}}";
        });
        </script>

@endsection
