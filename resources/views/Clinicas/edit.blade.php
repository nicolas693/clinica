@extends('layouts.app')

@section('title','Paciente Nuevo')

@section('content')

<ol class="breadcrumb">

     <li><a href="{{url('Paciente')}}"> Pacientes</a></li>
     <li class="active">Editar Clinicas Clinica</li>
   </ol>


   <div class="page-header">
     <h1>Clinica Nueva </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Codigo Clinica : <?= $cli->id_Clinica ?>
           </div>
          <div class="panel-body">

               {!!Form::model($cli,['route'=>['Clinica.update',$cli->id_Clinica],'method'=>'PUT'])!!}




              <div class="col-sm-4">
                  {!!form::label('Nombre')!!}
                  {!!form::text('Nombre_Clinica',null,['id'=>'Nombre_Clinica','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Direccion')!!}
                  {!!form::text('Direccion_Clinica',null,['id'=>'Direccion_Clinica','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Telefono')!!}
                  {!!form::text('Telefono_Clinica',null,['id'=>'Telefono_Clinica','class'=>'form-control'])!!}
             </div>

                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 30px;'])!!}
              {!!Form::close()!!}
           </div>
        </div>


     </div>
   </div>






@endsection
