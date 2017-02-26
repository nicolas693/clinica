<?php $__env->startSection('title','Lista de Docentes'); ?>
<?php $__env->startSection('content'); ?>

<head>
  <?php echo Html::style('css/micss.css'); ?>

</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Admin')); ?>"> Administrador</a></li>
     <li class="active">Lista de Docentes</li>
   </ol>

<div class="row fondoC centro">
  <div class="page-header" style=" margin-right:25%;" >
    <h1>Docentes<small></small></h1>
  </div>
  <div class="col-md-10" >

     <div class="panel panel-default" style=" margin-right:0%;">
       <div class="panel-heading">
            Lista de Docentes
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                 <th>Rut</th>
                 <th>Nombre</th>
                 <th>Teléfono</th>
                 <th>Asignatura</th>
              </thead>

              <tbody>
                <?php foreach($docente as $doc): ?>

               	<tr>
               		<td><?php echo e($doc->id); ?></td>
               		<td><?php echo e($doc->Nombre); ?></td>
                  <td><?php echo e($doc->Telefono); ?></td>
                  <td><?php echo e($doc->asignatura_id); ?></td>
               	</tr>

              <?php endforeach; ?>
              </tbody>
            </table>

          </div>

        </div>

  </div>
  <p class="navbar-text navbar-right" style=" margin-top: 1px;">
    <a <button type="button" href=<?php echo e(URL::previous()); ?> class="btn btn-primary" style=" margin-right: 60%;">Volver</button> </a>
  </p>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>