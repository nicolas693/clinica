@extends('layouts.app')
@section('title','Paciente Nuevo')
@section('content')
@include('partials.messages')

<head>


    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Jquery -->

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    {!!Html::style('css/micss.css')!!}

</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Ingresar Paciente</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header">
       <h1>Ingrese datos del paciente </h1>
     </div>
     <div class="col-md-8">

        <div class="panel panel-default"  >
          <div class="panel-heading">
             Formulario nuevo paciente

             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <a <button href={{URL::previous()}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
              </p>

           </div>
          <div class="panel-body">

               {!!Form::open(['route'=>'Paciente.store','method'=>'POST'])!!}


               <div class="col-sm-12">
                  {!!form::label('Rut')!!}
                  {!!form::text('rut',null,['id'=>'rut','class'=>'form-control','placeholder'=>'Ej: 12345789-0'])!!}
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


             <div class="col-sm-6">
               <div class="input-group">
                 <label for="date">Fecha Ingreso</label>
                   <input type="text" class="form-control datepicker" name="Fecha_Ingreso">

               </div>
             </div>

             <div class="col-sm-6">
               <div class="input-group">
                 <label for="date">Fecha Nacimiento</label>
                   <input type="text" class="form-control datepicker2" name="Fecha_Nacimiento">
               </div>
             </div>



             <div class="col-sm-12">
                  {!!form::label('Sexo')!!}
                  {!! Form::select('Genero',$genero,null,['id'=>'Genero','class'=>'form-control']) !!}

             </div>



              <div class="col-sm-6">
                  {!!form::label('Teléfono Fijo')!!}
                  {!!form::text('Telefono_Casa',null,['id'=>'Telefono_Casa','class'=>'form-control'])!!}
             </div>


              <div class="col-sm-6">
                  {!!form::label('Teléfono Movil')!!}
                  {!!form::text('Telefono_Movil',null,['id'=>'Telefono_Movil','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-6">
                 {!!form::label('Email')!!}
                 {!!form::text('email',null,['id'=>'Email','class'=>'form-control'])!!}
            </div>

              <div class="col-sm-6">
                  {!!form::label('Calle')!!}
                  {!!form::text('Calle',null,['id'=>'Calle','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-6">
                  {!!form::label('Número Calle')!!}
                  {!!form::text('Numero_Calle',null,['id'=>'Numero_Calle','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-4">
                  {!!form::label('Pais')!!}
                  {!!form::text('Pais',null,['id'=>'Pais','class'=>'form-control'])!!}
             </div>

              <div class="col-sm-4">
                  {!!form::label('Región')!!}
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
                  {!!form::label('Cobertura Médica')!!}
                  {!!form::text('Cobertura_Medica',null,['id'=>'Cobertura_Medica','class'=>'form-control'])!!}
             </div>

             <div class="col-sm-5">
                {!!form::text('clinica_id',$id,['id'=>'clinica_id','class'=>'form-control hidden'])!!}
             </div>
             {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;'])!!}
          {!!Form::close()!!}
           </div>
        </div>


     </div>
   </div>

   <script>

       $('.datepicker2').datepicker({
           format: "dd/mm/yyyy",
           language: "es",
           startDate: '-100y',
           endDate:   '0d',
           autoclose: true

       });
   </script>

   <script>

       $('.datepicker').datepicker({
           format: "dd/mm/yyyy",
           language: "es",
           startDate: '-1w',
           endDate:   '+1w',
           autoclose: true

       });
   </script>






@endsection
