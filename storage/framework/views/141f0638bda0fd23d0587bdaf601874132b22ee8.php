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
     <li><a href="<?php echo e(url('Ficha',$id)); ?>"> Ver Ficha</a></li>
     <li class="active">Ingresar Ficha</li>
   </ol>


   <div class="row fondoC centro">
     <div class="page-header">
       <h1>Ficha Clinica Integral Adulto </h1>
     </div>
     <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading"><b> Ficha Paciente </b></div>

          <div class="panel-body">
                <?php echo Form::open(['route'=>['Ficha.store'],'method'=>'POST']); ?>


                <div class="col-sm-6">
                    <?php echo form::label('Nombre :'); ?>

                     <?php echo $paciente->Nombre; ?> <?php echo $paciente->Paterno; ?> <?php echo $paciente->Materno; ?>

                     <?php echo e(Form::hidden('paciente_id',$paciente->rut)); ?>

                </div>

              <div class="col-sm-6">
                <?php echo form::label('Rut : '); ?>

                <?php echo $paciente->rut; ?>

              </div>

                <div class="col-sm-6">
                    <?php echo form::label('FechaNacimiento','Fecha de nacimiento : '); ?>

                     <?php echo $paciente->Fecha_Nacimiento; ?>

                     <?php echo e(Form::hidden('Fecha_Nacimiento',$paciente->Fecha_Nacimiento)); ?>

                </div>

                <div class="col-sm-6">
                  <?php echo form::label('TelefonoMovil','Teléfono Movil : '); ?>

                  <?php echo $paciente->Telefono_Movil; ?>

                  <?php echo e(Form::hidden('Telefono_Movil',$paciente->Telefono_Movil)); ?>

                </div>

                <div class="col-sm-6">
                  <?php echo form::label('Dirección : '); ?>

                  <?php echo $paciente->Calle; ?> <?php echo $paciente->Numero_Calle; ?>

                  <?php echo e(Form::hidden('Calle',$paciente->Calle)); ?>

                  <?php echo e(Form::hidden('Numero_Calle',$paciente->Numero_Calle)); ?>


                </div>


                <div class="col-sm-12">
                  <?php echo form::label('Edad : '); ?> <?php echo e($edad); ?>

                </div>

                <div class="col-sm-4">
                  <?php echo form::label('FechaControl','Fecha de Control'); ?> <p style="font-size: 15px"><b><?php echo date("d/m/Y");?></b></p>
                </div>


                <div class="col-sm-10" style="margin-top:10px; margin-left:0px;">
                  <?php echo form::label('Ocupación'); ?>

                  <?php echo form::text('Ocupacion',null,['id'=>'Ocupacion','class'=>'form-control']); ?>

                </div>

                <div class="col-sm-12">
                  <?php echo form::label('MotivoConsulta','Motivo de Consulta'); ?>

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

                     <div class="col-sm-12">
                       <?php echo Form::label('Antecedentes Médicos'); ?>

                     </div>

                     <div class="col-sm-12 ">
                        <div class="col-sm-6">
                          <?php echo Form::checkbox('EnfCardiovasculares',1 ,false); ?>

                          <?php echo Form::label('EnfCardio','Enf. Cardiovasculares',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('EnfGastrointestinales',1 ,false); ?>

                          <?php echo Form::label('EnfGastro','Enf. Gastrointestinales',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('EnfRespiratorias', 1 ,false); ?>

                          <?php echo Form::label('EnfResp','Enf. Respiratorias',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('EnfNeurologicas', 1 ,false); ?>

                          <?php echo Form::label('EnfNeuro','Enf. Neurológicas',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('EnfIntectocontagiosas', 1, false ); ?>

                          <?php echo Form::label('EnfInfec','Enf. Infectocontagiosas',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('DiscrasiaSanguinea', 1, false ); ?>

                          <?php echo Form::label('Discrasia','Discrasia Sanguinea',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('Diabetes', 1, false ); ?>

                          <?php echo Form::label('diabetes','Diabetes',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('Alergias', 1, false ); ?>

                          <?php echo Form::label('alergias','Alergias',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('Embarazo', 1, false ); ?>

                          <?php echo Form::label('_embarazo','Embarazo',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-6">
                          <?php echo Form::checkbox('OtraEnf', 1, false ); ?>

                          <?php echo Form::label('Otraenf','Otra enfermedad',array('class'=>'nobold')); ?>

                        </div>

                      </div>

                       <div class="col-sm-12" style="margin-top:10px;">
                           <p><b>Fármacos en uso</b></p>
                           <?php echo form::text('Fármacos en uso',null,['id'=>'Farmacos_Uso','class'=>'form-control']); ?>

                       </div>

                       <div class="col-sm-6">
                           <?php echo form::label('Alumno : '); ?> <?php echo e($alumno->Nombre); ?> <?php echo e($alumno->Paterno); ?>

                           <?php echo e(Form::hidden('alumno_id',$alumno->alumno_id)); ?>

                       </div>

                       <div class="col-sm-6">
                           <?php echo form::label('Profesor tutor :   '); ?> <?php echo e($docente->Nombre); ?> <?php echo e($docente->Paterno); ?>

                           <?php echo e(Form::hidden('docente_id',$docente->id)); ?>

                       </div>

                       <div class="col-sm-12" style="margin-top:10px;">
                         <?php echo Form::label('Hábitos'); ?>

                       </div>

                       <div class="col-sm-12">

                         <div class="col-sm-4">
                           <?php echo Form::checkbox('Fuma', 1, false ); ?>

                           <?php echo Form::label('fumar','Fuma',array('class'=>'nobold')); ?>

                         </div>

                         <div class="col-sm-4">
                           <?php echo Form::checkbox('Alcohol', 1, false ); ?>

                           <?php echo Form::label('alcohol','Consume alcohol',array('class'=>'nobold')); ?>

                         </div>

                         <div class="col-sm-4">
                           <?php echo Form::checkbox('Drogas', 1, false ); ?>

                           <?php echo Form::label('drogas_','Consume drogas',array('class'=>'nobold')); ?>

                         </div>

                       </div>

                  </div>

                      <div class="panel-heading"><b>
                         2.Anamnesis Odontológica</b>
                       </div>
                      <div class="panel-body">
                        <div class="col-sm-4">
                          <div class="input-group">
                            <label for="date"><b>Fecha de último control </b></label>
                              <input type="text" class="form-control datepicker" id="Fecha_Ultima_Consulta" name="Fecha_Ultima_Consulta">
                            </div>
                          </div>

                        <div class="col-sm-8">
                          <?php echo form::label('Motivo Ultima Consulta'); ?>

                          <?php echo form::text('Motivo_Ultima_Consulta',null,['id'=>'Motivo_Ultima_Consulta','class'=>'form-control']); ?>

                        </div>

                        <div class="col-sm-12" style="margin-top:10px;">
                          <?php echo Form::label('Traumatismo','Antecedentes de Traumatismo Dentoalveolar'); ?>

                        </div>

                        <div class="col-sm-12 ">
                          <div class="col-sm-8">
                          <?php echo Form::radio('Antecedentes_Traumatismo',0,false,['id'=>'r1']); ?>

                          <?php echo Form::label('Tortodoncia','No ha recibido tratamiento de Ortodoncia'
                            ,array('class'=>'nobold')); ?>

                          </div>

                          <div class="col-sm-8">
                          <?php echo Form::radio('Antecedentes_Traumatismo',1,false ,['id'=>'r2']); ?>

                          <?php echo Form::label('Tortodoncia2','Si ha recibido tratamiento de Ortodoncia'
                            ,array('class'=>'nobold')); ?>

                          </div>

                          <div class="col-sm-12" id="text_t1">
                            <div class="col-sm-4">
                              <?php echo form::label('DienteTrau','Indique en que Diente'); ?>

                              <?php echo form::text('DienteTraumatismo',null,['id'=>'DienteTraumatismo','class'=>'form-control']); ?>

                            </div>

                            <div class="col-sm-4" >
                              <div class="input-group">
                                <label for="date" class="nobold" ><b>Fecha de traumatismo </b></label>
                                <input type="text" class="form-control datepicker2" id="fecha2" name="Fecha_Traumatismo">
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <?php echo Form::label('ElemH','Elementos de Hígiene'); ?>

                      </div>

                      <div class="col-sm-12">
                        <div class="col-sm-3">
                          <?php echo Form::checkbox('Cepillo', 1, false ); ?>

                          <?php echo Form::label('_cepillo','Cepillo',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-3">
                          <?php echo Form::checkbox('SedaDental', 1, false ); ?>

                          <?php echo Form::label('_seda','Seda dental',array('class'=>'nobold')); ?>

                        </div>

                        <div class="col-sm-3">
                          <?php echo Form::checkbox('Dentrifico', 1, false ); ?>

                          <?php echo Form::label('_dentrifico','Dentrífico',array('class'=>'nobold')); ?>

                        </div>
                        <div class="col-sm-3">
                          <?php echo Form::checkbox('Colutorio', 1, false ); ?>

                          <?php echo Form::label('_colutorio','Colutorio',array('class'=>'nobold')); ?>

                        </div>
                        <div class="col-sm-3">
                          <?php echo Form::checkbox('Otros', 1, false,['id'=>'chk21'] ); ?>

                          <?php echo Form::label('_otros','Otros',array('class'=>'nobold')); ?>

                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="col-sm-6" id="text_t2">
                          <?php echo Form::label('Especifique'); ?>

                          <?php echo Form::text('nombre_otros',null,['id'=>'NombreOtros','class'=>'form-control']); ?>

                        </div>
                      </div>

                          <div class="col-sm-6 radio2" style="margin-top:10px">
                            <?php echo Form::label('Anestesia','¿Le han aplicado Anestesia Dental?'); ?>

                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r3" value="Nothing">No</p>
                            <p class="col-sm-8"> <input type="radio" name="radio2" id="r4" value="Show">Si</p>
                            </div>
                            <div class="col-sm-6 radio3">
                              <?php echo Form::label('Complicaciones','¿Ha tenido complicaciones al respecto?'); ?>

                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r5" value="Nothing">No</p>
                              <p class="col-sm-8"> <input type="radio" name="radio3" id="r6" value="Show">Si</p>
                              <div class="text3">
                                <div class="col-sm-12" style="margin-right:50px;">
                                    <?php echo form::label('Especifique','Especifique'); ?>

                                    <?php echo form::text('Complicacion',null,['id'=>'Complicacion','class'=>'form-control']); ?>

                                </div>
                               </div>
                             </div>

                        <div class="col-sm-8 form-group">
                            <p><b>Procedimientos a realizar</b></p>
                              <?php echo Form::select('Procedimiento',$procedimientos,null,
                                ['id'=>'Nombre', 'class'=>'form-control']); ?>

                        </div>

                  <div class="col-sm-8 form-group">
                    <p><b>Insumos necesarios</b></p>
                      <?php echo Form::select('Insumos',$insumos,null,
                        ['id'=>'insumos','class'=>'form-control']); ?>

                  </div>

           <div class="col-sm-10 form-group">
             <?php echo form::label('Indique Alerta Médica'); ?>

             <?php echo form::text('Alerta_Medica',null,['id'=>'Alerta_Medica','class'=>'form-control']); ?>

           </div>

           <div class="col-sm-12">
             <?php echo Form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-success ']); ?>

             <a <button type="button" href=<?php echo e(route('Ficha.index',$id)); ?> class="btn btn-primary">Volver</button> </a>
             <?php echo Form::close(); ?>

           </div>

        </div>
     </div>
   </div>

  <script>
    $("#text_t1").hide();
    $("#text_t2").hide();

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

<!--
<div class="col-sm-12" style="margin-top:10px;">
  {!Form::label('Traumatismo','Antecedentes de Traumatismo Dentoalveolar')!!}
</div>

<div class="col-sm-12 ">
  <div class="col-sm-8">
  {!Form::radio('Antecedentes_Traumatismo',0,false,['id'=>'r1']) !!}
  {!Form::label('Tortodoncia','No ha recibido tratamiento de Ortodoncia')!!}
  </div>

  <div class="col-sm-8">
  {!Form::radio('Antecedentes_Traumatismo',1,false ,['id'=>'r2']) !!}
  {!Form::label('Tortodoncia2','Si ha recibido tratamiento de Ortodoncia')!!}
  </div>

  <div class="col-sm-12" id="text_t1">
    <div class="col-sm-6">
      {!form::label('DienteTrau','Indique en que Diente: ' )!!}
      {!form::text('DienteTraumatismo',null,['Diente'=>'id','class'=>'form-control'])!!}
    </div>

    <div class="col-sm-6" >
      <div class="input-group">
        <label for="date" ><b>Fecha de traumatismo </b></label>
        <input type="text" class="form-control datepicker2" id="fecha2" name="Fecha_Traumatismo">
      </div>
    </div>
</div>
</div>

-->

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>