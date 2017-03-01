<?php $__env->startSection('title','Inscribir Docente'); ?>
<?php $__env->startSection('content'); ?>


<head>
  <?php echo Html::style('css/micss.css'); ?>

</head>
<ol class="breadcrumb fondoC1 ">
     <li class="pull-right"><a href="/Admin" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     <li class="active">Ingresar Docente</li>
   </ol>





  <div class="row fondoC centro">
    <div class="page-header  " >
      <h1> Ingresar  Docente<small></small></h1>
    </div>
      <div class="col-md-8"> <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
    <div class="col-md-8">

       <div class="panel panel-primary">
         <div class="panel-heading">
            Formulario Docente
          </div>
         <div class="panel-body">
           <?php echo Form::open(['route'=>'Docente.store','method'=>'POST']); ?>


           <div class="col-sm-12">
              <?php echo form::label('Rut Docente'); ?>

              <?php echo form::text('id',null,['id'=>'id','class'=>'form-control']); ?>


            </div>
         <div class="col-sm-6">
             <?php echo form::label('Nombre'); ?>

             <?php echo form::text('Nombre',null,['id'=>'Nombre_Alumno','class'=>'form-control']); ?>

        </div>

        <div class="col-sm-6">
             <?php echo form::label('Teléfono'); ?>

             <?php echo form::text('Telefono',null,['id'=>'Telefono_Alumno','class'=>'form-control']); ?>

        </div>

        <div class="col-sm-6">
           <?php echo form::label('Código Usuario'); ?>

           <?php echo form::text('user_id',null,['id'=>'user_id','class'=>'form-control']); ?>

         </div>

        <div class="col-sm-6">
           <?php echo form::label('Asignatura'); ?>

           <?php echo Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']); ?>

        </div>


       <?php echo form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px; margin-left: 16px; margin-right:400px']); ?>

       <?php echo Form::close(); ?>



         </div>

        </div>
       </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>