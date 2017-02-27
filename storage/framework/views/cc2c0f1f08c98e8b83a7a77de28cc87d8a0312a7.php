<?php $__env->startSection('title','Editar Paciente'); ?>

<?php $__env->startSection('content'); ?>

<head>
  <?php echo Html::style('css/micss.css'); ?>

</head>




   <div class="row fondoC centro">
     <div class="page-header">
       <h1>aaaaaaaaaAAAAAAAAAAAAAAAaaaaAAaaaA!!! </h1>
     </div>
     <div class="col-md-8">

        <div class="panel panel-primary">
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
              <?php echo form::label('Codigo de Usuario : '); ?>

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


          <?php if($user->idrol==3): ?>
          <div class="panel panel-primary">
            <div class="panel-heading">
               Mis datos
             </div>
          <div class="panel-body">
              <?php echo Form::open(); ?>

              <div class="form-group">
               <?php echo form::label('Rut : '); ?>

                <?php echo $info->alumno_id; ?>

              </div>
             <div class="form-group">
              <?php echo form::label('Nombre : '); ?>

               <?php echo $info->Nombre_Alumno; ?> <?php echo $info->Apellido_Alumno; ?>

             </div>
              <div class="form-group">
              <?php echo form::label('Telefono : '); ?>

               <?php echo $info->Telefono_Alumno; ?>

             </div>
             <a <button href="#" type="button" id= 'Editar' name='Editar' class="btn btn-success" style ="margin-bottom: 20px"  >Editar Datos</button></a>
           </div>
         </div>
          <?php endif; ?>

          <?php if($user->idrol==2): ?>
          <div class="panel panel-primary">
            <div class="panel-heading">
               Mis datos
             </div>
          <div class="panel-body">
              <?php echo Form::open(); ?>

              <div class="form-group">
               <?php echo form::label('Rut : '); ?>

                <?php echo $info->id; ?>

              </div>
             <div class="form-group">
              <?php echo form::label('Nombre : '); ?>

               <?php echo $info->Nombre; ?>

              <div class="form-group">
              <?php echo form::label('Telefono : '); ?>

               <?php echo $info->Telefono; ?>

             </div>
             <a <button href="#" type="button" id= 'Editar' name='Editar' class="btn btn-success" style ="margin-bottom: 20px"  >Editar Datos</button></a>
           </div>
         </div>
          <?php endif; ?>

        </div>




   </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>