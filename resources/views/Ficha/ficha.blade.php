@extends('layouts.app')
@section('title','Ficha de Paciente')
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
  <script type="text/javascript">
    function SetDate()
    {
      var date = new Date();
      var dia = date.getDia();
      var mes = date.getMes() + 1;
      var año = date.getAño();
      if (mes < 10) mes = "0" + mes;
      if (dia < 10) dia = "0" + dia;
      var hoy = dia + "-" + mes + "-" + año;
      document.getElementById('theDate').value = hoy;
    }

  </script>
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
  <body>
    <style type="text/css">
      .boton{
        margin-left: 300px;
        cursor: pointer;
        display: inline-block;
      }
      .en_linea{
        display: inline-block;
      }
      .cajatexto{
        width: 580px;
        height: 100px;
      }
    </style>
  </body>
</head>
</html>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Pacientes</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header">
       <h1>Ficha Clinica Integral Adulto </h1>
     </div>
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><b>
             Ficha Paciente @ID_Ficha</b>
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
                  <div class="input-group">
                    <label for="date"><b>Fecha de Nacimiento: &nbsp</b></label>
                      <input type="text" class="form-control datepicker" id="fecha" name="Fecha_Nacimiento">
                    </div>
                  </div>
                <div class="col-sm-4">
                  {!!form::label('Edad')!!}
                  <p style="font-size: 15px"><b><?php echo "//calculo edad";?></b></p>
                </div>
                <div class="col-sm-4">
                  {!!form::label('Fecha de Control')!!}
                  <p style="font-size: 15px"><b><?php echo date("d/m/Y");?></b></p>
                </div>
                <div class="col-sm-12">
                </div>
                <div class="col-sm-4">
                  {!!form::label('Telefono')!!}
                  {!!form::text('Telefono',null,['id'=>'Telefono','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-8">
                  {!!form::label('Ocupación')!!}
                  {!!form::text('Ocupacion',null,['id'=>'Ocupacion','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-8">
                  {!!form::label('Calle')!!}
                  {!!form::text('Calle',null,['id'=>'Calle','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-4">
                  {!!form::label('Numero_Calle')!!}
                  {!!form::text('Numero_Calle',null,['id'=>'Numero_Calle','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-12">
                  {!!form::label('Motivo_Consulta')!!}
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
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c1">Enf. Cardiovasculares</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c2">Enf. Gastrointestinales</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c3">Enf. Respiratorias</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c4">Enf. Neurológicas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c5">Enf. Infectocontagiosas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c6">Discrasias Sanguíneas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c7">Diabetes</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c8">Alergias</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c9">Embarazo</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c10">Otra</p>
                       </div>
                       <div class="col-sm-12">
                           {!!form::label('Fármacos en uso')!!}
                           {!!form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control'])!!}
                       </div>
                       <div class="col-sm-8">
                           {!!form::label('alumno_id //aun no se traerlo de la vista anterior')!!}
                           {!!form::text('alumno_id',null,['id'=>'alumno_id','class'=>'form-control'])!!}
                       </div>
                       <div class="col-sm-4">
                           {!!form::label('id profesor tutor')!!}
                           {!!form::text('id',null,['id'=>'id','class'=>'form-control'])!!}
                       </div>
                       <div class="col-sm-12 checkbox">
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
                            <label for="date"><b>Fecha de último control: &nbsp</b></label>
                              <input type="text" class="form-control datepicker" id="fecha" name="Fecha_Nacimiento">
                            </div>
                          </div>
                        <div class="col-sm-8">
                          {!!form::label('Motivo_Ultima_Consulta')!!}
                          {!!form::text('Motivo_Ultima_Consulta',null,['id'=>'Motivo_Ultima_Consulta','class'=>'form-control'])!!}
                        </div>
                        <div class="col-sm-8 radio">
                          <p><b>Antecedentes Traumatismo Dentoalveolar</b></p>
                          <p class="col-sm-8"> <input type="radio" name="radio1" id="r1" value="Nothing">No ha recibido tratamiento de ortodoncia</p>
                          <p class="col-sm-8"> <input type="radio" name="radio1" id="r2" value="Show">Si ha recibido tratamiento de ortodoncia</p>
                          <div class="text2 black">
                            <div class="col-sm-4">
                                {!!form::label('Diente')!!}
                                {!!form::text('Diente',null,['Diente'=>'id','class'=>'form-control'])!!}
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
                            <p><b>¿Le han aplicado Anestesia Dental?</b></p>
                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r3" value="Nothing">No</p>
                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r4" value="Show">Si</p>
                            </div>
                            <div class="col-sm-6 radio3">
                              <p><b>¿Ha tenido complicaciones al respecto?</b></p>
                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r5" value="Nothing">No</p>
                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r6" value="Show">Si</p>
                              <div class="text3">
                                <div class="col-sm-12">
                                    {!!form::label('Especifique')!!}
                                    {!!form::text('Detalle',null,['Detalle'=>'id','class'=>'form-control'])!!}
                                </div>
                               </div>
                             </div>

                        <div class="col-sm-12 form-group">
                        <p><b>Procedimientos</b></p>
                         <form action="../php/select-action.php" method="post">
                              <select name="Procedimientos">
                                <option>Procedimientos a realizar</option>
                                <?php
                                $Procedimientos = array(
                                  "Apicectomía",
                                  "Blanqueamiento dental",
                                  "Empaste",
                                  "Endodoncia",
                                  "Exodoncia",
                                  "Explorador Dental",
                                  "Gingivectomía",
                                  "Gingivoplastía",
                                  "Higiene Bucodental",
                                  "Implante Dental",
                                  "Limpieza Dental",
                                  "Ostectomía",
                                  "Remineralización dental",
                                  "Sitio/Estado",
                                  "Tartrectomía",
                                  "Técnica de elevación del colgajo",
                                  "Técnica de elevación del seno maxilar",
                                  "Técnica de regeneración ósea guiada",
                                  "Terapia de fluoruro");
                                foreach ($Procedimientos as $pro)
                                {
                                  ?>
                                  <option value="<?php echo strtolower($pro);?>"><?php echo $pro; ?></option>
                                  <?php
                                }
                                ?>
                                <div class="boton">
                                  {!!form::submit('Agregar',['name'=>'Agregar','id'=>'agregar','content'=>'<span>Agregar</span>','class'=>'btn btn-default btn-sm m-t-10'])!!}
                                  {!!Form::close()!!}
                                </div>
                          </form>
                  <div class="col-sm-12 form-group">
                    <p><b>Insumos necesarios</b></p>
                      <form action="../php/select-action.php" method="post">
                        <select name="Insumos">
                        <option>Insumos</option>
                        <?php
                        $Insumos = array(
                          "Alginmax",
                          "Alginkid",
                          "Alginplus Tropical",
                          "Servilletas Dentales",
                          "Eyector de saliva",
                          "Manga de esterilización",
                          "Tórula de algodón");
                        foreach ($Insumos as $in)
                        {
                          ?>
                          <option value="<?php echo strtolower($in);?>"><?php echo $in; ?></option>
                          <?php
                        }
                        ?>
                        <div class="boton">
                            {!!form::submit('Agregar',['name'=>'Agregar','id'=>'agregar','content'=>'<span>Agregar</span>','class'=>'btn btn-default btn-sm m-t-10'])!!}
                            {!!Form::close()!!}
                        </div>
                  <div class="col-sm-12 boton"><br>
                    {!!form::submit('Volver',['name'=>'Siguiente','id'=>'volver','content'=>'<span>Volver</span>','class'=>'btn btn-primary btn-sm m-t-10'])!!}
                    {!!Form::close()!!}

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
                startDate: '-100y',
                endDate:   '+1d',
                autoclose: true
        });
    </script>



@endsection
