<?php $__env->startSection('title','Paciente Nuevo'); ?>

<?php $__env->startSection('content'); ?>

<ol class="breadcrumb">

     <li><a href="<?php echo e(url('Paciente')); ?>"> Pacientes</a></li>
     <li class="active">Editar Clinicas Clinica</li>
   </ol>


   <div class="page-header">
     <h1>Clinica Nueva </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Codigo Clinica : <?= $cli->id_Clinica ?>
           </div>
          <div class="panel-body">

               <?php echo Form::model($cli,['route'=>['Clinica.update',$cli->id_Clinica],'method'=>'PUT']); ?>





              <div class="col-sm-4">
                  <?php echo form::label('Nombre'); ?>

                  <?php echo form::text('Nombre_Clinica',null,['id'=>'Nombre_Clinica','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Direccion'); ?>

                  <?php echo form::text('Direccion_Clinica',null,['id'=>'Direccion_Clinica','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Telefono'); ?>

                  <?php echo form::text('Telefono_Clinica',null,['id'=>'Telefono_Clinica','class'=>'form-control']); ?>

             </div>

                 <?php echo form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 30px;']); ?>

              <?php echo Form::close(); ?>

           </div>
        </div>


     </div>
   </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>