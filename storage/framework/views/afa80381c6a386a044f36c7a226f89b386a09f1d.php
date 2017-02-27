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

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
     <li class="active">Odontograma de <?php echo e($paciente->Nombre); ?> <?php echo e($paciente->Paterno); ?></li>
   </ol>


<div class="row fondoC centro">
<div class="page-header " style="margin-right:15%;"  >
    <h1>Pieza <?php echo e($num); ?> <small></small></h1>
  </div>
  <div  style="max-height: 250px; margin-right:15%;margin-bottom:5%;">
 <?php echo Form::open(['route'=>['Problema.update',$prob->Problema_id],'method'=>'PUT']); ?>


         <div>

           <?php echo e(Form::hidden('Problema_id',$id2)); ?>

         </div>
          <div class="col-sm-6">

            <?php echo e(Form::label($probN[1])); ?>

            <?php echo e(Form::hidden($probN[1],0)); ?>

            <?php echo e(Form::checkbox($probN[1],null,$prob->Lesion_de_caries_ICDAS_3_a_6)); ?>

          </div>
          <div class="col-sm-6">
            <?php echo e(Form::label($probN[2])); ?>

            <?php echo e(Form::hidden($probN[2],0)); ?>

            <?php echo e(Form::checkbox($probN[2],null,$prob->Lesion_de_caries_ICDAS_1_y_2)); ?>

          </div>
          <div class="col-sm-6">
            <?php echo e(Form::label($probN[3])); ?>

            <?php echo e(Form::hidden($probN[3],0)); ?>

            <?php echo e(Form::checkbox($probN[3],null,$prob->Ausente)); ?>

          </div>
          <div class="col-sm-6">
            <?php echo e(Form::label($probN[4])); ?>

            <?php echo e(Form::hidden($probN[4],0)); ?>

            <?php echo e(Form::checkbox($probN[4],null,$prob->Indicacion_exodoncia)); ?>

          </div>

          <div class="col-sm-6">
            <?php echo e(Form::label($probN[5])); ?>

            <?php echo e(Form::hidden($probN[5],0)); ?>

            <?php echo e(Form::checkbox($probN[5],null,$prob->Obturacion)); ?>

          </div>
          <div class="col-sm-6">
            <?php echo e(Form::label($probN[6])); ?>

            <?php echo e(Form::hidden($probN[6],0)); ?>

            <?php echo e(Form::checkbox($probN[6],null,$prob->Obturacion_con_caries)); ?>

          </div>

          <div class="col-sm-6">
            <?php echo e(Form::label($probN[7])); ?>

            <?php echo e(Form::hidden($probN[7],0)); ?>

            <?php echo e(Form::checkbox($probN[7],null,$prob->Obturacion_deficiente)); ?>

          </div>

          <div class="col-sm-6">

            <?php echo e(Form::label($probN[8])); ?>

            <?php echo e(Form::hidden($probN[8],0)); ?>

            <?php echo e(Form::checkbox($probN[8],null,$prob->Sellante)); ?>

          </div>

          <div class="col-sm-6">

            <?php echo e(Form::label($probN[9])); ?>

            <?php echo e(Form::hidden($probN[9],0)); ?>

            <?php echo e(Form::checkbox($probN[9],null,$prob->Problema_9)); ?>

          </div>
          <div class="col-sm-6">

            <?php echo e(Form::label($probN[10])); ?>

            <?php echo e(Form::hidden($probN[10],0)); ?>

            <?php echo e(Form::checkbox($probN[10],null,$prob->Problema_10)); ?>

          </div>
          <div class="col-sm-6">

            <?php echo e(Form::label($probN[11])); ?>

            <?php echo e(Form::hidden($probN[11],0)); ?>

            <?php echo e(Form::checkbox($probN[11],null,$prob->Problema_11)); ?>

          </div>
          <div class="col-sm-6">

            <?php echo e(Form::label($probN[12])); ?>

            <?php echo e(Form::hidden($probN[12],0)); ?>

            <?php echo e(Form::checkbox($probN[12],null,$prob->Problema_12)); ?>

          </div>
          <div class="col-sm-6">

            <?php echo e(Form::label($probN[13])); ?>

            <?php echo e(Form::hidden($probN[13],0)); ?>

            <?php echo e(Form::checkbox($probN[13],null,$prob->Problema_13)); ?>

          </div>
          <div class="col-sm-6">

            <?php echo e(Form::label($probN[14])); ?>

            <?php echo e(Form::hidden($probN[14],0)); ?>

            <?php echo e(Form::checkbox($probN[14],null,$prob->Problema_14)); ?>

          </div>








  </div>
  <div class="col-sm-6" style="margin-top:3%; margin-bottom:3%;">
  <?php echo form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-10']); ?>

</div>
  <?php echo Form::close(); ?>

  <div class="col-sm-6" style="margin-top:3%; margin-bottom:3%;">
  <a <button href=<?php echo e(URL::previous()); ?> type="button"  class="btn  btn-primary" style=" margin-bottom:5%; margin-right:50%;"   >Volver</button></a>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>