<?php $__env->startSection('title','Ficha de Paciente'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<html lang="es">
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
</html>

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
     <li class="active">Pacientes</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header">
       <h1>Ficha Clinica Integral Adulto </h1>
     </div>
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><b>
             Ficha Paciente @ID_Ficha</b>
           </div>
          <div class="panel-body">

                <?php echo Form::open(['route'=>'Paciente.store','method'=>'POST']); ?>


                <div class="col-sm-6">
                    <?php echo form::label('Nombre :'); ?>

                     <?php echo $paciente->Nombre; ?> <?php echo $paciente->Paterno; ?> <?php echo $paciente->Materno; ?>

                     <?php echo e(Form::hidden('Nombre',$paciente->Nombre)); ?>

                     <?php echo e(Form::hidden('Paterno',$paciente->Paterno)); ?>

                     <?php echo e(Form::hidden('Materno',$paciente->Materno)); ?>

                     <?php echo e(Form::hidden('paciente_id',$paciente->rut)); ?>

                </div>

                <div class="col-sm-6">
                    <?php echo form::label('Fecha de nacimiento : '); ?>

                     <?php echo $paciente->Fecha_Nacimiento; ?>

                     <?php echo e(Form::hidden('Fecha_Nacimiento',$paciente->Fecha_Nacimiento)); ?>

                </div>

                <div class="col-sm-6">
                  <?php echo form::label('Telefono : '); ?>

                  <?php echo $paciente->Telefono_Movil; ?>

                  <?php echo e(Form::hidden('Telefono_Movil',$paciente->Telefono_Movil)); ?>

                </div>

                <div class="col-sm-6">
                  <?php echo form::label('Direccion : '); ?>

                  <?php echo $paciente->Calle; ?> <?php echo $paciente->Numero_Calle; ?>

                  <?php echo e(Form::hidden('Calle',$paciente->Calle)); ?>

                  <?php echo e(Form::hidden('Numero_Calle',$paciente->Numero_Calle)); ?>


                </div>


                <div class="col-sm-12">
                  <?php echo form::label('Edad : '); ?> <?php echo e($edad); ?>


                </div>
                <div class="col-sm-4">
                  <?php echo form::label('Fecha de Control'); ?>

                  <p style="font-size: 15px"><b><?php echo date("d/m/Y");?></b></p>
                </div>
                <div class="col-sm-12">
                </div>

                <div class="col-sm-8">
                  <?php echo form::label('Ocupación'); ?>

                  <?php echo form::text('Ocupacion',null,['id'=>'Ocupacion','class'=>'form-control']); ?>

                </div>

                <div class="col-sm-12">
                  <?php echo form::label('Motivo_Consulta'); ?>

                  <?php echo form::text('Motivo_Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control']); ?>

                </div>

                <div class="col-sm-12">
                  <?php echo form::label('Expectativas'); ?>

                  <?php echo form::text('Expectativas',null,['id'=>'Expectativas','class'=>'form-control']); ?>

                </div>

              </div>
                   <div class="panel-heading"><b>
                      1.Anamnesis General</b>
                    </div>
                   <div class="panel-body">
                    <div>
                      <div class="col-sm-12 radio">
                        <p><b>Antecedentes Médicos</b></p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c1">Enf. Cardiovasculares</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c2">Enf. Gastrointestinales</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c3">Enf. Respiratorias</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c4">Enf. Neurológicas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c5">Enf. Infectocontagiosas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c6">Discrasias Sanguíneas</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c7">Diabetes</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c8">Alergias</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c9">Embarazo</p>
                        <p class="col-sm-4"> <input type="checkbox" name="chk1" id="c10">Otra</p>
                       </div>

                       <div class="col-sm-12" style="margin-bottom:20px;">
                           <?php echo form::label('Fármacos en uso'); ?>

                           <?php echo form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control']); ?>

                       </div>

                       <div class="col-sm-6">
                           <?php echo form::label('alumno_id : '); ?> <?php echo e($alumno->alumno_id); ?>

                           <?php echo e(Form::hidden('alumno_id',$alumno->alumno_id)); ?>


                       </div>
                       <div class="col-sm-6">
                           <?php echo form::label('Profesor tutor :   '); ?> <?php echo e($docente->id); ?>

                           <?php echo e(Form::hidden('docente_id',$docente->id)); ?>

                       </div>

                       <div class="col-sm-12 checkbox">
                         <p><b>Hábitos</b></p>
                         <p class="col-sm-2"> <input type="checkbox" name="chk2" id="c11">Fuma</p>
                         <p class="col-sm-2"> <input type="checkbox" name="chk2" id="c12">Alcohol</p>
                         <p class="col-sm-2"> <input type="checkbox" name="chk2" id="c13">Drogas</p>
                      </div>
                    </div>
                  </div>

                      <div class="panel-heading"><b>
                         2.Anamnesis Odontológica</b>
                       </div>
                      <div class="panel-body">
                        <div class="col-sm-4">
                          <div class="input-group">
                            <label for="date"><b>Fecha de último control: </b></label>
                              <input type="text" class="form-control datepicker" id="Fecha_Ultima_Consulta" name="Fecha_Ultima_Consulta">
                            </div>
                          </div>

                        <div class="col-sm-8">
                          <?php echo form::label('Motivo_Ultima_Consulta'); ?>

                          <?php echo form::text('Motivo_Ultima_Consulta',null,['id'=>'Motivo_Ultima_Consulta','class'=>'form-control']); ?>

                        </div>

                        <div class="col-sm-8 radio">
                          <p><b>Antecedentes Traumatismo Dentoalveolar</b></p>
                          <p class="col-sm-8"> <input type="radio" name="radio1" id="r1" value="Nothing">No ha recibido tratamiento de ortodoncia</p>
                          <p class="col-sm-8"> <input type="radio" name="radio1" id="r2" value="Show">Si ha recibido tratamiento de ortodoncia</p>
                          <div class="text2 black">
                            <div class="col-sm-4">
                                <?php echo form::label('Diente'); ?>

                                <?php echo form::text('Diente_Traumatismo',null,['Diente'=>'id','class'=>'form-control']); ?>

                            </div>
                           </div>
                         </div>

                         <div class="col-sm-12 checkbox">
                           <p><b>Elementos de Higiene</b></p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c14">Cepillo</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c15">Seda Dental</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c16">Dentrífico</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c17">Colutorio</p>
                           <p class="col-sm-3"> <input type="checkbox" name="chk3" id="c18">Otros</p>
                          </div>
                          <div class="col-sm-6 radio2">
                            <p><b>¿Le han aplicado Anestesia Dental?</b></p>
                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r3" value="Nothing">No</p>
                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r4" value="Show">Si</p>
                            </div>
                            <div class="col-sm-6 radio3">
                              <p><b>¿Ha tenido complicaciones al respecto?</b></p>
                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r5" value="Nothing">No</p>
                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r6" value="Show">Si</p>
                              <div class="text3">
                                <div class="col-sm-12">
                                    <?php echo form::label('Especifique'); ?>

                                    <?php echo form::text('Detalle',null,['Detalle'=>'id','class'=>'form-control']); ?>

                                </div>
                               </div>
                             </div>

                        <div class="col-sm-12 form-group">
                        <p><b>Procedimientos</b></p>
                         <form action="../php/select-action.php" method="post">
                              <select name="Procedimientos">
                                <option>Procedimientos a realizar</option>
                                <?php
                                $Procedimientos = array(
                                  "Apicectomía",
                                  "Blanqueamiento dental",
                                  "Empaste",
                                  "Endodoncia",
                                  "Exodoncia",
                                  "Explorador Dental",
                                  "Gingivectomía",
                                  "Gingivoplastía",
                                  "Higiene Bucodental",
                                  "Implante Dental",
                                  "Limpieza Dental",
                                  "Ostectomía",
                                  "Remineralización dental",
                                  "Sitio/Estado",
                                  "Tartrectomía",
                                  "Técnica de elevación del colgajo",
                                  "Técnica de elevación del seno maxilar",
                                  "Técnica de regeneración ósea guiada",
                                  "Terapia de fluoruro");
                                foreach ($Procedimientos as $pro)
                                {
                                  ?>
                                  <option value="<?php echo strtolower($pro);?>"><?php echo $pro; ?></option>
                                  <?php
                                }
                                ?>
                                <div class="boton">
                                  <?php echo form::submit('Agregar',['name'=>'Agregar','id'=>'agregar','content'=>'<span>Agregar</span>','class'=>'btn btn-default btn-sm m-t-10']); ?>

                                  <?php echo Form::close(); ?>

                                </div>
                          </form>
                  <div class="col-sm-12 form-group">
                    <p><b>Insumos necesarios</b></p>
                      <form action="../php/select-action.php" method="post">
                        <select name="Insumos">
                        <option>Insumos</option>
                        <?php
                        $Insumos = array(
                          "Alginmax",
                          "Alginkid",
                          "Alginplus Tropical",
                          "Servilletas Dentales",
                          "Eyector de saliva",
                          "Manga de esterilización",
                          "Tórula de algodón");
                        foreach ($Insumos as $in)
                        {
                          ?>
                          <option value="<?php echo strtolower($in);?>"><?php echo $in; ?></option>
                          <?php
                        }
                        ?>
                        <div class="boton">
                            <?php echo form::submit('Agregar',['name'=>'Agregar','id'=>'agregar','content'=>'<span>Agregar</span>','class'=>'btn btn-default btn-sm m-t-10']); ?>

                            <?php echo Form::close(); ?>

                        </div>

           </div>

           <div class="col-sm-12">
             <a <button type="button" href=<?php echo e(route('Ficha.index',$id)); ?> class="btn btn-warning">Volver</button> </a>
             <?php echo form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success btn-sm m-t-10','style'=>'margin-top: 26px; margin-left: 200px;']); ?>

             <?php echo Form::close(); ?>

           </div>

        </div>
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
  <script>
            $(document).ready(function () {
            $(".radio3").hide();
            $("#r3").click(function () {
                $(".text1").show();
                  $(".radio3").hide();
            });
            $("#r4").click(function () {
                $(".radio3").show();
                  $(".text1").hide();
            });

        });
  </script>
  <script>
            $(document).ready(function () {
            $(".text3").hide();
            $("#r5").click(function () {
                $(".text1").show();
                  $(".text3").hide();
            });
            $("#r6").click(function () {
                $(".text3").show();
                  $(".text1").hide();
            });

        });
  </script>
  <script>
           $('.datepicker').datepicker({
               format: "dd/mm/yyyy",
               language: "es",
               startDate: '-100y',
               endDate:   '0d',
               autoclose: true
       });
   </script>
   <script>
            $('.datepicker2').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                startDate: '-100y',
                endDate:   '+1d',
                autoclose: true
        });
    </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>