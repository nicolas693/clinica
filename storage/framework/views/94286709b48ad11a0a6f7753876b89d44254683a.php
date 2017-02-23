<?php $__env->startSection('title','Lista de Pacientes'); ?>
<?php $__env->startSection('content'); ?>
<head>
  <?php echo Html::style('css/micss.css'); ?>

</head>
   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb fondoC1 ">
        <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
        <li class="active">Pacientes</li>
      </ol>
   <!-- Main component for a primary marketing message or call to action -->


   <div class="row fondoC centro">
     <div class="page-header " style=" margin-right:10%;"  >
       <h1>Pacientes<small></small></h1>
     </div>
     <div class="col-md-12">

        <div class="panel panel-default  " style=" margin-right:10%;" >
          <div class="panel-heading">
            Lista de Pacientes



        </div>


               <div class="panel-body"    >

                  <table class="table table-bordered "  >
                    <thead>
                       <th>Rut</th>
                       <th>Nombre</th>
                       <th>Apellido Paterno</th>
                       <th>Apellido Materno</th>
                       <th>Clinica</th>


                       <th>Acción</th>
                    </thead>


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
                                  <a href=<?php echo e(route('Paciente.edit',$pa->rut)); ?> class="btn btn-primary btn-success" style="background-color:green;">Editar</a>

<<<<<<< HEAD
                                  <a href=<?php echo e(route('Paciente.show',$pa->rut)); ?> class="btn btn-primary btn-danger">Dar de alta</a>
                             </div>-->


                             <div class="btn-group">
                                <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href=<?php echo e(route('Ficha.index', $pa->rut)); ?>>Ver Ficha</a></li>
                                  <li><a href=<?php echo e(route('Paciente.edit',$pa->rut)); ?>>Editar</a></li>
                                  <li><a href=<?php echo e(route('Paciente.show',$pa->rut)); ?>>Dar de Baja</a></li>
                                </ul>
                             </div>
                         </td>
                       </tr>
                       <?php endif; ?>

                     <?php endforeach; ?>





                  </table>


               </div>
           </div>

           <p class="navbar-text navbar-right" style=" margin-top: 1px;">

             <a <button href=<?php echo e(route('Paciente.create',$id)); ?> type="button" id='nuevo'  name='nuevo' class="btn btn-success" style=" margin-right: 40%;" >Ingresar nuevo paciente</button></a>
           </p>

        </div>



     </div>
   </div>

   <!--<script>$("#nuevo").click(function(event){document.location.href = "{route('Paciente.create')}}";});</script>-->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>