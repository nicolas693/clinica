<?php $__env->startSection('title','Ficha de Paciente Nuevo'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


   <div class="page-header">
     <h1>Ficha Paciente Nuevo </h1>
   </div>

   <div class="row">
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><b>
             Ficha del Nuevo Paciente</b>
           </div>
          <div class="panel-body">

               <?php echo Form::open(['route'=>'Paciente.store','method'=>'POST']); ?>


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
               <div class="col-sm-4">
                    <?php echo form::label('RUT'); ?>

                    <?php echo form::text('RUT',null,['id'=>'rut','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-8">
                    <?php echo form::label('Motivo_Consulta'); ?>

                    <?php echo form::text('Motivo de Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Antecedentes Médicos'); ?>

                    <?php echo form::text('Antecedentes Médicos',null,['id'=>'Antecedentes_Medicos','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Fármacos en uso'); ?>

                    <?php echo form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Hábitos'); ?>

                    <?php echo form::text('Hábitos',null,['id'=>'Habitos','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12">
                    <?php echo form::label('Antecedentes de traumatismos Dentoalveolar'); ?>

                    <?php echo form::text('Antecedentes traumatismos Dentoalveolar',null,['id'=>'Antecedentes de traumatismos Dentoalveolar','class'=>'form-control']); ?>

               </div>
               <div class="col-sm-12 radio">
               <p><b>Tratamiento de Ortodoncia</b></p>
                    <label>
                     <input type="radio" name="radio1" id="r1" value="Nothing" checked>
                      No ha recibido tratamiento de ortodoncia
                    </label>
                </div>
                <div class="col-sm-12 radio">
                    <label>
                      <input type="radio" name="radio1" id="r2" value="Show">
                      Si ha recibido tratamiento de ortodoncia
                    </label>
                    <div class="text">
                        <?php echo form::label(''); ?>

                        <?php echo form::text('',null,['id'=>'Tratamiento_Ortodoncia','class'=>'form-control']); ?>

                    </div>
                </div>
                <div>
                <?php echo form::submit('Volver',['name'=>'Siguiente','id'=>'volver','content'=>'<span>Volver</span>','class'=>'btn btn-primary btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

                <?php echo Form::close(); ?>

                

                <?php echo form::submit('Siguiente',['name'=>'Siguiente','id'=>'siguiente','content'=>'<span>Siguiente</span>','class'=>'btn btn-success btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

                <?php echo Form::close(); ?>

                </div>
           </div>
        </div>
     </div>
   </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>