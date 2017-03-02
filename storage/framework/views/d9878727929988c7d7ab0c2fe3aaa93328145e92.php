<?php $__env->startSection('title','Administrador'); ?>
<?php $__env->startSection('content'); ?>

<head>
  <?php echo Html::style('css/micss.css'); ?>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

</head>


<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Admin')); ?>"> Administrador</a></li>
     <li class="active">Panel Administrador</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Administrador<small></small></h1>
    </div>
    <div class="col-md-12">
        <div class="panel panel-primary" style="margin-right:10%;">
          <div class="panel-heading">Menú</div>
              <div class="panel-body">
                  <div class="col-sm-4"><button type="button" id='docente'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Docentes</button></div>


                    <div class="col-sm-4"><button type="button" id='usuario'  name='ver_docente' class="btn  navbar-btn btn-info" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Usuarios</button></div>


                    <div class="panel panel-default" id="1" style="display:none; margin-top:8%;">
                      <div class="panel-heading" ><b>Docentes</b></div>
                        <div class="panel-body">

                          <table class="table table-bordered" >

                            <thead>
                               <th>Rut</th>
                               <th>Nombre</th>
                               <th>Teléfono</th>
                               <th>Acción</th>
                            </thead>
                            <tbody>

                             <?php foreach($doce as $do): ?>

                             <tr>
                               <td><?php echo e($do->id); ?></td>
                               <td><?php echo e($do->Nombre); ?> <?php echo e($do->Paterno); ?> <?php echo e($do->Materno); ?></td>
                               <td><?php echo e($do->Telefono); ?></td>

                               <td><a <button href="<?php echo e(route('Docente.edit',$do->id)); ?>" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>

                               </td>
                             </tr>
                             <?php endforeach; ?>
                            </tbody>
                          </table>

                          <a <button href="<?php echo e(route('Docente.create')); ?>" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-success"   >Inscribir Docente</button></a>



                        </div>
                      </div>






                        <div class="panel panel-default" id="3" style="display:none; margin-top:8%;">
                          <div class="panel-heading" ><b>Usuarios</b></div>
                            <div class="panel-body">
                              <table class="table table-bordered" >
                                <thead>
                                   <th>id</th>
                                   <th>Nombre</th>
                                   <th>E-mail</th>
                                   <th>Permisos de : </th>
                                   <th>Acción</th>
                                </thead>
                                <tbody>

                                 <?php foreach($user as $us): ?>

                                 <?php if($us->idrol!=1): ?>
                                 <tr>
                                   <td><?php echo e($us->id); ?></td>
                                   <td><?php echo e($us->name); ?></td>
                                    <td><?php echo e($us->email); ?></td>
                                    <?php if($us->idrol==1): ?>
                                      <td>Administrador</td>
                                    <?php endif; ?>
                                    <?php if($us->idrol==2): ?>
                                      <td>Docente</td>
                                    <?php endif; ?>
                                    <?php if($us->idrol==3): ?>
                                      <td> Alumno </td>
                                    <?php endif; ?>
                                    <?php if($us->idrol==4): ?>
                                      <td> Invitado</td>
                                    <?php endif; ?>


                                   <td><a <button href="<?php echo e(route('User.edit',$us->id)); ?>" type="button" id= 'Editar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" style ="margin-left: 20px"  >Editar</button></a>

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


<script>

$(document).on("click", function(e){
    if($(e.target).is("#docente")){
      $("#1").show();

      $("#3").hide();
    }
});




$(document).on("click", function(e){
    if($(e.target).is("#usuario")){
      $("#3").show();

      $("#1").hide();

    }
});



</script>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>