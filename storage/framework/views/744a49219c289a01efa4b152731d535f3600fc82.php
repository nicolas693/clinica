<?php $__env->startSection('title','Inscribir Alumno'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<head>
<?php echo Html::style('css/micss.css'); ?>

</head>
  <ol class="breadcrumb fondoC1 ">
       <li><a href="<?php echo e(url('Docente')); ?>"> Docente</a></li>
       <li class="active">Inscribir Nuevo Alumno</li>
     </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Docente<small></small></h1>
    </div>
    <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
            Inscribir Alumno

         <div class="panel-body">

           <?php echo Form::open(['route'=>'Alumno.store','method'=>'POST']); ?>



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
          <?php echo form::submit('Inscribir Alumno',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

       <?php echo Form::close(); ?>

    </div>

         </div>
       </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>