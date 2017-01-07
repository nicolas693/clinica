<?php $__env->startSection('title','Ficha del Paciente'); ?>
<?php $__env->startSection('content'); ?>

  <div class="page-header "  >
    <h1>Ficha del Paciente<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Lista
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
             </p>
          </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>