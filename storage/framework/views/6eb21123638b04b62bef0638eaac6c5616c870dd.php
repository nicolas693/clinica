<?php $__env->startSection('title','Lista de Clinicas'); ?>

<?php $__env->startSection('content'); ?>

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header" >
     <h1>Clinicas<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Clinicas
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
              </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Telefono</th>


                  <th>Accion</th>
               </thead>
               <tbody>

               	<?php foreach($clinica as $cli): ?>

               	<tr>
               		<td><?php echo e($cli->id_Clinica); ?></td>
               		<td><?php echo e($cli->Nombre_Clinica); ?></td>
               		<td><?php echo e($cli->Direccion_Clinica); ?></td>
               		<td><?php echo e($cli->Telefono_Clinica); ?></td>


                  <td><a <button  href=<?php echo e(route('Clinica.edit',$cli->id_Clinica)); ?> type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>
                      <a <button href=<?php echo e(route('Clinica.show',$cli->id_Clinica)); ?> type="button" id= 'Eliminar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-danger" style ="margin-left: 20px">Eliminar</button></a>
                  </td>
               	</tr>

               	<?php endforeach; ?>

               </tbody>



             </table>


          </div>
        </div>


     </div>
   </div>

   <script>$("#nuevo").click(function(event){document.location.href = "<?php echo e(route('Clinica.create')); ?>";});</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>