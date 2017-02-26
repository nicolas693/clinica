<?php $__env->startSection('title','Alumnos'); ?>

<?php $__env->startSection('content'); ?>
<head>
<?php echo Html::style('css/micss.css'); ?>

</head>
   <!-- Main component for a primary marketing message or call to action -->

   <ol class="breadcrumb fondoC1 ">
        <li><a href="<?php echo e(url('Docente')); ?>"> Docente</a></li>
        <li class="active">Evaluar Alumno</li>
      </ol>

   <div class="row fondoC centro">
     <div class="page-header "  >
       <h1>Alumnos<small></small></h1>
     </div>
     <div class="col-md-8">

        <div class="panel panel-default " >
          <div class="panel-heading">
             Lista

           </div>
          <div class="panel-body " >

             <table class="table table-bordered">
               <thead>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Asignatura</th>
                  <th>Clínica</th>
                  <th>Acción</th>
               </thead>
               <tbody>

               	<?php foreach($alumno as $al): ?>

               	<tr>
               		<td><?php echo e($al->alumno_id); ?></td>
               		<td><?php echo e($al->Nombre_Alumno); ?></td>
               		<td><?php echo e($al->Apellido_Alumno); ?></td>
                  <?php if($al->asignatura_id!=NULL): ?>
                    <?php foreach($asignatura as $asig): ?>
                      <?php if($al->asignatura_id == $asig->id): ?>
                        <td><?php echo e($asig->nombre); ?></td>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <td><?php echo e($al->id_Clinica); ?></td>

                  <td>
                    <a <button href="#" type="button" id= 'Evaluar' name='Evaluar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Evaluar</button></a>
                  </td>
               	</tr>

               	<?php endforeach; ?>

               </tbody>



             </table>


          </div>
        </div>


     </div>
   </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>