@extends('layouts.app')
@section('title','Ficha de Paciente Nuevo')
@section('content')
@include('partials.messages')

<html lang="es">
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


</html>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Pacientes</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header">
       <h1>Ficha Paciente Nuevo </h1>
     </div>
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><b>
             Ficha del Nuevo Paciente</b>
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <a <button href={{URL::previous()}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
              </p>
           </div>
          <div class="panel-body">

               {!!Form::open(['route'=>'Paciente.store','method'=>'POST'])!!}
                <!--
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
               <div class="col-sm-4">
                    {!!form::label('RUT')!!}
                    {!!form::text('RUT',null,['id'=>'rut','class'=>'form-control'])!!}
               </div>
             -->
             <div class="form-group">
               {!!form::label('Nombre : ')!!}
                {!!$paciente->Nombre !!} {!!$paciente->Paterno !!} {!!$paciente->Materno !!}
            </div>

               <div class="col-sm-4">
                    {!!form::label('Ficha Número')!!}
                    {!!form::text('Ficha Número',null,['id'=>'id_Ficha','class'=>'form-control'])!!}
               </div>
               <div class="col-sm-12">
                    {!!form::label('Antecedentes Médicos')!!}
                    {!!form::text('Antecedentes Médicos',null,['id'=>'Antecedentes_Medicos','class'=>'form-control'])!!}
               </div>
               <div class="col-sm-12">
                    {!!form::label('Fármacos en uso')!!}
                    {!!form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control'])!!}
               </div>
               <div class="col-sm-12">
                    {!!form::label('Hábitos')!!}
                    {!!form::text('Hábitos',null,['id'=>'Habitos','class'=>'form-control'])!!}
               </div>
               <div class="col-sm-12">
                    {!!form::label('Antecedentes de traumatismos Dentoalveolar')!!}
                    {!!form::text('Antecedentes traumatismos Dentoalveolar',null,['id'=>'Antecedentes de traumatismos Dentoalveolar','class'=>'form-control'])!!}
               </div>
               <div class="col-sm-12 radio">
                 <p><b>Tratamiento de Ortodoncia</b></p>
                 <p class="col-sm-12"> <input type="radio" name="radio1" id="r1" value="Nothing">No ha recibido tratamiento de ortodoncia</p>
                 <p class="col-sm-12"> <input type="radio" name="radio1" id="r2" value="Show">Si ha recibido tratamiento de ortodoncia</p>
                 <div class="text2">
                   <div class="input-group">
                     <label for="date"><b>Indique cuando lo recibió: </b></label>

                      <input type="text" class="form-control datepicker" name="Fecha">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                      {!!form::submit('Siguiente',['name'=>'Siguiente','id'=>'siguiente','content'=>'<span>Siguiente</span>','class'=>'btn btn-success btn-sm m-t-10'])!!}
                      {!!Form::close()!!}

                </div>
           </div>
        </div>
     </div>
   </div>

  <script>
            $(document).ready(function () {
            $(".text1").hide();
            $(".text2").hide();
            $("#r1").click(function () {
                $(".text1").show();
                  $(".text2").hide();
            });
            $("#r2").click(function () {
                $(".text2").show();
                  $(".text1").hide();
            });
        });
  </script>

  <script>
  $('.datepicker').datepicker({
      format: "dd/mm/yyyy",
      language: "es",
      startDate: '-100y',
      endDate:   '0d',
      autoclose: true

  });
   </script>



@endsection
