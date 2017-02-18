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


                 <div class="sm-md-col 4">
                 <a <button href=<?php echo e(URL::previous()); ?> type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-primary" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
                 <a <button href="<?php echo e(route('Tratamiento.index')); ?>" type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-warning" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver plan de Tratamiento</button></a>
                 <a <button href=<?php echo e(route('Odontograma.index',$id)); ?> type="button"  class="btn btn-info" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ver Odontograma</button></a>
                 <a <button href=<?php echo e(route('Ficha.ficha',$id)); ?> type="button"  class="btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 3px 20px;"  >Ingresar Ficha</button></a>
                </div>
              </div>




           </div>
        </div>
      </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>