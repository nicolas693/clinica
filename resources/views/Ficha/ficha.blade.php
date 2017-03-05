@extends('layouts.app')
@section('title','Ficha de Paciente')
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
     <li><a href="{{url('Ficha',$id)}}"> Ver Ficha</a></li>
     <li class="active">Ingresar Ficha</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header">
       <h1>Ficha Clinica Integral Adulto </h1>
     </div>
     <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading"><b>
             Ficha Paciente </b>
           </div>
          <div class="panel-body">
                {!!Form::open(['route'=>['Ficha.store'],'method'=>'POST'])!!}

                <div class="col-sm-6">
                    {!!form::label('Nombre :')!!}
                     {!!$paciente->Nombre !!} {!!$paciente->Paterno !!} {!!$paciente->Materno !!}
                     {{Form::hidden('paciente_id',$paciente->rut)}}
                </div>

              <div class="col-sm-6">
                {!!form::label('Rut : ')!!}
                {!!$paciente->rut!!}
              </div>

                <div class="col-sm-6">
                    {!!form::label('FechaNacimiento','Fecha de nacimiento : ')!!}
                     {!!$paciente->Fecha_Nacimiento !!}
                     {{Form::hidden('Fecha_Nacimiento',$paciente->Fecha_Nacimiento)}}
                </div>

                <div class="col-sm-6">
                  {!!form::label('TelefonoMovil','Teléfono Movil : ')!!}
                  {!!$paciente->Telefono_Movil !!}
                  {{Form::hidden('Telefono_Movil',$paciente->Telefono_Movil)}}
                </div>

                <div class="col-sm-6">
                  {!!form::label('Dirección : ')!!}
                  {!!$paciente->Calle !!} {!!$paciente->Numero_Calle !!}
                  {{Form::hidden('Calle',$paciente->Calle)}}
                  {{Form::hidden('Numero_Calle',$paciente->Numero_Calle)}}

                </div>


                <div class="col-sm-12">
                  {!!form::label('Edad : ')!!} {{$edad}}

                </div>
                <div class="col-sm-4">
                  {!!form::label('FechaControl','Fecha de Control')!!} <p style="font-size: 15px"><b><?php echo date("d/m/Y");?></b></p>
                </div>


                <div class="col-sm-10" style="margin-top:10px; margin-left:0px;">
                  {!!form::label('Ocupación')!!}
                  {!!form::text('Ocupacion',null,['id'=>'Ocupacion','class'=>'form-control'])!!}
                </div>

                <div class="col-sm-12">
                  {!!form::label('MotivoConsulta','Motivo de Consulta')!!}
                  {!!form::text('Motivo_Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control'])!!}
                </div>

                <div class="col-sm-12">
                  {!!form::label('Expectativas')!!}
                  {!!form::text('Expectativas',null,['id'=>'Expectativas','class'=>'form-control'])!!}
                </div>

              </div>
                   <div class="panel-heading"><b>
                      1.Anamnesis General</b>
                    </div>
                   <div class="panel-body">
                    <div>

                      <div class="col-sm-12 radio">
                        <p><b>Antecedentes Médicos</b></p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="EnfCardiovasculares" value="true">Enf. Cardiovasculares</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="EnfGastrointestinales">Enf. Gastrointestinales</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="EnfRespiratorias">Enf. Respiratorias</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="EnfNeurologicas">Enf. Neurológicas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="EnfIntectocontagiosas">Enf. Infectocontagiosas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="DiscrasiaSanguinea">Discrasias Sanguíneas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="Diabetes">Diabetes</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="Alergias">Alergias</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="Embarazo">Embarazo</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="OtraEnf">Otra</p>
                       </div>

                       <div class="col-sm-12" style="margin-bottom:20px;">
                           <p><b>Fármacos en uso</b></p>
                           {!!form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control'])!!}
                       </div>

                       <div class="col-sm-6">
                           {!!form::label('Alumno : ')!!} {{$alumno->Nombre}} {{$alumno->Paterno}}
                           {{Form::hidden('alumno_id',$alumno->alumno_id)}}
                       </div>

                       <div class="col-sm-6">
                           {!!form::label('Profesor tutor :   ')!!} {{$docente->Nombre}} {{$docente->Paterno}}
                           {{Form::hidden('docente_id',$docente->id)}}
                       </div>

                       <div class="col-sm-12 checkbox" style="margin-top:10px;">
                         <p><b>Hábitos</b></p>
                         <p class="col-sm-2"> <input type="checkbox" name="chk2" id="c11">Fuma</p>
                         <p class="col-sm-2"> <input type="checkbox" name="chk2" id="c12">Alcohol</p>
                         <p class="col-sm-2"> <input type="checkbox" name="chk2" id="c13">Drogas</p>
                      </div>

                    </div>
                  </div>

                      <div class="panel-heading"><b>
                         2.Anamnesis Odontológica</b>
                       </div>
                      <div class="panel-body">
                        <div class="col-sm-4">
                          <div class="input-group">
                            <label for="date"><b>Fecha de último control </b></label>
                              <input type="text" class="form-control datepicker" id="Fecha_Ultima_Consulta" name="Fecha_Ultima_Consulta">
                            </div>
                          </div>

                        <div class="col-sm-8">
                          {!!form::label('Motivo Ultima Consulta')!!}
                          {!!form::text('Motivo_Ultima_Consulta',null,['id'=>'Motivo_Ultima_Consulta','class'=>'form-control'])!!}
                        </div>

                        <div class="col-sm-8" style="margin-top:10px;">
                          {!!Form::label('Traumatismo','Antecedentes de Traumatismo Dentoalveolar')!!}
                          <p class="col-sm-8"> <input type="radio" name="radio1" id="r1" value="Nothing">No ha recibido tratamiento de ortodoncia</p>
                          <p class="col-sm-8"> <input type="radio" name="radio1" id="r2" value="Show">Si ha recibido tratamiento de ortodoncia</p>
                          <div class="text2 black" >
                            <div class="col-sm-4" style="margin-top:60px; margin-left:0px;">
                            {!!form::label('DienteTrau','Indique en que Diente: ')!!}
                            {!!form::text('DienteTraumatismo',null,['Diente'=>'id','class'=>'form-control'])!!}
                            </div>
                            <div class="col-sm-4">
                              <div class="input-group">
                                <label for="date"><b>Fecha de traumatismo </b></label>
                                  <input type="text" class="form-control datepicker2" id="Fecha_Traumatismo" name="Fecha_Traumatismo">
                                </div>
                            </div>
                           </div>
                         </div>

                         <div class="col-sm-12 checkbox">
                           <p><b>Elementos de Higiene</b></p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c14">Cepillo</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c15">Seda Dental</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c16">Dentrífico</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c17">Colutorio</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c18">Otros</p>
                          </div>

                          <div class="col-sm-6 radio2">
                            {!!Form::label('Anestesia','¿Le han aplicado Anestesia Dental?')!!}
                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r3" value="Nothing">No</p>
                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r4" value="Show">Si</p>
                            </div>
                            <div class="col-sm-6 radio3">
                              {!!Form::label('Complicaciones','¿Ha tenido complicaciones al respecto?')!!}
                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r5" value="Nothing">No</p>
                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r6" value="Show">Si</p>
                              <div class="text3">
                                <div class="col-sm-12" style="margin-right:50px;">
                                    {!!form::label('Especifique','Especifique')!!}
                                    {!!form::text('Complicacion',null,['id'=>'Complicacion','class'=>'form-control'])!!}
                                </div>
                               </div>
                             </div>

                        <div class="col-sm-8 form-group">
                            <p><b>Procedimientos a realizar</b></p>
                              {!!Form::select('Procedimiento',$procedimientos,null,
                                ['id'=>'Nombre', 'class'=>'form-control']) !!}
                        </div>

                  <div class="col-sm-8 form-group">
                    <p><b>Insumos necesarios</b></p>
                      {!!Form::select('Insumos',$insumos,null,
                        ['id'=>'insumos','class'=>'form-control']) !!}
                  </div>

           <div class="col-sm-10 form-group">
             {!!form::label('Indique Alerta Médica')!!}
             {!!form::text('Alerta_Medica',null,['id'=>'Alerta_Medica','class'=>'form-control'])!!}
           </div>

           <div class="col-sm-12">
             {!!Form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success ']) !!}
             <a <button type="button" href={{route('Ficha.index',$id)}} class="btn btn-primary">Volver</button> </a>
             {!!Form::close()!!}
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
            $(document).ready(function () {
            $(".radio3").hide();
            $("#r3").click(function () {
                $(".text1").show();
                  $(".radio3").hide();
            });
            $("#r4").click(function () {
                $(".radio3").show();
                  $(".text1").hide();
            });

        });
  </script>
  <script>
            $(document).ready(function () {
            $(".text3").hide();
            $("#r5").click(function () {
                $(".text1").show();
                  $(".text3").hide();
            });
            $("#r6").click(function () {
                $(".text3").show();
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
   <script>
            $('.datepicker2').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                startDate: '-50y',
                endDate:   '0',
                autoclose: true
        });
    </script>



@endsection
