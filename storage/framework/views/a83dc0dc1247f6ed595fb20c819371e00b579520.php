<?php $__env->startSection('title','Inscribir Alumno'); ?>
<?php $__env->startSection('content'); ?>

<head><?php echo Html::style('css/micss.css'); ?></head>
  <ol class="breadcrumb fondoC1 ">
       <li class="active">Inscribir Nuevo Alumno</li>
       <li class="pull-right"><a href="/Docente" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Docente<small></small></h1>
    </div>
    <div class="col-md-10">
      <div class="centrarIT"><?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  </div>
      <div class="panel panel-primary centrarIT">
        <div class="panel-heading"><b> Crear Alumno </b></div>

        <div class="panel-body">
          <?php echo Form::open(['route'=>'Alumno.store','method'=>'POST']); ?>


          <div class="form-group col-sm-12">
             <?php echo form::label('Rut Alumno'); ?>

             <?php echo form::text('alumno_id',null,['id'=>'alumno_id','class'=>'form-control']); ?>


        </div>

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

       <div class="form-group col-sm-6">
            <?php echo form::label('Teléfono'); ?>

            <?php echo form::text('Telefono',null,['id'=>'Telefono','class'=>'form-control']); ?>

       </div>


       <div class="form-group col-sm-5">
          <?php echo form::label('Asignatura'); ?>

          <?php echo Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']); ?>

       </div>

       <div class="form-group col-sm-5">
          <?php echo form::label('Clínica'); ?>

          <?php echo Form::select('id_Clinica',$clinica,null,['id'=>'id_Clinica','class'=>'form-control']); ?>

       </div>

       <div class="col-sm-6">
            <?php echo form::label('Email'); ?>

            <?php echo form::text('email',null,['id'=>'email','class'=>'form-control']); ?>

        </div>

        <div class="form-group col-sm-12">
          <?php echo form::submit('Inscribir',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success ']); ?>

         <?php echo Form::close(); ?>

        </div>

        </div>
      </div>


         </div>
      </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>