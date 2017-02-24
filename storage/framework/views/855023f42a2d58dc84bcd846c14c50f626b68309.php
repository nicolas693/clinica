  
  <?php $__env->startSection('title','Sin permisos'); ?>
  <?php $__env->startSection('content'); ?>




  <head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php echo Html::style('css/micss.css'); ?>

  </head>


                 <div class="panel panel-default fondoC">

                        <h1 align="center">No tiene permisos para ingresar a esta ruta</h1>


                     <div class="panel-body ">

                       <div class="text-center">
                           <img src="<?php echo e(asset('/images/acceso-restringido.png')); ?>" />
                           <!--
                           <p>text 1 <input type="radio" name="radio1" id="r1" value="Show">
                             text 2 <input type="radio" name="radio1" id="r2" value="Nothing">
                           </p>
                           Wonderful textboxes:
                        <div class="text1">
                            <p>Textbox #1
                                <input type="text" name="text1" id="text1" maxlength="30">
                            </p>
                        </div>
                        <div class="text2">
                            <p>Textbox #2
                                <input type="text" name="text2" id="text2" maxlength="30">
                            </p>
                          </div>-->


                       </div>


                        <meta http-equiv="refresh" content="3;url=<?php echo e(URL::previous()); ?>" />


                       <!--<div class="text-center">
                           <a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span>   Volver</a>
                       </div>-->
                     </div>
             </div>


     <script>
     $(document).ready(function () {
    $(".text1").hide();
    $(".text2").hide();
    $("#r1").click(function () {
        $(".text1").show();
          $(".text2").hide();
    });
    $("#r2").click(function () {
        $(".text2").show();
          $(".text1").hide();
    });
});

     </script>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>