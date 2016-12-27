@extends('layouts.app')

@section('title','Paciente Nuevo')

@section('content')

@include('partials.messages')

<ol class="breadcrumb">

     <li><a href="{{url('Paciente')}}"> Pacientes</a></li>
     <li class="active">Ingresar Nueva Clinica</li>
   </ol>


   <div class="page-header">
     <h1>Clinica Nueva </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nueva Clinica
           </div>
          <div class="panel-body">

               {!!Form::open(['route'=>'Clinica.store','method'=>'POST'])!!}


               <div class="col-sm-12">
                  {!!form::label('Codigo')!!}
                  {!!form::text('id_Clinica',null,['id'=>'rut','class'=>'form-control'])!!}
             </div>

              <div class="col-sm-4">
                  {!!form::label('Nombre')!!}
                  {!!form::text('Nombre_Clinica',null,['id'=>'Nombre','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Direccion')!!}
                  {!!form::text('Direccion_Clinica',null,['id'=>'Paterno','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Telefono')!!}
                  {!!form::text('Telefono_Clinica',null,['id'=>'Materno','class'=>'form-control'])!!}
             </div>

                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;'])!!}
              {!!Form::close()!!}
           </div>
        </div>


     </div>
   </div>






@endsection
