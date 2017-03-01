<?php $__env->startSection('title','Inscribir Docente'); ?>
<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<head>
  <?php echo Html::style('css/micss.css'); ?>

</head>
<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Admin')); ?>"> Administrador</a></li>
     <li class="active">Ingresar Docente</li>
   </ol>




  <div class="row fondoC centro">
    <div class="page-header  " >
      <h1>   Docente<small></small></h1>
    </div>
    <div class="col-md-8">
       <div class="panel panel-primary">
         <div class="panel-heading">
            Inscribir Docente
          </div>
         <div class="panel-body">
            <?php echo Form::model($user,['route'=>['User.update',$user->id],'method'=>'PUT']); ?>


           <div class="col-sm-12">
              <?php echo form::label('Id usuario'); ?>

              <?php echo form::text('id',null,['id'=>'id','class'=>'form-control']); ?>


            </div>

         <div class="col-sm-6">
             <?php echo form::label('Nombre Usuario'); ?>

             <?php echo form::text('name',null,['id'=>'Nombre_Alumno','class'=>'form-control']); ?>

        </div>

        <div class="col-sm-6">
            <?php echo form::label('Email Usuario'); ?>

            <?php echo form::text('email',null,['id'=>'Nombre_Alumno','class'=>'form-control']); ?>

       </div>

       <div class="col-sm-6">
           <?php echo form::label('Permisos de usuario'); ?>

              <?php echo Form::select('idrol',$permisos,null,['id'=>'asignatura_id','class'=>'form-control']); ?>


      </div>




       <?php echo form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px; margin-left: 16px; margin-right:400px']); ?>

       <?php echo Form::close(); ?>



         </div>

        </div>
       </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>