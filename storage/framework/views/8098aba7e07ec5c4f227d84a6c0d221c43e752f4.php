<?php $__env->startSection('title','Ficha del Paciente'); ?>
<?php $__env->startSection('content'); ?>

<head>
    <?php echo Html::style('css/micss.css'); ?>

</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
     <li class="active">Ficha Paciente</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header "  >
      <h1>Ficha del Paciente<small></small></h1>
    </div>
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Datos personales
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">

              <a <button href=<?php echo e(URL::previous()); ?> type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
              <a <button href=<?php echo e(route('Tratamiento.index')); ?> type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-warning" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver plan de Tratamiento</button></a>

             </p>
          </div>

          <div class="panel-body">
            <?php echo Form::open(); ?>


            <div class="form-group">
             
            </div>

            <?php echo Form::close(); ?>

           </div>
         </div>
    </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>