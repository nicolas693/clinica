  
  <?php $__env->startSection('title','Sin permisos'); ?>
  <?php $__env->startSection('content'); ?>






     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="panel panel-default">

                        <h1 align="center">No tiene permisos para ingresar a esta ruta</h1>


                     <div class="panel-body ">

                       <div class="text-center">
                           <img src="<?php echo e(asset('/images/acceso-restringido.png')); ?>" />
                       </div>
                       <div class="text-center">
                           <a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span>   Volver</a>
                       </div>
                     </div>
             </div>
         </div>
     </div>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>