<?php $__env->startSection('title','Alumnos'); ?>

<?php $__env->startSection('content'); ?>

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header "  >
     <h1>Alumnos<small></small></h1>
   </div>

   <div class="row">
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
                  <th>Clinica</th>
                  <th>Accion</th>
               </thead>
               <tbody>

               	<?php foreach($alumno as $al): ?>

               	<tr>
               		<td><?php echo e($al->rut_alumno); ?></td>
               		<td><?php echo e($al->Nombre_Alumno); ?></td>
               		<td><?php echo e($al->Apellido_Alumno); ?></td>
                  <td><?php echo e($al->asignatura_id); ?></td>
                  <td><?php echo e($al->id_Clinica); ?></td>

                  <td>
                    <a <button  type="button" id= 'Evaluar' name='Evaluar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Evaluar</button></a>
                  </td>
               	</tr>

               	<?php endforeach; ?>

               </tbody>



             </table>


          </div>
        </div>


     </div>
   </div>

   <!--<script>$("#nuevo").click(function(event){document.location.href = "<?php echo e(route('Paciente.create')); ?>";});</script>-->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>