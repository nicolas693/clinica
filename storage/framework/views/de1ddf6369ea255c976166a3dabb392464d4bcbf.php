<?php $__env->startSection('title','Editar Alumno'); ?>
<?php $__env->startSection('content'); ?>

<head>
<?php echo Html::style('css/micss.css'); ?>

</head>
  <ol class="breadcrumb fondoC1 ">
       <li class="active">Editar Alumno</li>
       <li class="pull-right"><a href="/Docente" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     </ol>



  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Editar Alumno<small></small></h1>
    </div>

    <div class="col-md-10">
<div class="centrarIT"><?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  </div>
      <div class="panel panel-primary centrarIT">

        <div class="panel-heading"> <b>Datos de <?php echo e($alumno->Nombre); ?> <?php echo e($alumno->Apellido); ?></b> </div>

        <div class="panel-body">
          <?php echo Form::model($alumno,['route'=>['Alumno.update',$alumno->alumno_id],'method'=>'PUT']); ?>



          <div class="form-group col-sm-4">
             <?php echo form::label('Rut Alumno : '); ?>

             <?php echo form::text('alumno_id',null,['id'=>'alumno_id','class'=>'form-control','readonly']); ?>

        </div>

        <div class="form-group col-sm-12"></div>

        <div class="form-group col-sm-4">
            <?php echo form::label('Nombre'); ?>

            <?php echo form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control']); ?>

       </div>

      <div class="form-group col-sm-4">
          <?php echo form::label('Apellido Paterno'); ?>

          <?php echo form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control']); ?>

     </div>

     <div class="form-group col-sm-4">
         <?php echo form::label('Apellido Materno'); ?>

         <?php echo form::text('Materno',null,['id'=>'Materno','class'=>'form-control']); ?>

    </div>

       <div class="form-group col-sm-4">
            <?php echo form::label('Teléfono'); ?>

            <?php echo form::text('Telefono',null,['id'=>'Telefono','class'=>'form-control']); ?>

       </div>


       <div class="form-group col-sm-6">
          <?php echo form::label('Asignatura'); ?>

          <?php echo Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']); ?>

       </div>

       <div class="form-group col-sm-6">
          <?php echo form::label('Clínica'); ?>

          <?php echo Form::select('id_Clinica',$clinica,null,['id'=>'id_Clinica','class'=>'form-control']); ?>

       </div>

       <div class="form-group col-sm-12">
          <?php echo form::label('ID Usuario : '); ?><?php echo e($alumno->user_id); ?>

          <a href="/Alumno/<?php echo e($alumno->alumno_id); ?>/edit/<?php echo e($alumno->user_id); ?>" class="btn btn-primary btn-xs" style="margin-left:50px;"> <b>Modificar ID de usuario</b></a>
        </div>

        <div class="form-group col-sm-12">
        <?php echo form::submit('Actualizar', ['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success']); ?>

        <?php echo Form::close(); ?>

        </div>
        </div>
      </div>


  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>