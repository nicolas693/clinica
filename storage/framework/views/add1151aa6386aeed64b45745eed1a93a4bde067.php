<?php $__env->startSection('title','Paciente Nuevo'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



   <div class="page-header">
     <h1>Paciente Nuevo </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Paciente

             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <a <button href=<?php echo e(URL::previous()); ?> type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Volver</button></a>
              </p>

           </div>
          <div class="panel-body">

               <?php echo Form::open(['route'=>'Paciente.store','method'=>'POST']); ?>



               <div class="col-sm-12">
                  <?php echo form::label('RUT'); ?>

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

             <div class="col-sm-5">
                  <?php echo form::label('Sexo'); ?>

                  <?php echo Form::select('Genero',$genero,null,['id'=>'Genero','class'=>'form-control']); ?>


             </div>

              <div class="col-sm-12">
                  <?php echo form::label('Fecha Nacimiento'); ?>

                  <?php echo form::text('Fecha_Nacimiento',null,['id'=>'Fecha_Nacimiento','class'=>'form-control']); ?>


             </div>

              <div class="col-sm-4">
                  <?php echo form::label('Teléfono Fijo'); ?>

                  <?php echo form::text('Telefono_Casa',null,['id'=>'Telefono_Casa','class'=>'form-control']); ?>

             </div>


              <div class="col-sm-4">
                  <?php echo form::label('Teléfono Movil'); ?>

                  <?php echo form::text('Telefono_Movil',null,['id'=>'Telefono_Movil','class'=>'form-control']); ?>

             </div>

              <div class="col-sm-6">
                  <?php echo form::label('Calle'); ?>

                  <?php echo form::text('Calle',null,['id'=>'Calle','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-6">
                  <?php echo form::label('Número Casa'); ?>

                  <?php echo form::text('Numero_Calle',null,['id'=>'Numero_Calle','class'=>'form-control']); ?>

             </div>

             <div class="col-sm-4">
                  <?php echo form::label('Pais'); ?>

                  <?php echo form::text('Pais',null,['id'=>'Pais','class'=>'form-control']); ?>

             </div>

              <div class="col-sm-4">
                  <?php echo form::label('Región'); ?>

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
                  <?php echo form::label('Cobertura Médica'); ?>

                  <?php echo form::text('Cobertura_Medica',null,['id'=>'Cobertura_Medica','class'=>'form-control']); ?>

             </div>




             <div class="col-sm-5">

                <?php echo form::label('Clinica'); ?>

                <?php echo Form::select('clinica_id',$paciente,null,['id'=>'id_Clinica','class'=>'form-control']); ?>


             </div>
             <?php echo form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

          <?php echo Form::close(); ?>

           </div>
        </div>


     </div>
   </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>