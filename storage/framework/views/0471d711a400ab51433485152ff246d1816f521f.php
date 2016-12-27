<?php $__env->startSection('title','Editar Paciente'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<ol class="breadcrumb">

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

           </div>
          <div class="panel-body">

               <?php echo Form::model($pa,['route'=>['Paciente.update',$pa->rut],'method'=>'PUT']); ?>



               <div class="col-sm-12">
                   <?php echo form::label('Rut'); ?>

                   <?php echo form::text('rut',null,['id'=>'rut','class'=>'form-control']); ?>

              </div>




              <div class="col-sm-4">
                  <?php echo form::label('Nombre'); ?>

                  <?php echo form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Apellido Paterno'); ?>

                  <?php echo form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Apellido Materno'); ?>

                  <?php echo form::text('Materno',null,['id'=>'Materno','class'=>'form-control']); ?>

             </div>

              <div class="col-sm-12">
                  <?php echo form::label('Fecha Ingreso'); ?>

                  <?php echo form::text('Fecha_Ingreso',null,['id'=>'Fecha_Ingreso','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-12">
                  <?php echo form::label('Genero'); ?>

                  <?php echo form::text('Genero',null,['id'=>'Genero','class'=>'form-control']); ?>

             </div>


              <div class="col-sm-12">
                  <?php echo form::label('Fecha Nacimiento'); ?>

                  <?php echo form::text('Fecha_Nacimiento',null,['id'=>'Fecha_Nacimiento','class'=>'form-control']); ?>

             </div>




              <div class="col-sm-4">
                  <?php echo form::label('Telefono Fijo'); ?>

                  <?php echo form::text('Telefono_Casa',null,['id'=>'Telefono_Casa','class'=>'form-control']); ?>

             </div>


              <div class="col-sm-4">
                  <?php echo form::label('Telefono Movil'); ?>

                  <?php echo form::text('Telefono_Movil',null,['id'=>'Telefono_Movil','class'=>'form-control']); ?>

             </div>


              <div class="col-sm-4">
                  <?php echo form::label('Telefono Oficina'); ?>

                  <?php echo form::text('Telefono_Oficina',null,['id'=>'Telefono_Oficina','class'=>'form-control']); ?>

             </div>

              <div class="col-sm-6">
                  <?php echo form::label('Calle'); ?>

                  <?php echo form::text('Calle',null,['id'=>'Calle','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-6">
                  <?php echo form::label('Numero Calle'); ?>

                  <?php echo form::text('Numero_Calle',null,['id'=>'Numero_Calle','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Pais'); ?>

                  <?php echo form::text('Pais',null,['id'=>'Pais','class'=>'form-control']); ?>

             </div>

              <div class="col-sm-4">
                  <?php echo form::label('Region'); ?>

                  <?php echo form::text('Region',null,['id'=>'Region','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Comuna'); ?>

                  <?php echo form::text('Comuna',null,['id'=>'Comuna','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-12">
                  <?php echo form::label('Nacionalidad'); ?>

                  <?php echo form::text('Nacionalidad',null,['id'=>'Nacionalidad','class'=>'form-control']); ?>

             </div>




              <div class="col-sm-12">
                  <?php echo form::label('Cobertura Medica'); ?>

                  <?php echo form::text('Cobertura_Medica',null,['id'=>'Cobertura_Medica','class'=>'form-control']); ?>

             </div>


             <div class="col-sm-5">

                <?php echo form::label('Clinica'); ?>


                <?php echo Form::select('id_Clinica',$clinica,null,['id'=>'id_Clinica','class'=>'form-control']); ?>




             </div>
                 <?php echo form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

              <?php echo Form::close(); ?>

           </div>
        </div>


     </div>
   </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>