<?php $__env->startSection('title','Planificación de Tratamiento'); ?>
<?php $__env->startSection('content'); ?>

  <div class="page-header "  >
    <h1>Planificación de Tratamiento<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Tratamiento
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href="#" type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ingresar Tratamiento</button></a>
             </p>
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                 <th>#</th>
                 <th>Fecha</th>
                 <th>Tratamiento</th>
                 <th>Diente</th>
              </thead>
              </table>

              <div >
                 <a <button href=<?php echo e(URL::previous()); ?> type="button"  class="btn btn-primary"   >Volver</button></a>
               </div>

           </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>