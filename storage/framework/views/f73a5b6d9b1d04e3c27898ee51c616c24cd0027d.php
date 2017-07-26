<?php $__env->startSection('title','Paciente Nuevo'); ?>
<?php $__env->startSection('content'); ?>


<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Jquery -->

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="<?php echo e(asset('datePicker/css/bootstrap-datepicker3.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('datePicker/css/bootstrap-standalone.css')); ?>">
    <script src="<?php echo e(asset('datePicker/js/bootstrap-datepicker.js')); ?>"></script>
    <!-- Languaje -->
    <script src="<?php echo e(asset('datePicker/locales/bootstrap-datepicker.es.min.js')); ?>"></script>
    <?php echo Html::style('css/micss.css'); ?>


</head>

<ol class="breadcrumb fondoC1 ">
     <li class="pull-right"><a href="/Alumno/mostrar/<?php echo e($id); ?>" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
     <li class="active">Ingresar Paciente</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header"> <h1>Ingrese datos del paciente </h1> </div>
     <div class="col-md-8"> <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
     <div class="col-md-10">

        <div class="panel panel-primary centrarIT">
          <div class="panel-heading"> <b>Formulario nuevo paciente</b> </div>

          <div class="panel-body">

               <?php echo Form::open(['route'=>'Paciente.store','method'=>'POST']); ?>


               <div class="form-group col-sm-4">
                  <?php echo form::label('Rut'); ?>

                  <?php echo form::text('rut',null,['id'=>'rut','class'=>'form-control','placeholder'=>'Ej: 12345789-0']); ?>

                </div>

             <div class="form-group col-sm-12"> </div>

               <div class="form-group col-sm-4">
                   <?php echo form::label('Nombre'); ?>

                   <?php echo form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control']); ?>

              </div>

              <div class="form-group col-sm-4">
                   <?php echo form::label('Apellido Paterno'); ?>

                   <?php echo form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control']); ?>

              </div>

              <div class="form-group col-sm-4">
                   <?php echo form::label('Apellido Materno'); ?>

                   <?php echo form::text('Materno',null,['id'=>'Materno','class'=>'form-control']); ?>

              </div>




               <div class="form-group col-sm-6">
                 <div class="input-group">
                   <label for="date">Fecha Ingreso</label>
                     <input type="text" class="form-control datepicker" name="Fecha_Ingreso">

                 </div>
               </div>

               <div class="form-group col-sm-6">
                 <div class="input-group">
                   <label for="date">Fecha Nacimiento</label>
                     <input type="text" class="form-control datepicker2" name="Fecha_Nacimiento">
                 </div>
               </div>

               <div class="col-sm-12">
                    <?php echo form::label('Email'); ?>

                    <?php echo form::text('email',null,['id'=>'email','class'=>'form-control']); ?>

                </div>


             <div class="form-group col-sm-6">
               <?php echo form::label('Sexo'); ?>

               <?php echo Form::select('Genero',$genero,null,['id'=>'Genero','class'=>'form-control']); ?>

             </div>

             <div class="form-group col-sm-12"> </div>

              <div class="form-group col-sm-6">
                  <?php echo form::label('telfijo','Teléfono fijo'); ?>

                  <?php echo form::text('Telefono_Casa',null,['id'=>'Telefono_Casa','class'=>'form-control', 'placeholder'=>'Ej: 21234567' ]); ?>

             </div>


              <div class="form-group col-sm-6">
                  <?php echo form::label('telmovil','Teléfono movil'); ?>

                  <?php echo form::text('Telefono_Movil',null,['id'=>'Telefono_Movil','class'=>'form-control', 'placeholder'=>'Ej: 12345678']); ?>

             </div>


              <div class="form-group form-group col-sm-6">
                  <?php echo form::label('Calle'); ?>

                  <?php echo form::text('Calle',null,['id'=>'Calle','class'=>'form-control','placeholder'=>'Ej: Pasaje Flores del Campo 8']); ?>

             </div>

             <div class="form-group col-sm-6">
                  <?php echo form::label('numerocalle','Número de Calle'); ?>

                  <?php echo form::text('Numero_Calle',null,['id'=>'Numero_Calle','class'=>'form-control','placeholder'=>'Ej: 1234, max:4 números']); ?>

             </div>

             <div class="form-group col-sm-6">
                  <?php echo form::label('Pais'); ?>

                  <?php echo form::text('Pais',null,['id'=>'Pais','class'=>'form-control']); ?>

             </div>

              <div class="form-group col-sm-6">
                  <?php echo Form::label('region','Región'); ?>

                  <?php echo Form::select('Region',$regiones,null,['class'=>'form-control']); ?>

             </div>

             <div class="form-group col-sm-4">
                  <?php echo form::label('Comuna'); ?>

                  <?php echo form::text('Comuna',null,['id'=>'Comuna','class'=>'form-control']); ?>

             </div>

             <div class="form-group col-sm-12">
                  <?php echo form::label('Nacionalidad'); ?>

                  <?php echo form::text('Nacionalidad',null,['id'=>'Nacionalidad','class'=>'form-control']); ?>

             </div>

              <div class="form-group col-sm-12">
                  <?php echo form::label('Cobertura Médica'); ?>

                  <?php echo form::text('Cobertura_Medica',null,['id'=>'Cobertura_Medica','class'=>'form-control']); ?>

             </div>

             <div class="form-group col-sm-5">
                <?php echo form::text('clinica_id',$id,['id'=>'clinica_id','class'=>'form-control hidden']); ?>

             </div>

             <div class="form-group col-sm-12">
               <?php echo Form::submit('Ingresar Paciente',['name'=>'grabar','id'=>'grabar'
                 ,'content'=>'<span>Grabar</span>','class'=>'btn btn-success ']); ?>

             </div>

          <?php echo Form::close(); ?>

           </div>
        </div>


     </div>
   </div>

   <script>

       $('.datepicker2').datepicker({
           format: "dd/mm/yyyy",
           language: "es",
           startDate: '-100y',
           endDate:   '-5y',
           autoclose: true
       });
   </script>

   <script>
       $('.datepicker').datepicker({
           format: "dd/mm/yyyy",
           language: "es",
           startDate: '-1w',
           endDate:   '0d',
           autoclose: true
       });
   </script>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>