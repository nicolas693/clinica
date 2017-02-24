<?php $__env->startSection('title','Planificación de Tratamiento'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>


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

  <ol class="breadcrumb fondoC1 ">
       <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
       <li><a href="<?php echo e(url('Ficha', $id)); ?>">Ficha</a></li>
       <li><a href="<?php echo e(url('Tratamiento', $id)); ?>">Ver Plan de Tratamiento</a></li>
       <li class="active">Registro</li>
     </ol>


  <div class="row fondoC centro">
    <div class="page-header" style="margin-right:250px;">
      <h1>Planificación de Tratamiento </h1>
    </div>
    <div class="col-md-8">
       <div class="panel panel-primary">
         <div class="panel-heading"><b>Nueva planificación de Tratamiento</b>
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href=<?php echo e(route('Tratamiento.index', $id)); ?> type="button" id='volver'  name='volver' class="btn  navbar-btn btn-warning" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
             </p>
          </div>
         <div class="panel-body">

              <?php echo Form::open(['route'=>'Tratamiento.store','method'=>'POST']); ?>




               <div class="col-sm-4">
                 <div class="input-group">
                   <label for="date">Fecha</label>
                     <input type="text" class="form-control datepicker" name="Fecha">
                 </div>
              </div>

              <div class="col-sm-4">
                   <?php echo form::label('Diente'); ?>

                   <?php echo Form::hidden('paciente_id',$paciente->rut); ?>

                   <?php echo form::text('Diente',null,['id'=>'Diente','class'=>'form-control']); ?>

              </div>

              <div class="col-sm-4">
                   <?php echo form::label('Costo'); ?>

                   <?php echo Form::hidden('ficha_id',$ficha->id_Ficha); ?>

                   <?php echo form::text('Costo',null,['id'=>'Costo','class'=>'form-control']); ?>

              </div>

              <div class="col-sm-8">
                   <?php echo form::label('Profesor guía'); ?>

                   <?php echo form::text('nProfe',null,['id'=>'nProfe','class'=>'form-control']); ?>

              </div>

              <div class="col-sm-12">
                   <?php echo form::label('Acción a Realizar'); ?>

                   <?php echo form::text('AccionR',null,['id'=>'AccionR','class'=>'form-control']); ?>

              </div>

              <div class="col-sm-12">
                    <div class="btn-group">
                    <?php echo form::submit('Guardar',['name'=>'Guardar','id'=>'guardar','content'=>'<span>Guardar</span>','class'=>'btn btn-success btn-sm m-t-10', 'style'=>'margin-top: 26px; margin-left: 0px;']); ?>

                    <?php echo Form::close(); ?>

                  </div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>