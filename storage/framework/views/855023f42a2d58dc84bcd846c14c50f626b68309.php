  
  <?php $__env->startSection('title','Sin permisos'); ?>
  <?php $__env->startSection('content'); ?>





     </div>
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                        No tiene permisos para ingresar a esta ruta
                     </div>

                     <div class="panel-body">
                         <a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary btn-success" style="background-color:green;">Volver</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>