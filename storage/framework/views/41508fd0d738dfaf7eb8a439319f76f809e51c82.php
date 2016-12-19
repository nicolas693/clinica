<?php $__env->startSection('title','Lista de Alumnos'); ?>

<?php $__env->startSection('content'); ?>

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header" >
     <h1>Alumnos<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista de Alumnos
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Inscribir Alumno</button>
              </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Rut </th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Teléfono Alumno</th>
               </thead>
               <tbody>
                 <?php foreach($Alumno as $Alumno): ?>
                   <tr>
                     <td><?php echo e($Alumno->rut_alumno); ?></td>
                     <td><?php echo e($Alumno->Nombre_Alumno); ?></td>
                     <td><?php echo e($Alumno->Apellido_Alumno); ?>}</td>
                     <td><?php echo e($Alumno->Telefono_Alumno); ?></td>
                     <td><a href="#">[Editar]</a> <a href="#">[Eliminar]</a></td>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
          </div>
        </div>


     </div>
   </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>