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
    <div class="page-header" style="margin-right:350px;" >
      <h1>Antecedentes del Paciente<small></small></h1>
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
                    <?php echo form::label('Telefono : '); ?>

                     <?php echo $paciente->Telefono_Movil; ?>

                 </div>

                 <div class="form-group col-sm-6">
                    <?php echo form::label('Direccion : '); ?>

                     <?php echo $paciente->Calle; ?> <?php echo $paciente->Numero_calle; ?>

                 </div>

                 <div class="form-group col-sm-6">
                    <?php echo form::label('Cobertura Medica : '); ?>

                     <?php echo $paciente->Cobertura_Medica; ?>

                 </div>



                 <?php echo Form::close(); ?>




                  <?php if($paciente->Odontograma_id==NULL): ?>

                  <?php echo Form::open(['route'=>'Odontograma.store','method'=>'POST']); ?>

                      <?php echo form::text('Odontograma_id',$paciente->rut,['id'=>'Odontograma_id','class'=>'form-control hidden']); ?>


                      <div class="btn-group">
                        <button type="submit" class="btn btn-success">Crear Odontograma</button>

                        <a <button type="button" href=<?php echo e(URL::previous()); ?> class="btn btn-primary">Volver</button></a>
                      </div>


                    <?php echo Form::close(); ?>


                   <?php endif; ?>
                   <?php if($paciente->Odontograma_id!=NULL): ?>
                   <div class="btn-group">

                     <a <button type="button" href=<?php echo e(route('Tratamiento.index', $id)); ?> class="btn btn-warning">Ver Plan de Tratamiento</button></a>
                     <a <button type="button" href=<?php echo e(route('Odontograma.index',$id)); ?> class="btn btn-info">Ver Odontograma</button></a>
                     <a <button href=<?php echo e(route('Ficha.ficha',$id)); ?> type="button"  class="btn btn-success">Ingresar Ficha</button> </a>
                     <a <button type="button"  id='volver' class="btn btn-primary">Volver</button> </a>
                   </div>
                    <?php endif; ?>
                  </div>
          </div>
        </div>
      </div>

      <script>
        $("#volver").click(function(event)
        {
            document.location.href = "<?php echo e(route('Alumno.mostrar',$paciente->clinica_id)); ?>";
        });
        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>