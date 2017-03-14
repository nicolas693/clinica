<?php $__env->startSection('title','Evaluación de Alumnos'); ?>
<?php $__env->startSection('content'); ?>

  <head>
  <?php echo Html::style('css/micss.css'); ?>

  </head>

  <ol class="breadcrumb fondoC1 ">

       <li class="active">Evaluar Alumno</li>
       <li class="pull-right"><a href="/Docente" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     </ol>

  <div class="row fondoC centro">

    <div class="page-header "  >
      <h1>Evaluar Alumnos<small></small></h1>
    </div>

    <div class="col-md-10">
       <div class="panel panel-primary " style=" margin-right:10%;" >
         <div class="panel-heading">
           Evaluar Alumno <?php echo e($alumnos->Nombre); ?> <?php echo e($alumnos->Apellido); ?>

       </div>

              <div class="panel-body" >
                <?php echo Form::model( ['route'=>['Docente.evaluarAlumno'],'method'=>'PUT'] ); ?>


                <div class="col-sm-6">
                  <?php echo e(Form::label('Asignatura: ')); ?>

                  <?php foreach($asignatura as $asig): ?>
                    <?php if($alumnos->asignatura_id == $asig->id): ?>
                      <?php echo e($asig->nombre); ?>

                    <?php endif; ?>
                  <?php endforeach; ?>
               </div>


               <div class="col-sm-10" style="margin-top:15px;">
                   <?php echo form::label('Observaciones'); ?>

                   <?php echo form::text('Observaciones',null,['id'=>'Observaciones','class'=>'form-control' ]); ?>

              </div>

              <div class="col-sm-6" style="margin-top:15px;">
                <?php echo form::label('Calificación'); ?>

                <?php echo form::text('Calificacion',null,['id'=>'Calificacion','class'=>'form-control']); ?>

              </div>

              <div class="col-sm-8" style="margin-top:15px;">
              <?php echo form::label('pacientesevaluar','Pacientes a evaluar'); ?>

              <?php echo Form::select('PacienteEvaluado',$pacientes,null,['id'=>'PacienteEvaluado',
                  'class'=>'form-control']); ?>

            </div>


              <div class="col-sm-8">
              <?php echo form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px;']); ?>

              <?php echo Form::close(); ?>

             </div>

              </div>
        </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>