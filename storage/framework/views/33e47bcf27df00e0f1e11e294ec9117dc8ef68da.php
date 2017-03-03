<?php $__env->startSection('title','Docente'); ?>
<?php $__env->startSection('content'); ?>

<head>
  <?php echo Html::style('css/micss.css'); ?>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

</head>


<ol class="breadcrumb fondoC1 ">
     <li class="active">Panel de Docente</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Docente<small></small></h1>
    </div>
    <div class="col-md-12">
        <div class="panel panel-primary" style="margin-right:10%;">
          <div class="panel-heading">Menú</div>
              <div class="panel-body">
                  <div class="col-sm-4"><button type="button" id='Alumno'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Alumnos</button></div>


                    <div class="panel panel-default" id="1" style="display:none; margin-top:8%;">
                      <div class="panel-heading" ><b>Alumnos</b></div>
                        <div class="panel-body">

                          <table class="table table-bordered" >

                            <thead>
                               <th>Rut</th>
                               <th>Nombre</th>
                               <th>Teléfono</th>
                               <th>Acción</th>
                            </thead>
                            <tbody>

                             <?php foreach($alumnos as $alu): ?>

                             <tr>
                               <td><?php echo e($alu->alumno_id); ?></td>
                               <td><?php echo e($alu->Nombre); ?> <?php echo e($alu->Paterno); ?> <?php echo e($alu->Materno); ?></td>
                               <td><?php echo e($alu->Telefono); ?></td>


                               <td>

                                 <div class="btn-group">
                                    <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="<?php echo e(route('Alumno.edit',$alu->alumno_id)); ?>">Editar</a></li>
                                      <li><a href="<?php echo e(url('/Docente/evaluar',$alu->alumno_id)); ?>">Evaluar</a></li>

                                    </ul>
                                 </div>
                               </td>
                             </tr>
                             <?php endforeach; ?>
                            </tbody>
                          </table>

                          <a <button href="<?php echo e(route('Alumno.create')); ?>" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-success"   >Inscribir Alumno</button></a>
                        </div>
                      </div>
              </div>
        </div>
  </div>


</div>

<script>

$(document).on("click", function(e){
    if($(e.target).is("#Alumno")){
      $("#1").show();


    }
});








</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>