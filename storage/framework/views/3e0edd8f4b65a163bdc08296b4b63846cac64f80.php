<?php $__env->startSection('title','Ficha del Paciente'); ?>
<?php $__env->startSection('content'); ?>

<head>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <?php echo Html::style('css/micss.css'); ?>

      <meta charset="utf-8" />
      <title>Fechas</title>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


</head>


<div class="row fondoC centro">
<div class="page-header " style="margin-right:15%;"  >
    <h1>Pieza <?php echo e($id2); ?> <small></small></h1>
  </div>
  <div  style="max-height: 250px;overflow: auto; margin-right:15%;margin-bottom:5%;">

    <ul class="list-group" style"margin-top: 5%;">
        <li class="list-group-item">
            problema 1
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>
        <li class="list-group-item">
            problema 2
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>
        <li class="list-group-item">
            problema 3
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>
        <li class="list-group-item">
            problema 4
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>
        <li class="list-group-item">
            problema 1
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>
        <li class="list-group-item">
            problema 2
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>
        <li class="list-group-item">
            problema 3
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>
        <li class="list-group-item">
            problema 4
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
            </div>
        </li>

    </ul>

  </div>
  <a <button href=<?php echo e(URL::previous()); ?> type="button"  class="btn  btn-warning" style=" margin-bottom:5%; margin-right:50%;"   >Volver</button></a>
  <button type="button" class="btn btn-success" style=" margin-bottom:5%;">Guardar</button>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>