<?php $__env->startSection('title','Evaluación de Alumnos'); ?>
<?php $__env->startSection('content'); ?>

  <head>
  <?php echo Html::style('css/micss.css'); ?>

  </head>

  <ol class="breadcrumb fondoC1 ">
       <li><a href="<?php echo e(url('Docente/mostrar')); ?>">Lista de Alumnos</a></li>
       <li class="active">Evaluar Alumno</li>
     </ol>

  <div class="row fondoC centro">

    <div class="page-header "  >
      <h1>Evaluar Alumnos<small></small></h1>
    </div>

    <div class="col-md-10">
       <div class="panel panel-primary " style=" margin-right:10%;" >
         <div class="panel-heading">
           Evaluar Alumno <?php echo e($alumnos->Nombre_Alumno); ?> <?php echo e($alumnos->Apellido_Alumno); ?>

       </div>

              <div class="panel-body" >
                <?php echo Form::open(); ?>


                <div class="col-sm-6">
                  <?php echo e(Form::label('Asignatura: ')); ?>

                  <?php foreach($asignatura as $asig): ?>
                    <?php if($alumnos->asignatura_id == $asig->id): ?>
                      <?php echo e($asig->nombre); ?>

                    <?php endif; ?>
                  <?php endforeach; ?>
               </div>

               <div class="col-sm-10">
                   <?php echo form::label('Observaciones'); ?>

                   <?php echo form::text('observaciones',null,['id'=>'Observaciones','class'=>'form-control' ]); ?>

              </div>

              <div class="col-sm-6">
                <?php echo form::label('Calificacion'); ?>

                <?php echo form::text('calificacion',null,['id'=>'Calificacion','class'=>'form-control']); ?>

              </div>


              <div class="col-sm-8">
              <?php echo form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px;']); ?>

               <!--!!Form::select('pac',$pacientes ,null,['id'=>'PacienteEvaluado','class'=>'form-control']) !!} -->
               <?php echo Form::close(); ?>

             </div>

              </div>
        </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>