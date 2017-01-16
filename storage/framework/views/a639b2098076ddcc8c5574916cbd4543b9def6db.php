<?php $__env->startSection('title','Ficha de Paciente Nuevo'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<html lang="es">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php echo Html::style('css/micss.css'); ?>

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

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
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
           </div>
          <div class="panel-body">

               <?php echo Form::open(['route'=>'Paciente.store','method'=>'POST']); ?>


                <div class="col-sm-4">
                    <?php echo form::label('Nombre'); ?>

                    <?php echo form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-4">
                    <?php echo form::label('Apellido Paterno'); ?>

                    <?php echo form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control']); ?>

               </div>

               <div class="col-sm-4">
                    <?php echo form::label('Apellido Materno'); ?>

                    <?php echo form::text('Materno',null,['id'=>'Materno','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-4">
                    <?php echo form::label('RUT'); ?>

                    <?php echo form::text('RUT',null,['id'=>'rut','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-8">
                    <?php echo form::label('Motivo_Consulta'); ?>

                    <?php echo form::text('Motivo de Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Antecedentes Médicos'); ?>

                    <?php echo form::text('Antecedentes Médicos',null,['id'=>'Antecedentes_Medicos','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Fármacos en uso'); ?>

                    <?php echo form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Hábitos'); ?>

                    <?php echo form::text('Hábitos',null,['id'=>'Habitos','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Antecedentes de traumatismos Dentoalveolar'); ?>

                    <?php echo form::text('Antecedentes traumatismos Dentoalveolar',null,['id'=>'Antecedentes de traumatismos Dentoalveolar','class'=>'form-control']); ?>

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
                <?php echo form::submit('Volver',['name'=>'Siguiente','id'=>'volver','content'=>'<span>Volver</span>','class'=>'btn btn-primary btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

                <?php echo Form::close(); ?>


                <?php echo form::submit('Siguiente',['name'=>'Siguiente','id'=>'siguiente','content'=>'<span>Siguiente</span>','class'=>'btn btn-success btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

                <?php echo Form::close(); ?>

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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>