<?php $__env->startSection('title','Lista de Pacientes'); ?>
<?php $__env->startSection('content'); ?>

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header "  >
     <h1>Pacientes<small></small></h1>
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
                 <th>id</th>
                  <th>Clinica</th>



                  <th>Accion</th>
               </thead>
               <tbody>

               	<?php foreach($clinica as $cli): ?>

               	<tr>
                  <td><?php echo e($cli->id_Clinica); ?></td>
               		<td><?php echo e($cli->Nombre_Clinica); ?></td>



                  <td><a <button href=<?php echo e(url('/Alumno/mostrar',$cli->id_Clinica)); ?> type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >ver pacientes</button></a>

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