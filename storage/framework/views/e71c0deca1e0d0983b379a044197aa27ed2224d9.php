<?php $__env->startSection('title','Inscribir Alumno'); ?>
<?php $__env->startSection('content'); ?>

  <ol class="breadcrumb">
       <li><a href="<?php echo e(url('Docente')); ?>"> Docente</a></li>
       <li class="active">Inscribir Nuevo Alumno</li>
     </ol>
  <div class="page-header" >
    <h1>Docente<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
            Inscribir Alumno
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">

          </div><button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 3px 20px;margin-left: 600px">Inscribir</button>
        </p>
         <div class="panel-body">

           <?php echo Form::open(['route'=>'Alumnos.store','method'=>'POST']); ?>



           <div class="col-sm-12">
              <?php echo form::label('Rut Alumno'); ?>

              <?php echo form::text('Rut Alumno',null,['id'=>'rut_alumno','class'=>'form-control']); ?>


         </div>
         <div class="col-sm-4">
             <?php echo form::label('Nombre'); ?>

             <?php echo form::text('Nombre',null,['id'=>'Nombre_Alumno','class'=>'form-control']); ?>

        </div>
        <div class="col-sm-4">
             <?php echo form::label('Apellido '); ?>

             <?php echo form::text('Apellido Paterno',null,['id'=>'Apellido_Alumno','class'=>'form-control']); ?>

        </div>
        <div class="col-sm-4">
             <?php echo form::label('Teléfono'); ?>

             <?php echo form::text('Teléfono',null,['id'=>'Telefono_Alumno','class'=>'form-control']); ?>

        </div>


         </div>
       </div>
    </div>
  </div>

<script>
  $("#nuevo").click(function(event)
  {
      document.location.href = "<?php echo e(route('Docente.create')); ?>";
  });
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>