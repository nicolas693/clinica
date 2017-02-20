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


                 <div class="sm-md-col 4">
                 <a <button href={{URL::previous()}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
                 <a <button href={{route('Tratamiento.index', $id) }} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-warning" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver plan de Tratamiento</button></a>
                 <a <button href={{route('Odontograma.index',$id) }} type="button"  class="btn btn-info" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver Odontograma</button></a>
                 <a <button href={{route('Ficha.ficha',$id) }} type="button"  class="btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 3px 20px;"  >Ingresar Ficha</button></a>
                </div>
              </div>



                  @if($paciente->Odontograma_id==NULL)

                  {!!Form::open(['route'=>'Odontograma.store','method'=>'POST'])!!}
                      {!!form::text('Odontograma_id',$paciente->rut,['id'=>'Odontograma_id','class'=>'form-control hidden'])!!}

                      <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Crear Odontograma</button>

                        <a <button type="button" href={{URL::previous()}} class="btn btn-warning">Volver</button></a>
                      </div>


                    {!!Form::close()!!}

                   @endif
                   @if($paciente->Odontograma_id!=NULL)
                   <div class="btn-group">

                     <a <button type="button" href={{route('Tratamiento.index', $id) }} class="btn btn-warning">Ver Plan de Tratamiento</button></a>
                     <a <button type="button" href={{route('Odontograma.index',$id) }} class="btn btn-info">Ver Odontograma</button></a>
                      <a <button href={{route('Ficha.ficha',$id) }} type="button"  class="btn btn-success">Ingresar Ficha</button> </a>
                     <a <button type="button" href={{URL::previous()}} class="btn btn-warning">Volver</button> </a>
                   </div>
                    @endif








          </div>
        </div>
      </div>
</div>

           </div>
        </div>
      </div>
  </div>




@endsection
