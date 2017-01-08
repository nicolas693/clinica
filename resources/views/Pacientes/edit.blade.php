@extends('layouts.app')

@section('title','Editar Paciente')

@section('content')

@include('partials.messages')




   <div class="page-header">
     <h1>Editar datos paciente </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
            Editar Datos Paciente
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href={{URL::previous()}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>


             </p>

           </div>
          <div class="panel-body">

               {!!Form::model($pa,['route'=>['Paciente.update',$pa->rut],'method'=>'PUT'])!!}


               <div class="col-sm-12">
                   {!!form::label('Rut')!!}
                   {!!form::text('rut',null,['id'=>'rut','class'=>'form-control'])!!}
              </div>




              <div class="col-sm-4">
                  {!!form::label('Nombre')!!}
                  {!!form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Apellido Paterno')!!}
                  {!!form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Apellido Materno')!!}
                  {!!form::text('Materno',null,['id'=>'Materno','class'=>'form-control'])!!}
             </div>

              <div class="col-sm-12">
                  {!!form::label('Fecha Ingreso')!!}
                  {!!form::text('Fecha_Ingreso',null,['id'=>'Fecha_Ingreso','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-12">
                  {!!form::label('Genero')!!}
                  {!!form::text('Genero',null,['id'=>'Genero','class'=>'form-control'])!!}
             </div>


              <div class="col-sm-12">
                  {!!form::label('Fecha Nacimiento')!!}
                  {!!form::text('Fecha_Nacimiento',null,['id'=>'Fecha_Nacimiento','class'=>'form-control'])!!}
             </div>




              <div class="col-sm-4">
                  {!!form::label('Telefono Fijo')!!}
                  {!!form::text('Telefono_Casa',null,['id'=>'Telefono_Casa','class'=>'form-control'])!!}
             </div>


              <div class="col-sm-4">
                  {!!form::label('Telefono Movil')!!}
                  {!!form::text('Telefono_Movil',null,['id'=>'Telefono_Movil','class'=>'form-control'])!!}
             </div>


              <div class="col-sm-4">
                  {!!form::label('Telefono Oficina')!!}
                  {!!form::text('Telefono_Oficina',null,['id'=>'Telefono_Oficina','class'=>'form-control'])!!}
             </div>

              <div class="col-sm-6">
                  {!!form::label('Calle')!!}
                  {!!form::text('Calle',null,['id'=>'Calle','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-6">
                  {!!form::label('Numero Calle')!!}
                  {!!form::text('Numero_Calle',null,['id'=>'Numero_Calle','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Pais')!!}
                  {!!form::text('Pais',null,['id'=>'Pais','class'=>'form-control'])!!}
             </div>

              <div class="col-sm-4">
                  {!!form::label('Region')!!}
                  {!!form::text('Region',null,['id'=>'Region','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Comuna')!!}
                  {!!form::text('Comuna',null,['id'=>'Comuna','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-12">
                  {!!form::label('Nacionalidad')!!}
                  {!!form::text('Nacionalidad',null,['id'=>'Nacionalidad','class'=>'form-control'])!!}
             </div>




              <div class="col-sm-12">
                  {!!form::label('Cobertura Medica')!!}
                  {!!form::text('Cobertura_Medica',null,['id'=>'Cobertura_Medica','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-12">
                 {!!form::label('Alumno ')!!}
                 {!!form::text('alumno_id',null,['id'=>'alumno_id','class'=>'form-control'])!!}
            </div>


             <div class="col-sm-5">

                {!!form::label('Clinica')!!}

                {!! Form::select('clinica_id',$clinica,null,['id'=>'clinica_id','class'=>'form-control']) !!}



             </div>
                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;'])!!}
              {!!Form::close()!!}
           </div>
        </div>


     </div>
   </div>



@endsection
