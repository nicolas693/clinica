@extends('layouts.app')
@section('title','Ficha de Paciente Nuevo')
@section('content')
@include('partials.messages')

<html lang="es">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  {!!Html::style('css/micss.css')!!}
  <meta charset="utf-8" />
  <title>Fechas</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
  <script>
   $.datepicker.regional['es'] = {
   closeText: 'Cerrar',
   prevText: '< Ant',
   nextText: 'Sig >',
   currentText: 'Hoy',
   monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
   monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
   dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
   dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
   weekHeader: 'Sm',
   dateFormat: 'dd/mm/yy',
   firstDay: 1,
   isRTL: false,
   showMonthAfterYear: false,
   yearSuffix: ''
   };
   $.datepicker.setDefaults($.datepicker.regional['es']);
  $(function () {
  $("#fecha").datepicker();
  });
  </script>
</head>
</html>


   <div class="page-header">
     <h1>Ficha Paciente Nuevo </h1>
   </div>

   <div class="row">
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><b>
             Ficha del Nuevo Paciente</b>
           </div>
          <div class="panel-body">

               {!!Form::open(['route'=>'Paciente.store','method'=>'POST'])!!}

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
               <div class="col-sm-8">
                    {!!form::label('Motivo_Consulta')!!}
                    {!!form::text('Motivo de Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control'])!!}
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
                   <div class="input-group date" data-provide="datepicker">
                     <label for="date"><b>Indique cuando lo recibió: &nbsp</b></label>
                      <input type="text" id="fecha" name="Tratamiento_Ortodoncia">
                    </div>
                  </div>
                </div>

                <div>
                {!!form::submit('Volver',['name'=>'Siguiente','id'=>'volver','content'=>'<span>Volver</span>','class'=>'btn btn-primary btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;'])!!}
                {!!Form::close()!!}

                {!!form::submit('Siguiente',['name'=>'Siguiente','id'=>'siguiente','content'=>'<span>Siguiente</span>','class'=>'btn btn-success btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;'])!!}
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
