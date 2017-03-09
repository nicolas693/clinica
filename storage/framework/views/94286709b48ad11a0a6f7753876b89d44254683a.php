<?php $__env->startSection('title','Lista de Pacientes'); ?>
<?php $__env->startSection('content'); ?>
<head>
  <?php echo Html::style('css/micss.css'); ?>

  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
</head>
   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb fondoC1 ">

        <li class="active">Pacientes </li>
        <li class="pull-right"><a href="/Alumno" class="btn btn-primary btn-xs"> <b>Volver</b> </a></li>
      </ol>
   <!-- Main component for a primary marketing message or call to action -->


   <div class="row fondoC centro">

     <div class="col-md-12 " style="margin-top:5%;">

        <div class="panel panel-primary  " style=" margin-right:10%;" >
          <div class="panel-heading">
            Lista de Pacientes
        </div>

               <div class="panel-body"    >

                  <table class="table table-bordered " id="myTable1"  >
                    <thead>
                       <th>Rut</th>
                       <th>Nombre</th>
                       <th>Apellido Paterno</th>
                       <th>Apellido Materno</th>
                       <th>Clínica</th>
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


                             <div class="btn-group">
                                <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href=<?php echo e(route('Ficha.index',$pa->rut)); ?>>Antecedentes Clínicos</a></li>
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

   <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

   <script>



   $(document).ready(function() {
       $('#myTable1').DataTable( {
           "language": {
               "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
           }
       } );
   } );
   </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>