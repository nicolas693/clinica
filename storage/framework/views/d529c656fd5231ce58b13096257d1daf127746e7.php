<?php $__env->startSection('title','Planificación de Tratamiento'); ?>
<?php $__env->startSection('content'); ?>

  <head>
      <?php echo Html::style('css/micss.css'); ?>

  </head>

  <ol class="breadcrumb fondoC1 ">


       <li class="active">Plan de Tratamiento</li>
        <li class="pull-right"><a href="/Ficha/<?php echo e($paciente->rut); ?>" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
  </ol>


<div class="row fondoC centro">
  <div class="page-header "  >
    <h1>Planificación de Tratamiento<small></small></h1>
  </div>
    <div class="col-md-10">

       <div class="panel panel-primary centrarIT " >
         <div class="panel-heading">
            Tratamiento
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href=<?php echo e(route ('Tratamiento.nuevo',$id)); ?> type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ingresar Tratamiento</button></a>
             </p>
          </div>

          <div class="panel-body">
            <table class="table stripe compact">
              <thead>
                 <th>Fecha</th>
                 <th>Acción a realizar</th>
                 <th>Pieza Dental</th>
              </thead>


               <?php foreach($tratamiento as $tra): ?>
                <?php if($tra->paciente_id == $id ): ?>
                  <tr>
                    <td><?php echo e($tra->Fecha); ?></td>
                    <td><?php echo e($tra->AccionR); ?></td>
                    <td><?php echo e($tra->DienteTratamiento); ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>

              </table>



           </div>
         </div>
       </div>
     </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>