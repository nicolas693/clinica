<?php $__env->startSection('title','Editar Alumno'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<head>
<?php echo Html::style('css/micss.css'); ?>

</head>
  <ol class="breadcrumb fondoC1 ">

<<<<<<< HEAD:storage/framework/views/bbd2abd067d0707f4e726a79377df461c38c8ef3.php
       <li class="active">Editar Alumno</li>
=======
       <li class="active">Inscribir Nuevo Alumno</li>
>>>>>>> c56e046d6c44544b4825ce5a75cad4bfb31d24d1:storage/framework/views/e71c0deca1e0d0983b379a044197aa27ed2224d9.php
       <li class="pull-right"><a href="/Docente" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Editar Alumno<small></small></h1>
    </div>
    <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading" style="margin-bottom:3%;">
              <b>Datos de <?php echo e($alumno->Nombre_Alumno); ?> <?php echo e($alumno->Apellido_Alumno); ?></b>

         <div class="panel-body">


           <?php echo Form::model($alumno,['route'=>['Alumno.update',$alumno->alumno_id],'method'=>'PUT']); ?>



           <div class="col-sm-12">
              <?php echo form::label('Rut Alumno'); ?>

              <?php echo form::text('alumno_id',null,['id'=>'alumno_id','class'=>'form-control']); ?>


         </div>
         <div class="col-sm-4">
             <?php echo form::label('Nombre'); ?>

             <?php echo form::text('Nombre_Alumno',null,['id'=>'Nombre_Alumno','class'=>'form-control']); ?>

        </div>
        <div class="col-sm-4">
             <?php echo form::label('Apellido '); ?>

             <?php echo form::text('Apellido_Alumno',null,['id'=>'Apellido_Alumno','class'=>'form-control']); ?>

        </div>

        <div class="col-sm-4">
             <?php echo form::label('Teléfono'); ?>

             <?php echo form::text('Telefono_Alumno',null,['id'=>'Telefono_Alumno','class'=>'form-control']); ?>

        </div>


        <div class="col-sm-5">
           <?php echo form::label('Asignatura'); ?>

           <?php echo Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']); ?>

        </div>

        <div class="col-sm-5">
           <?php echo form::label('Clínica'); ?>

           <?php echo Form::select('id_Clinica',$clinica,null,['id'=>'id_Clinica','class'=>'form-control']); ?>

        </div>

        <div class="col-sm-6">
           <?php echo form::label('Código Usuario'); ?>

           <?php echo form::text('user_id',null,['id'=>'user_id','class'=>'form-control']); ?>

         </div>



      </div>
          <?php echo form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

       <?php echo Form::close(); ?>

    </div>

         </div>
       </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>