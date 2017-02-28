<?php $__env->startSection('title','Evaluación de Alumnos'); ?>
<?php $__env->startSection('content'); ?>

  <head>
  <?php echo Html::style('css/micss.css'); ?>

  </head>

  <div class="row fondoC centro">

    <div class="page-header "  >
      <h1>Evaluar Alumnos<small></small></h1>
    </div>

    <div class="col-md-10">
       <div class="panel panel-primary " style=" margin-right:10%;" >
         <div class="panel-heading">
           Evaluar alumno
       </div>

              <div class="panel-body" >
                <?php echo Form::open(); ?>

                <div class="form-group col-sm-6">
                  <?php echo form::label('Rut : '); ?>

                  
               </div>

               <?php echo Form::close(); ?>


              </div>
        </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>