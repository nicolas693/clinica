<?php $__env->startSection('title','Administrador'); ?>
<?php $__env->startSection('content'); ?>

<head>
  <?php echo Html::style('css/micss.css'); ?>

</head>


<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Admin')); ?>"> Administrador</a></li>
     <li class="active">Panel Administrador</li>
   </ol>


  <div class="row fondoC centro">
    <div class="page-header" >
      <h1>Administrador<small></small></h1>
    </div>
    <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading">Menú</div>
              <div class="panel-body">
                  <button type="button" id='inscribir'  name='inscribir' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Inscribir Docente</button>
                  <button type="button" id='ver_docente'  name='ver_docente' class="btn  navbar-btn btn-info" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Ver lista de Docentes</button>
                  <button type="button" id='ver_asignatura'  name='ver_asignatura' class="btn  navbar-btn btn-info" style="margin-bottom: 1px; margin-top: 10px;margin-right: 8px;padding: 5px 20px;margin-left: 0px">Ver lista de Asignaturas</button>
              </div>
        </div>
  </div>
</div>

<script>
  $("#inscribir").click(function(event)
  {
      document.location.href = "<?php echo e(url('Docente/create')); ?>";
  });
  </script>

  <script>
    $("#ver_docente").click(function(event)
    {
        document.location.href = "<?php echo e(url('Admin/docente')); ?>";
    });
  </script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>