<?php $__env->startSection('title','Inscribir Docente'); ?>
<?php $__env->startSection('content'); ?>

  <ol class="breadcrumb">
       <li><a href="<?php echo e(url('Docente')); ?>"> Docente</a></li>
       <li class="active">Inscribir Nuevo Docente</li>
     </ol>
  <div class="page-header" >
    <h1>Docente<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default">
         <div class="panel-heading">
            Inscribir Alumno

         <div class="panel-body">
           <?php echo Form::open(['route'=>'Docente.store','method'=>'POST']); ?>



           <div class="col-sm-12">
              <?php echo form::label('Rut Docente'); ?>

              <?php echo form::text('id',null,['id'=>'id','class'=>'form-control']); ?>


         </div>
         <div class="col-sm-4">
             <?php echo form::label('Nombre'); ?>

             <?php echo form::text('Nombre_Docente',null,['id'=>'Nombre_Alumno','class'=>'form-control']); ?>

        </div>


        <div class="col-sm-4">
             <?php echo form::label('Teléfono'); ?>

             <?php echo form::text('Telefono_Docente',null,['id'=>'Telefono_Alumno','class'=>'form-control']); ?>

        </div>

        <div class="col-sm-5">
           <?php echo form::label('Asignatura'); ?>

           <?php echo Form::select('asignatura_id',$asignatura,null,['id'=>'asignatura_id','class'=>'form-control']); ?>

        </div>



      </div>
          <?php echo form::submit('Inscribir Alumno',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

       <?php echo Form::close(); ?>

    </div>



         </div>



       </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>