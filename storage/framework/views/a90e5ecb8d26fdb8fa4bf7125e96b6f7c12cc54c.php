<?php $__env->startSection('title','Ficha de Paciente Nuevo'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
  <link rel="stylesheet" href="<?php echo e(asset('datePicker/css/bootstrap-datepicker3.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('datePicker/css/bootstrap-standalone.css')); ?>">
  <script src="<?php echo e(asset('datePicker/js/bootstrap-datepicker.js')); ?>"></script>
  <!-- Languaje -->
  <script src="<?php echo e(asset('datePicker/locales/bootstrap-datepicker.es.min.js')); ?>"></script>
  <?php echo Html::style('css/micss.css'); ?>

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
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <a <button href=<?php echo e(URL::previous()); ?> type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
              </p>
           </div>
          <div class="panel-body">

               <?php echo Form::open(['route'=>'Paciente.store','method'=>'POST']); ?>

                <!--
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
             -->
             <div class="form-group">
               <?php echo form::label('Nombre : '); ?>

                <?php echo $paciente->Nombre; ?> <?php echo $paciente->Paterno; ?> <?php echo $paciente->Materno; ?>

            </div>

               <div class="col-sm-4">
                    <?php echo form::label('Ficha Número'); ?>

                    <?php echo form::text('Ficha Número',null,['id'=>'id_Ficha','class'=>'form-control']); ?>

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
                   <div class="input-group">
                     <label for="date"><b>Indique cuando lo recibió: </b></label>

                      <input type="text" class="form-control datepicker" name="Fecha">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                      <?php echo form::submit('Siguiente',['name'=>'Siguiente','id'=>'siguiente','content'=>'<span>Siguiente</span>','class'=>'btn btn-success btn-sm m-t-10']); ?>

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