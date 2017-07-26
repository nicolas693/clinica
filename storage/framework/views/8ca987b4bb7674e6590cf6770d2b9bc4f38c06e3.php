<?php $__env->startSection('title','Ficha del Paciente'); ?>
<?php $__env->startSection('content'); ?>

<head><?php echo Html::style('css/micss.css'); ?></head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Odontólogo</a></li>
     <li class="active">Menú Ficha</li>
      <li class="pull-right"><a href="/Alumno/mostrar/<?php echo e($paciente->clinica_id); ?>" class="btn btn-primary btn-xs"> <b>Volver</b> </a></li>
   </ol>


<div class="row fondoC centro">
    <div class="page-header centrar" style="margin-right:350px;" >
      <h1>Menú Ficha<small></small></h1>
    </div>
    <div class="col-md-10">

       <div class="panel panel-primary centrarIT" >
         <div class="panel-heading">
            Datos Paciente
          </div>
              <div class="panel-body">

                  <?php echo Form::open(); ?>

                  <div class="form-group col-sm-6">
                    <?php echo form::label('Nombre : '); ?>

                    <?php echo $paciente->Nombre; ?> <?php echo $paciente->Paterno; ?> <?php echo $paciente->Materno; ?>

                 </div>

                 <div class="form-group col-sm-6">
                    <?php echo form::label('Rut : '); ?>

                     <?php echo $paciente->rut; ?>

                 </div>

                 <div class="form-group col-sm-6">
                    <?php echo form::label('Sexo : '); ?>

                     <?php echo $paciente->Genero; ?>

                 </div>

                 <div class="form-group col-sm-6">
                    <?php echo form::label('Teléfono : '); ?>

                     <?php echo $paciente->Telefono_Movil; ?>

                 </div>

                 <div class="form-group col-sm-6">
                    <?php echo form::label('Dirección : '); ?>

                     <?php echo $paciente->Calle; ?> <?php echo $paciente->Numero_calle; ?>

                 </div>

                 <div class="form-group col-sm-6">
                    <?php echo form::label('Cobertura Médica : '); ?>

                     <?php echo $paciente->Cobertura_Medica; ?>

                 </div>


                 <?php echo Form::close(); ?>




                  <?php if($paciente->Odontograma_id==NULL): ?>

                  <?php echo Form::open(['route'=>'Odontograma.store','method'=>'POST']); ?>

                      <?php echo form::text('Odontograma_id',$paciente->rut,['id'=>'Odontograma_id','class'=>'form-control hidden']); ?>

                      <div class="btn-group">
                        <button type="submit" class="btn btn-success" style="margin-left:10px;">Crear Odontograma</button>
                      </div>
                    <?php echo Form::close(); ?>


                  <?php else: ?>
                    <div class="btn-group">
                        <?php if($ficha_exists!=NULL): ?>
                          <a <button type="button" href=<?php echo e(route('Tratamiento.index', $id)); ?> class="btn btn-warning">Ver Plan de Tratamiento</button></a>
                          <a <button type="button" href=<?php echo e(route('Odontograma.index',$id)); ?> class="btn btn-info">Ver Odontograma</button></a>
                          <a <button href=<?php echo e(route('Ficha.verFicha',$id)); ?> type="button"  class="btn btn-primary">Ver Ficha</button> </a>
                        <?php else: ?>
                          <a <button type="button" href=<?php echo e(route('Odontograma.index',$id)); ?> class="btn btn-info">Ver Odontograma</button></a>
                          <a <button href=<?php echo e(route('Ficha.ficha',$id)); ?> type="button"  class="btn btn-success">Ingresar Ficha</button> </a>
                        <?php endif; ?>

                      </div>
                 <?php endif; ?>

                  </div>
          </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>