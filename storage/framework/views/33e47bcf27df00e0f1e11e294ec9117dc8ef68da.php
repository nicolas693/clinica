<?php $__env->startSection('title','Docente'); ?>
<?php $__env->startSection('content'); ?>

<head>
  <?php echo Html::style('css/micss.css'); ?>

  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

</head>


<ol class="breadcrumb fondoC1 ">
     <li class="active">Panel de Docente</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Docente<small></small></h1>
    </div>
    <div class="col-md-12">
        <div class="panel panel-primary" style="margin-right:10%;margin-bottom:8%;">
          <div class="panel-heading" >Menú</div>
              <div class="panel-body">
                  <div class="col-sm-4"><button type="button" id='Alumno'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Alumnos</button></div>
                  <div class="col-sm-4"><button type="button" id='Alumno2'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Alumnos Inactivos</button></div>


                    <div class="panel panel-default" id="1" style="display:none; margin-top:8%;">
                      <div class="panel-heading" ><b>Alumnos</b></div>
                        <div class="panel-body">

                          <table class="table stripe compact" id="myTable1" >

                            <thead>
                               <th>Rut</th>
                               <th>Nombre</th>
                               <th>Teléfono</th>
                               <th>Asignatura</th>
                               <th>Acción</th>
                            </thead>
                            <tbody>

                             <?php foreach($alumnos as $alu): ?>

                              <?php if($alu->activo==true): ?>

                              <tr>
                                <td><?php echo e($alu->alumno_id); ?></td>
                                <td><?php echo e($alu->Nombre); ?> <?php echo e($alu->Paterno); ?> <?php echo e($alu->Materno); ?></td>
                                <td><?php echo e($alu->Telefono); ?></td>
                                <td><?php echo e($alu->asignatura_id); ?></td>


                                <td>

                                  <div class="btn-group">
                                     <button type="button" class="btn btn-default glyphicon glyphicon-th-list"></button>
                                     <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu" role="menu">
                                       <li><a href="<?php echo e(route('Alumno.edit',$alu->alumno_id)); ?>">Editar</a></li>
                                      <!--  <li><a href="{url('/Docente/evaluar',$alu->alumno_id)}}">Evaluar</a></li> -->
                                       <li><a href="<?php echo e(route('Alumno.alta',$alu->alumno_id)); ?>">Dar de baja</a></li>

                                     </ul>
                                  </div>
                                </td>
                              </tr>

                              <?php endif; ?>
                             <?php endforeach; ?>
                            </tbody>
                          </table>

                          <a <button href="<?php echo e(route('Alumno.create')); ?>" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-success"   >Inscribir Alumno</button></a>
                        </div>
                      </div>


                      <div class="panel panel-default" id="2" style="display:none; margin-top:8%;">
                        <div class="panel-heading" ><b>Alumnos no inscritos</b></div>
                          <div class="panel-body">

                            <table class="table stripe compact" id="myTable2" >

                              <thead>
                                 <th>Rut</th>
                                 <th>Nombre</th>
                                 <th>Teléfono</th>
                                  <th>Asignatura</th>
                                 <th>Acción</th>
                              </thead>
                              <tbody>

                               <?php foreach($alumnos as $alu): ?>

                                <?php if($alu->activo==false): ?>
                                <tr>
                                  <td><?php echo e($alu->alumno_id); ?></td>
                                  <td><?php echo e($alu->Nombre); ?> <?php echo e($alu->Paterno); ?> <?php echo e($alu->Materno); ?></td>
                                  <td><?php echo e($alu->Telefono); ?></td>
                                  <td><?php echo e($alu->asignatura_id); ?></td>


                                  <td>

                                   <a <button href="<?php echo e(route('Alumno.alta',$alu->alumno_id)); ?>" type="button" id= 'Volver Inscribir'  class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Volver a inscribir</button>
                                  </td>
                                </tr>
                                <?php endif; ?>
                               <?php endforeach; ?>
                              </tbody>
                            </table>


                          </div>
                        </div>






              </div>
        </div>
  </div>


</div>
<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>

$(document).on("click", function(e){
    if($(e.target).is("#Alumno")){
      $("#1").show();
      $("#2").hide();


    }
});

$(document).on("click", function(e){
    if($(e.target).is("#Alumno2")){
      $("#2").show();
      $("#1").hide();


    }
});

$(document).ready(function() {
    $('#myTable1').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );

$(document).ready(function() {
    $('#myTable2').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>