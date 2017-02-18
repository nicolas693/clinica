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
    <div class="page-header "  >
      <h1>Ficha del Paciente<small></small></h1>
    </div>
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Datos personales


              <div class="panel-body">

                  {!!Form::open()!!}

                 <div class="form-group">
                    {!!form::label('Rut : ')!!}
                     {!!$paciente->rut !!}
                 </div>


                  <div class="form-group">
                    {!!form::label('Nombre : ')!!}
                     {!!$paciente->Nombre !!} {!!$paciente->Paterno !!} {!!$paciente->Materno !!}
                 </div>


                 {!!Form::close()!!}

          <div class="panel-body">



               </div>

              <a <button href={{URL::previous()}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
              <a <button href="{{route('Tratamiento.index') }}" type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-warning" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver plan de Tratamiento</button></a>
              <a <button href={{route('Odontograma.index',$id) }} type="button"  class="btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver Odontograma</button></a>
              


           </div>
        </div>
      </div>
    </div>
  </div>


@endsection
