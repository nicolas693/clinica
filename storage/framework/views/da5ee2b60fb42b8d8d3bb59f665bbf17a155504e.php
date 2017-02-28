<?php $__env->startSection('title','Editar Paciente'); ?>

<?php $__env->startSection('content'); ?>
<head>
    <?php echo Html::style('css/micss.css'); ?>

</head>


<ol class="breadcrumb fondoC1 ">

     <li class="active">Alta Paciente</li>
     <li class="pull-right"><a href="/Alumno/mostrar/<?php echo e($pa->clinica_id); ?>" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
   </ol>


   <div class="row fondoC centro">

     <div class="page-header">
       <h1>Alta Medica </h1>
     </div>
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Datos
           </div>
          <div class="panel-body">

              <?php echo Form::open(); ?>


             <div class="form-group">
               <label for="exampleInputPassword1"> ¿Desea dar de alta al paciente  ? :</label>
             </div>
             <div class="form-group">
              <?php echo form::label('Rut : '); ?>

               <?php echo $pa->rut; ?>

             </div>

              <div class="form-group">
              <?php echo form::label('Nombre : '); ?>

               <?php echo $pa->Nombre; ?> <?php echo $pa->Paterno; ?> <?php echo $pa->Materno; ?>

             </div>

             <div class="form-group">
             <?php echo form::label('Alta : '); ?>

              <?php echo $pa->alta; ?>

            </div>







                <button type="button" id= 'alta' name='alta' class="btn btn-warning" >Dar de Alta</button>

<?php echo Form::close(); ?>


           </div>
        </div>


     </div>
   </div>

<script>

    $("#cancelar").click(function(event)
        {
        document.location.href = "<?php echo e(URL::previous()); ?>";
        });

</script>


<script>

    $("#alta").click(function(event)
        {
        document.location.href = "<?php echo e(url('/Paciente/alta/'.$pa->rut)); ?>";
        });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>