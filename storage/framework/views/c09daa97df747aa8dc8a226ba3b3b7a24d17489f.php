<?php $__env->startSection('title','Ficha del Paciente'); ?>
<?php $__env->startSection('content'); ?>

<head>
    <?php echo Html::style('css/micss.css'); ?>

</head>










<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
     <li class="active">Ficha Paciente</li>
   </ol>


<div class="row fondoC centro">
    <div class="page-header "  >
      <h1>Ficha del Paciente<small></small></h1>
    </div>
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Datos personales


              <div class="panel-body">

                  <?php echo Form::open(); ?>


                 <div class="form-group">
                    <?php echo form::label('Rut : '); ?>

                     <?php echo $paciente->rut; ?>

                 </div>


                  <div class="form-group">
                    <?php echo form::label('Nombre : '); ?>

                     <?php echo $paciente->Nombre; ?> <?php echo $paciente->Paterno; ?> <?php echo $paciente->Materno; ?>

                 </div>


                 <?php echo Form::close(); ?>




                  <?php if($paciente->Odontograma_id==NULL): ?>

                  <?php echo Form::open(['route'=>'Odontograma.store','method'=>'POST']); ?>

                      <?php echo form::text('Odontograma_id',$paciente->rut,['id'=>'Odontograma_id','class'=>'form-control hidden']); ?>


                      <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Crear Odontograma</button>

                        <a <button type="button" href=<?php echo e(URL::previous()); ?> class="btn btn-warning">Volver</button></a>
                      </div>


                    <?php echo Form::close(); ?>


                   <?php endif; ?>
                   <?php if($paciente->Odontograma_id!=NULL): ?>
                   <div class="btn-group">

                     <a <button type="button" class="btn btn-success">Ver Plan de Tratamiento</button></a>
                     <a <button type="button" href=<?php echo e(route('Odontograma.index',$id)); ?> class="btn btn-success">Ver Odontograma</button></a>
                     <a <button type="button" href=<?php echo e(URL::previous()); ?> class="btn btn-warning">Volver</button> </a>
                   </div>
                    <?php endif; ?>








          </div>
        </div>
      </div>
</div>

           </div>
        </div>
      </div>
  </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>