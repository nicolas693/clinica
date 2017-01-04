<?php $__env->startSection('title','Editar Paciente'); ?>

<?php $__env->startSection('content'); ?>




   <div class="page-header">
     <h1>ALGO PONDRE ACA </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Datos Usuario
           </div>
          <div class="panel-body">

            <?php foreach($rol as $ro): ?>
              <?php if($ro->idrol == $user->idrol ): ?>
                <?php  $nombre=$ro->Nombre  ?>
                <?php endif; ?>
            <?php endforeach; ?>

              <?php echo Form::open(); ?>




             <div class="form-group">
              <?php echo form::label('Codigo : '); ?>

               <?php echo $user->id; ?>

             </div>

              <div class="form-group">
              <?php echo form::label('Email : '); ?>

               <?php echo $user->email; ?>

             </div>

             <div class="form-group">
             <?php echo form::label('Permisos de : '); ?>

              <?php echo $nombre; ?>

            </div>




           </div>
        </div>


     </div>
   </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>