<?php $__env->startSection('title','Editar Paciente'); ?>

<?php $__env->startSection('content'); ?>

<ol class="breadcrumb">
     <li><a href="<?php echo e(url('dashboard')); ?>">Escritorio</a></li>
     <li><a href="<?php echo e(url('Paciente')); ?>"> Pacientes</a></li>
     <li class="active">Editar paciente</li>
   </ol>


   <div class="page-header">
     <h1>Editar datos paciente </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar paciente
           </div>
          <div class="panel-body">

              <?php echo Form::open(['route'=>['Paciente.destroy',$pa->rut],'method'=>'DELETE']); ?>


             <div class="form-group">
               <label for="exampleInputPassword1">¿Desea eliminar este paciente? :</label>
             </div>
             <div class="form-group">
              <?php echo form::label('Rut : '); ?>
               <?php echo $pa->rut; ?>

             </div>

              <div class="form-group">
              <?php echo form::label('Nombre : '); ?>
               <?php echo $pa->Nombre; ?> <?php echo $pa->Paterno; ?> <?php echo $pa->Materno; ?>

             </div>


                 <?php echo form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10']); ?>


                <button type="button" id= 'cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" >Cancelar</button>

<?php echo Form::close(); ?>


           </div>
        </div>


     </div>
   </div>

<script>
                    $("#cancelar").click(function(event)
                    {
                    document.location.href = "<?php echo e(route('Paciente.index')); ?>";
                    });

                    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
