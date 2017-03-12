<?php $__env->startSection('title','Lista de Pacientes'); ?>
<?php $__env->startSection('content'); ?>
<head>
  <?php echo Html::style('css/micss.css'); ?>

  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
  <!--<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">-->


</head>
   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb fondoC1 ">
        <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
        <li class="active">Panel Alumno</li>
      </ol>


   <div class="row fondoC centro">
     <div class="page-header centrar" style=" margin-right:20%;"  >
       <h1>Lista de Clínicas<small></small></h1>
     </div>
     <div class="col-md-10 ">

        <div class="panel panel-primary centrar" >
          <div class="panel-heading">
             Clínicas
           </div>
          <div class="panel-body" >

             <table class="table stripe compact" id="myTable1">
               <thead>
                 <th>id</th>
                  <th>Clinica</th>
                  <th>Acción</th>
               </thead>
               <tbody>

               	<?php foreach($clinica as $cli): ?>

               	<tr>
                  <td><?php echo e($cli->id_Clinica); ?></td>
               		<td><?php echo e($cli->Nombre_Clinica); ?></td>

                  <td><a <button href=<?php echo e(route('Alumno.mostrar',$cli->id_Clinica)); ?> type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-info" style ="margin-left: 20px"  >Ver pacientes</button></a>

                  </td>
               	</tr>

               	<?php endforeach; ?>

               </tbody>



             </table>


          </div>

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