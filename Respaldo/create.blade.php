@extends('layouts.app')

@section('title','Planificación de Tratamiento')
@section('content')

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

  <div class="page-header "  >
    <h1>Planificación de Tratamiento<small></small></h1>
  </div>

<div class="row fondoC centro">
  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Tratamiento
            <p class="navbar-text navbar-right" style=" margin-top: 1px;"> </p>
          </div>
          <div class="panel-body">
            {!!Form::open(['route'=>'Tratamiento.store','method'=>'POST'])!!}

            <div class="col-sm-6">
              <div class="input-group">
                <label for="date">Fecha </label>
                  <input type="text" class="form-control datepicker" name="Fecha">
              </div>
            </div>

            <div class="col-sm-4">
                {!!form::label('Acción realizada')!!}
                {!!form::text('AccionR',null,['id'=>'AccionR','class'=>'form-control'])!!}
           </div>

           <div class="col-sm-4">
               {!!form::label('Acción realizada')!!}
               {!!form::text('AccionR',null,['id'=>'AccionR','class'=>'form-control'])!!}
          </div>

          <div class="col-sm-4">
              {!!form::label('Acción realizada')!!}
              {!!form::text('AccionR',null,['id'=>'AccionR','class'=>'form-control'])!!}
         </div>

            {!!Form::close()!!}
          </div>
        </div>
      </div>
    </div>
  </div>

    <script>

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            startDate: '-2y',
            endDate:   '0d',
            autoclose: true

        });
    </script>

@endsection
