<?php $__env->startSection('title','Lista de Pacientes'); ?>

<?php $__env->startSection('content'); ?>

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header" >
     <h1>Pacientes<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
              </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>


                  <th>Accion</th>
               </thead>
               <tbody>

               	<?php foreach($paciente as $pa): ?>

               	<tr>
               		<td><?php echo e($pa->rut); ?></td>
               		<td><?php echo e($pa->Nombre); ?></td>
               		<td><?php echo e($pa->Paterno); ?></td>
               		<td><?php echo e($pa->Materno); ?></td>


                  <td><a <button  href=<?php echo e(route('Paciente.edit',$pa->rut)); ?> type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>
                      <a <button href=<?php echo e(route('Paciente.show',$pa->rut)); ?> type="button" id= 'Eliminar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" style ="margin-left: 20px">Eliminar</button></a>
                  </td>
               	</tr>

               	<?php endforeach; ?>

               </tbody>



             </table>


          </div>
        </div>


     </div>
   </div>

   <script>$("#nuevo").click(function(event){document.location.href = "<?php echo e(route('Paciente.create')); ?>";});</script>

   


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>