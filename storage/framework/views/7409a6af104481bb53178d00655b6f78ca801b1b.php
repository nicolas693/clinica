 

<?php $__env->startSection('content'); ?>
<head>
  <?php echo Html::style('css/micss.css'); ?>

</head>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido <?php echo e(Auth::user()->name); ?></div>

                <div class="panel-body">
                    Sesión Iniciada!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>