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
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <a <button href=<?php echo e(route('Paciente.create')); ?> type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Nuevo</button></a>

                <!--<button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>-->
              </p>
           </div>
          <div class="panel-body " >

             <table class="table table-bordered">
               <thead>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Clinica</th>


                  <th>Acción</th>
               </thead>
               <tbody>

               	<?php foreach($paciente as $pa): ?>

               	  <?php if($pa->clinica_id == $id ): ?>
                  <tr>
                    <td><?php echo e($pa->rut); ?></td>
                    <td><?php echo e($pa->Nombre); ?></td>
                    <td><?php echo e($pa->Paterno); ?></td>
                    <td><?php echo e($pa->Materno); ?></td>
                    <td><?php echo e($pa->clinica_id); ?></td>


                    <td>
                        <!--<div class="btn-group btn-group-justified">
                              <a href="#" class="btn btn-primary">Ver ficha</a>
                             <a href={route('Paciente.edit',$pa->rut)}} class="btn btn-primary btn-success" style="background-color:green;">Editar</a>

                             <a href={route('Paciente.show',$pa->rut)}} class="btn btn-primary btn-danger">Dar de alta</a>
                        </div>-->

                        <div class="btn-group">
                           <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                             <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu" role="menu">
                             <li><a href="<?php echo e(route('Ficha.index')); ?>">Ver Ficha</a></li>
                             <li><a href=<?php echo e(route('Paciente.edit',$pa->rut)); ?>>Editar</a></li>
                             <li><a href=<?php echo e(route('Paciente.show',$pa->rut)); ?>>Alta Medica</a></li>
                           </ul>
                        </div>
                    </td>
                  </tr>
                  <?php endif; ?>

               	<?php endforeach; ?>

               </tbody>



             </table>

             <div >
                <a <button href=<?php echo e(url('/Alumno')); ?> type="button"  class="btn btn-primary"   >Volver</button></a>
              </div>


          </div>
        </div>


     </div>
   </div>

   <!--<script>$("#nuevo").click(function(event){document.location.href = "{route('Paciente.create')}}";});</script>-->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>