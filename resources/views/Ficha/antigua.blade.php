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
       <h1>Ficha Paciente </h1>
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
                    {!!form::label('RUT')!!}
                    {!!form::text('RUT',null,['id'=>'rut','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-4">
                  {!!form::label('Fecha de Control')!!}
                  <p style="font-size: 15px"><b><?php echo date("d/m/Y");?></b></p>
                </div>
                <div class="col-sm-8"><p></p></div>
                <div class="col-sm-6 en_linea">
                  {!!form::label('Anamnesis')!!}
                  {!!form::text('Anamnesis',null,['id'=>'Datos_Consulta_Anterior','class'=>'form-control cajatexto'])!!}
                
                  {!!form::label('Motivo_Consulta')!!}
                  {!!form::text('Motivo de Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control cajatexto'])!!}
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
                          {!!form::submit('Agregar',['name'=>'Agregar','id'=>'agregar','content'=>'<span>Agregar</span>'',class'=>'btn btn-default btn-sm m-t-10'])!!}
                          {!!Form::close()!!}
                      </div>                  
                
                <div class="col-sm-12">
                    {!!form::label('Antecedentes Médicos //viene de vista anterior')!!}
                    {!!form::text('Antecedentes Médicos',null,['id'=>'Antecedentes_Medicos','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-12">
                    {!!form::label('Fármacos en uso//viene de vista anterior')!!}
                    {!!form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-12">
                    {!!form::label('Hábitos //viene de vista anterior')!!}
                    {!!form::text('Hábitos',null,['id'=>'Habitos','class'=>'form-control'])!!}
                </div>
                <div class="col-sm-12">
                    {!!form::label('Antecedentes de traumatismos Dentoalveolar//vista anterior')!!}
                    {!!form::text('Antecedentes traumatismos Dentoalveolar',null,['id'=>'Antecedentes de traumatismos Dentoalveolar','class'=>'form-control'])!!}
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
           $('.datepicker').datepicker({
               format: "dd/mm/yyyy",
               language: "es",
               startDate: '-100y',
               endDate:   '0d',
               autoclose: true
       });
   </script>



@endsection
