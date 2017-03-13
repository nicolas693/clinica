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
     <li><a href="/Ficha/<?php echo e($id); ?>/verFicha"> Ver Ficha</a></li>
     <li class="active">Editar Ficha</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header"> <h1>Ficha Clínica Integral Adulto </h1> </div>
     <div class="col-md-10">
        <div class="panel panel-primary centrarIT">
          <div class="panel-heading"><b> Ficha Paciente </b></div>

          <div class="panel-body">
                <?php echo Form::model($ficha,['route'=>['Ficha.update',$id],'method'=>'PUT']); ?>


                <div class="form-group col-sm-6">
                    <?php echo form::label('Nombre :'); ?>

                     <?php echo $paciente->Nombre; ?> <?php echo $paciente->Paterno; ?> <?php echo $paciente->Materno; ?>

                     <?php echo e(Form::hidden('paciente_id',$paciente->rut)); ?>

                </div>

              <div class="form-group col-sm-6">
                <?php echo form::label('Rut : '); ?> <?php echo $paciente->rut; ?>

              </div>

                <div class="form-group col-sm-6">
                    <?php echo form::label('FechaNacimiento','Fecha de nacimiento : '); ?> <?php echo $paciente->Fecha_Nacimiento; ?>

                     <?php echo e(Form::hidden('Fecha_Nacimiento',$paciente->Fecha_Nacimiento)); ?>

                </div>

                <div class="form-group col-sm-6">
                  <?php echo form::label('TelefonoMovil','Teléfono Movil : '); ?> <?php echo $paciente->Telefono_Movil; ?>

                  <?php echo e(Form::hidden('Telefono_Movil',$paciente->Telefono_Movil)); ?>

                </div>

                <div class="form-group col-sm-6">
                  <?php echo form::label('Dirección : '); ?>

                  <?php echo $paciente->Calle; ?> <?php echo $paciente->Numero_Calle; ?>

                  <?php echo e(Form::hidden('Calle',$paciente->Calle)); ?>

                  <?php echo e(Form::hidden('Numero_Calle',$paciente->Numero_Calle)); ?>


                </div>


                <div class="form-group col-sm-12">
                  <?php echo form::label('Edad : '); ?> <?php echo e($edad); ?>

                </div>

                <div class="form-group col-sm-4">
                  <?php echo form::label('FechaControl','Fecha de ingreso: '); ?> <?php echo $ficha->Fecha_Ingreso; ?>

                </div>


                <div class="form-group col-sm-10">
                  <?php echo form::label('Ocupación'); ?>

                  <?php echo form::text('Ocupacion',null,['id'=>'Ocupacion','class'=>'form-control']); ?>

                </div>

                <div class="form-group col-sm-12">
                  <?php echo form::label('MotivoConsulta','Motivo de Consulta'); ?>

                  <?php echo form::text('Motivo_Consulta',null,['id'=>'Motivo_Consulta','class'=>'form-control']); ?>

                </div>

                <div class="form-group col-sm-12">
                  <?php echo form::label('Expectativas'); ?>

                  <?php echo form::text('Expectativas',null,['id'=>'Expectativas','class'=>'form-control']); ?>

                </div>

              </div>
                   <div class="panel-heading"><b>
                      1.Anamnesis General</b>
                    </div>
                   <div class="panel-body">

                     <div class="form-group col-sm-12">
                       <?php echo Form::label('Antecedentes Médicos'); ?>

                     </div>

                     <div class="form-group col-sm-12 ">

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('EnfCardiovasculares', 0)); ?>

                          <?php echo Form::checkbox('EnfCardiovasculares',1 ); ?>

                          <?php echo Form::label('EnfCardio','Enf. Cardiovasculares',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('EnfGastrointestinales', 0)); ?>

                          <?php echo Form::checkbox('EnfGastrointestinales',1); ?>

                          <?php echo Form::label('EnfGastro','Enf. Gastrointestinales',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('EnfRespiratorias', 0)); ?>

                          <?php echo Form::checkbox('EnfRespiratorias', 1); ?>

                          <?php echo Form::label('EnfResp','Enf. Respiratorias',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('EnfNeurologicas', 0)); ?>

                          <?php echo Form::checkbox('EnfNeurologicas', 1); ?>

                          <?php echo Form::label('EnfNeuro','Enf. Neurológicas',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('EnfIntectocontagiosas', 0)); ?>

                          <?php echo Form::checkbox('EnfIntectocontagiosas', 1); ?>

                          <?php echo Form::label('EnfInfec','Enf. Infectocontagiosas',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('DiscrasiaSanguinea', 0)); ?>

                          <?php echo Form::checkbox('DiscrasiaSanguinea', 1); ?>

                          <?php echo Form::label('Discrasia','Discrasia Sanguinea',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('Diabetes', 0)); ?>

                          <?php echo Form::checkbox('Diabetes', 1); ?>

                          <?php echo Form::label('diabetes','Diabetes',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('Alergia', 0)); ?>

                          <?php echo Form::checkbox('Alergia', 1); ?>

                          <?php echo Form::label('alergias','Alergias',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo e(Form::hidden('Embarazo', 0)); ?>

                          <?php echo Form::checkbox('Embarazo', 1); ?>

                          <?php echo Form::label('_embarazo','Embarazo',array('class'=>'nobold')); ?>

                        </div>

                        <div class=" col-sm-6">
                          <?php echo e(Form::hidden('OtraEnf', 0)); ?>

                          <?php echo Form::checkbox('OtraEnf', 1); ?>

                          <?php echo Form::label('Otraenf','Otra enfermedad',array('class'=>'nobold')); ?>

                        </div>

                      </div>

                       <div class="form-group col-sm-12">
                           <?php echo Form::label('farmacos','Fármacos en uso'); ?>

                           <?php echo Form::text('Farmacos_Uso',null,['id'=>'Farmacos_Uso','class'=>'form-control']); ?>

                       </div>

                       <div class="form-group col-sm-6">
                           <?php echo form::label('Alumno : '); ?> <?php echo e($alumno->Nombre); ?> <?php echo e($alumno->Paterno); ?>

                           <?php echo e(Form::hidden('alumno_id',$alumno->alumno_id)); ?>

                       </div>

                       <div class="form-group col-sm-6">
                           <?php echo form::label('Profesor tutor :   '); ?> <?php echo e($docente->Nombre); ?> <?php echo e($docente->Paterno); ?>

                           <?php echo e(Form::hidden('docente_id',$docente->id)); ?>

                       </div>

                       <div class="form-group col-sm-12">
                         <?php echo Form::label('Hábitos'); ?>

                       </div>

                       <div class="form-group col-sm-12">
                         <div class="col-sm-4">
                           <?php echo e(Form::hidden('Fuma', 0)); ?>

                           <?php echo Form::checkbox('Fuma', 1); ?>

                           <?php echo Form::label('fumar','Fuma',array('class'=>'nobold')); ?>

                         </div>

                         <div class="col-sm-4">
                           <?php echo e(Form::hidden('Alcohol', 0)); ?>

                           <?php echo Form::checkbox('Alcohol', 1); ?>

                           <?php echo Form::label('alcohol','Consume alcohol',array('class'=>'nobold')); ?>

                         </div>

                         <div class="col-sm-4">
                           <?php echo e(Form::hidden('Drogas', 0)); ?>

                           <?php echo Form::checkbox('Drogas', 1); ?>

                           <?php echo Form::label('drogas_','Consume drogas',array('class'=>'nobold')); ?>

                         </div>

                       </div>

                  </div>

                      <div class="panel-heading"><b>
                         2.Anamnesis Odontológica</b>
                       </div>
                      <div class="panel-body">
                        <div class="form-group col-sm-4">
                          <div class="input-group">
                            <label for="date"><b>Fecha de último control </b></label>
                              <input type="text" class="form-control datepicker" id="Fecha_Ultima_Consulta" name="Fecha_Ultima_Consulta">
                            </div>
                          </div>

                        <div class="form-group col-sm-8">
                          <?php echo form::label('Motivo Ultima Consulta'); ?>

                          <?php echo form::text('Motivo_Ultima_Consulta',null,['id'=>'Motivo_Ultima_Consulta','class'=>'form-control']); ?>

                        </div>

                        <div class="form-group col-sm-12">
                          <?php echo Form::label('Traumatismo','Antecedentes de Traumatismo Dentoalveolar'); ?>

                        </div>

                        <div class="form-group col-sm-12 ">
                            <div class="col-sm-8">
                            <?php echo Form::radio('Antecedentes_Traumatismo',0, 0,['id'=>'r1']); ?>

                            <?php echo Form::label('Tortodoncia','No ha recibido tratamiento de Ortodoncia'
                              ,array('class'=>'nobold')); ?>

                            </div>
                            <div class="col-sm-8">
                            <?php echo Form::radio('Antecedentes_Traumatismo',1, 1,['id'=>'r2']); ?>

                            <?php echo Form::label('Tortodoncia2','Si ha recibido tratamiento de Ortodoncia'
                              ,array('class'=>'nobold')); ?>

                            </div>

                          <div class="form-group col-sm-12" id="text_t1">
                            <div class="col-sm-4">
                              <?php echo form::label('DienteTrau','Indique en que Diente'); ?>

                              <?php echo form::text('DienteTraumatismo',null,['id'=>'DienteTraumatismo','class'=>'form-control']); ?>

                            </div>

                            <div class="form-group col-sm-4" >
                              <div class="input-group">
                                <label for="date" class="nobold" ><b>Fecha de traumatismo </b></label>
                                <input type="text" class="form-control datepicker2" id="fecha2" name="Fecha_Traumatismo">
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="form-group col-sm-12">
                        <?php echo Form::label('ElemH','Elementos de Hígiene'); ?>

                      </div>

                      <div class="form-group col-sm-12">
                        <div class="col-sm-3">
                          <?php echo e(Form::hidden('Cepillo', 0)); ?>

                          <?php echo Form::checkbox('Cepillo', 1); ?>

                          <?php echo Form::label('_cepillo','Cepillo',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-3">
                          <?php echo e(Form::hidden('SedaDental', 0)); ?>

                          <?php echo Form::checkbox('SedaDental', 1); ?>

                          <?php echo Form::label('_seda','Seda dental',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-3">
                          <?php echo e(Form::hidden('Dentrífico', 0)); ?>

                          <?php echo Form::checkbox('Dentrífico', 1); ?>

                          <?php echo Form::label('_dentrifico','Dentrífico',array('class'=>'nobold')); ?>

                        </div>
                        <div class="col-sm-3">
                          <?php echo e(Form::hidden('Colutorio', 0)); ?>

                          <?php echo Form::checkbox('Colutorio', 1); ?>

                          <?php echo Form::label('_colutorio','Colutorio',array('class'=>'nobold')); ?>

                        </div>
                        <div class="col-sm-3">
                          <?php echo e(Form::hidden('Otros', 0)); ?>

                          <?php echo Form::checkbox('Otros', 1, $ficha->Otros,['id'=>'chk21'] ); ?>

                          <?php echo Form::label('_otros','Otros',array('class'=>'nobold')); ?>

                        </div>
                      </div>

                      <div class="col-sm-12 form-group">
                        <div class="col-sm-6" id="text_t2">
                          <?php echo Form::label('Especifique'); ?>

                          <?php echo Form::text('NombreOtros',null,['id'=>'NombreOtros','class'=>'form-control']); ?>

                        </div>
                      </div>


                      <div class="form-group col-sm-12">
                        <div class="col-sm-6">
                          <?php echo Form::label('Anestesia','¿Le han aplicado Anestesia Dental?'); ?>

                          <div class="col-sm-8">
                            <?php echo Form::radio('Anestesia',0,false,['id'=>'r10']); ?>

                            <?php echo Form::label('nones','No',array('class'=>'nobold')); ?>

                          </div>
                          <div class="col-sm-8">
                            <?php echo Form::radio('Anestesia',1,false, ['id'=>'r11'] ); ?>

                            <?php echo Form::label('yep','Si',array('class'=>'nobold')); ?>

                          </div>
                        </div>

                        <div class="col-sm-6" id="text_t3">
                          <?php echo Form::label('Complicaciones','¿Ha tenido complicaciones al respecto?'); ?>

                          <div class="col-sm-8">
                            <?php echo Form::radio('Complicacion_Anestesia',0,false,['id'=>'r12']); ?>

                            <?php echo Form::label('nones1','No',array('class'=>'nobold')); ?>

                          </div>
                          <div class="col-sm-8">
                            <?php echo Form::radio('Complicacion_Anestesia',1,false,['id'=>'r13']); ?>

                            <?php echo Form::label('yep1','Si',array('class'=>'nobold')); ?>

                          </div>
                        </div>
                      </div>

                      <div class="col-sm-12 form-group">
                        <div class="col-sm-8" id="text_t4">
                          <?php echo form::label('Especifique2','Especifique'); ?>

                          <?php echo form::text('Complicacion',null,['id'=>'Complicacion','class'=>'form-control']); ?>

                        </div>
                      </div>

                      <div class="col-sm-12 form-group">
                        <?php echo Form::label('Procedimientos'); ?>

                      </div>

                            <div class="col-sm-12 form-group">

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Apicectomia', 0)); ?>

                                <?php echo Form::checkbox('Apicectomia', 1); ?>

                                <?php echo Form::label('_apicectomia','Apicectomía',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Blanqueamiento_Dental', 0)); ?>

                                <?php echo Form::checkbox('Blanqueamiento_Dental',1); ?>

                                <?php echo Form::label('_blanqueamiento','Blanqueamiento Dental',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Empaste', 0)); ?>

                                <?php echo Form::checkbox('Empaste',1); ?>

                                <?php echo Form::label('_empaste','Empaste',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Endodoncia', 0)); ?>

                                <?php echo Form::checkbox('Endodoncia', 1); ?>

                                <?php echo Form::label('_endodoncia','Endodoncia',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Exodoncia', 0)); ?>

                                <?php echo Form::checkbox('Exodoncia', 1); ?>

                                <?php echo Form::label('_exodoncia','Exodoncia',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Explorador_Dental', 0)); ?>

                                <?php echo Form::checkbox('Explorador_Dental', 1); ?>

                                <?php echo Form::label('_explorador','Explorador Dental',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Gingivectomía', 0)); ?>

                                <?php echo Form::checkbox('Gingivectomía', 1); ?>

                                <?php echo Form::label('_gingivectomia','Gingivectomía',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Gingivoplastía', 0)); ?>

                                <?php echo Form::checkbox('Gingivoplastía', 1); ?>

                                <?php echo Form::label('_gingivoplastia','Gingivoplastía',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Higiene_Bucodental', 0)); ?>

                                <?php echo Form::checkbox('Higiene_Bucodental', 1); ?>

                                <?php echo Form::label('_higiene','Higiene Bucodental',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Implante_Dental', 0)); ?>

                                <?php echo Form::checkbox('Implante_Dental', 1); ?>

                                <?php echo Form::label('_implante','Implante Dental',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Limpieza_Dental', 0)); ?>

                                <?php echo Form::checkbox('Limpieza_Dental', 1); ?>

                                <?php echo Form::label('_limpieza','Limpieza Dental',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Ostectomía', 0)); ?>

                                <?php echo Form::checkbox('Ostectomía', 1); ?>

                                <?php echo Form::label('_ostectomia','Ostectomía',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Remineralización_dental', 0)); ?>

                                <?php echo Form::checkbox('Remineralización_dental', 1); ?>

                                <?php echo Form::label('_remineralizacion','Remineralización Dental',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('SitioEstado', 0)); ?>

                                <?php echo Form::checkbox('SitioEstado', 1); ?>

                                <?php echo Form::label('_sitioestado','Sitio/Estado',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('Tartrectomía', 0)); ?>

                                <?php echo Form::checkbox('Tartrectomía', 1); ?>

                                <?php echo Form::label('_tartrectomia','Tartrectomía',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('TecnicaColgajo', 0)); ?>

                                <?php echo Form::checkbox('TecnicaColgajo', 1); ?>

                                <?php echo Form::label('_colgajo','Técnica de elevación del colgajo',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('TecnicaSenoMaxilar', 0)); ?>

                                <?php echo Form::checkbox('TecnicaSenoMaxilar', 1); ?>

                                <?php echo Form::label('_senomaxilar','Técnica de elevación del seno maxilar',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('RegeneracionOsea', 0)); ?>

                                <?php echo Form::checkbox('RegeneracionOsea', 1); ?>

                                <?php echo Form::label('_regeneracionosea','Técnica de regeneración ósea guiada',array('class'=>'nobold')); ?>

                              </div>

                              <div class="col-sm-6">
                                <?php echo e(Form::hidden('TerapiaFluoruro', 0)); ?>

                                <?php echo Form::checkbox('TerapiaFluoruro', 1); ?>

                                <?php echo Form::label('_fluoruro','Terapia de fluoruro',array('class'=>'nobold')); ?>

                              </div>
                            </div>

           <div class="form-group col-sm-12">
             <div class="col-sm-10">
               <?php echo form::label('Indique Alerta Médica'); ?>

               <?php echo form::text('Alerta_Medica',null,['id'=>'Alerta_Medica','class'=>'form-control']); ?>


             </div>
           </div>

           <div class="col-sm-12" style="margin-top:10px;" >
             <div class="col-sm-2">
               <?php echo Form::submit('Grabar',['name'=>'grabar','id'=>'grabar'
                 ,'content'=>'<span>Grabar</span>','class'=>'btn btn-success ']); ?>

                 <?php echo Form::close(); ?>

             </div>
             <div class="col-sm-2">
               <a <button type="button" href=<?php echo e(route('Ficha.verFicha',$id)); ?> class="btn btn-primary">Volver</button> </a>
             </div>
           </div>

        </div>
     </div>
   </div>

  <script>
    $("#text_t1").hide();
    $("#text_t2").hide();
    $("#text_t3").hide();
    $("#text_t4").hide();

  $(document).on("click", function(e){
      if($(e.target).is("#r2")){
        $("#text_t1").show();
      }
      if($(e.target).is("#r1")){
        $("#text_t1").hide();
      }
      if($(e.target).is("#chk21")){
        $("#text_t2").show();
      }
      if($(e.target).is("#r11") ){
        $("#text_t3").show();
      }
      if($(e.target).is("#r10")){
        $("#text_t3").hide();
      }
      if($(e.target).is("#r13") ){
        $("#text_t4").show();
      }
      if($(e.target).is("#r12")){
        $("#text_t4").show();
      }
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
                startDate: '-50y',
                endDate:   '0',
                autoclose: true
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
