<?php $__env->startSection('title','Paciente Nuevo'); ?>

<?php $__env->startSection('content'); ?>

<ol class="breadcrumb">

     <li><a href="<?php echo e(url('Paciente')); ?>"> Pacientes</a></li>
     <li class="active">Ingresar Nueva Clinica</li>
   </ol>


   <div class="page-header">
     <h1>Clinica Nueva </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nueva Clinica
           </div>
          <div class="panel-body">

               <?php echo Form::open(['route'=>'Clinica.store','method'=>'POST']); ?>



               <div class="col-sm-12">
                  <?php echo form::label('Codigo'); ?>

                  <?php echo form::text('id_Clinica',null,['id'=>'rut','class'=>'form-control']); ?>

             </div>

              <div class="col-sm-4">
                  <?php echo form::label('Nombre'); ?>

                  <?php echo form::text('Nombre_Clinica',null,['id'=>'Nombre','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Direccion'); ?>

                  <?php echo form::text('Direccion_Clinica',null,['id'=>'Paterno','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Telefono'); ?>

                  <?php echo form::text('Telefono_Clinica',null,['id'=>'Materno','class'=>'form-control']); ?>

             </div>

                 <?php echo form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

              <?php echo Form::close(); ?>

           </div>
        </div>


     </div>
   </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>