<?php $__env->startSection('title','Ficha del Paciente'); ?>
<?php $__env->startSection('content'); ?>

<head><?php echo Html::style('css/micss.css'); ?> </head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
     <li><a href="<?php echo e(url('Ficha',$id)); ?>">Menú Ficha </a></li>
     <li class="active">Ficha Paciente</li>
</ol>

<div class="row fondoC centro">
    <div class="page-header" style="margin-right:350px;" > <h1>Antecedentes del Paciente<small></small></h1> </div>

    <div class="col-md-10">
      <div class="panel panel-primary centrarIT" >
        <div class="panel-heading">
           Datos Paciente
         </div>
             <div class="panel-body">

               <?php echo Form::open(); ?>

                 <div class="form-group col-sm-6">
                   <?php echo form::label('Nombre : '); ?>

                   <?php echo $paciente->Nombre; ?> <?php echo $paciente->Paterno; ?> <?php echo $paciente->Materno; ?>

                </div>

                <div class="form-group col-sm-6">
                   <?php echo form::label('Rut : '); ?>

                    <?php echo $paciente->rut; ?>

                </div>

                <div class="form-group col-sm-6">
                   <?php echo form::label('Sexo : '); ?>

                    <?php echo $paciente->Genero; ?>

                </div>

                <div class="form-group col-sm-6">
                   <?php echo form::label('Teléfono : '); ?>

                    <?php echo $paciente->Telefono_Movil; ?>

                </div>

                <div class="form-group col-sm-6">
                   <?php echo form::label('Dirección : '); ?>

                    <?php echo $paciente->Calle; ?> <?php echo $paciente->Numero_calle; ?>

                </div>

                <div class="form-group col-sm-6">
                   <?php echo form::label('Cobertura Médica : '); ?>

                    <?php echo $paciente->Cobertura_Medica; ?>

                </div>


                <?php echo Form::close(); ?>


                <div class="btn-group">
                  <a <button type="button" href=<?php echo e(route('Ficha.index',$id)); ?> class="btn btn-primary">Volver</button></a>
                  <a <button href=<?php echo e(route('Ficha.edit',$id)); ?> type="button"  class="btn btn-success">Editar Ficha</button> </a>
                </div>
          </div>
        </div>


        <div class="panel panel-primary centrarIT">
          <div class="panel-heading">Anamnesis General</div>

          <div class="panel-body">
            <div class="form-group col-sm-6">
              <?php echo Form::label('ocupacion','Ocupación: '); ?>

              <?php echo $ficha_exists->Ocupacion; ?>

            </div>

            <div class="form-group col-sm-6">
              <?php echo Form::label('motivoconsulta','Motivo de Consulta: '); ?>

              <?php echo $ficha_exists->Motivo_Consulta; ?>

            </div>

            <div class="form-group col-sm-6">
              <?php echo Form::label('expectativas','Expectativas: '); ?>

              <?php echo $ficha_exists->Expectativas; ?>

            </div>

            <div class="form-group col-sm-6">
              <?php echo Form::label('fechaingreso','Fecha de ingreso: '); ?>

              <?php echo $ficha_exists->Fecha_Ingreso; ?>

            </div>

            <div class="form-group col-sm-12">
              <?php echo Form::label('antecedentes','Antecedentes Médicos'); ?>

            </div>

            <div class="form-group col-sm-12">

              <div class="col-sm-6">
                <?php echo Form::checkbox('cardiovascular',null,$ficha_exists->EnfCardiovasculares, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf1','Enfermedades Cardiovasculares',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('gastrointestinales',null,$ficha_exists->EnfGastrointestinales, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf2','Enfermedades Gastrointestinales',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('respiratorias',null,$ficha_exists->EnfRespiratorias, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf3','Enfermedades Respiratorias',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('neurologicas',null,$ficha_exists->EnfNeurologicas, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf4','Enfermedades Neurológicas',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('infectocontagiosas',null,$ficha_exists->EnfIntectocontagiosas, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf5','Enfermedades Infectocontagiosas',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('discrasia',null,$ficha_exists->DiscrasiaSanguinea, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf6','Discrasia Sanguinea',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('diabtes',null,$ficha_exists->Diabetes, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf7','Diabetes',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('alergia',null,$ficha_exists->Alergia, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf8','Alergias',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('embarazo',null,$ficha_exists->Embarazo, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf9','Embarazo',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('otraenf',null,$ficha_exists->OtraEnf, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('enf10','Otra Enfermedad',array('class'=>'nobold')); ?>

              </div>

              <?php if($ficha_exists->OtraEnf==1): ?>
                <div class="form-group col-sm-6">
                  <?php echo Form::label('nombreotraenf','Nombre de otra enfermedad: '); ?>

                  <?php echo $ficha_exists->NombreOtra; ?>

                </div>
              <?php endif; ?>
            </div>

            <div class="form-group col-sm-12">
                <?php echo Form::label('farmacos','Farmacos en uso: '); ?>

                <?php echo $ficha_exists->Farmacos_Uso; ?>

            </div>

            <div class="form-group col-sm-12">
                <?php echo Form::label('Hábitos'); ?>

            </div>

            <div class="form-group col-sm-12">
              <div class="form-group col-sm-6">
                <?php echo Form::checkbox('fuma',null,$ficha_exists->Fuma, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('hab1','Fuma',array('class'=>'nobold')); ?>

              </div>

              <div class="form-group col-sm-6">
                <?php echo Form::checkbox('drogas',null,$ficha_exists->Drogas, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('hab2','Consume drogas',array('class'=>'nobold')); ?>

              </div>

              <div class="form-group col-sm-6">
                <?php echo Form::checkbox('alcohol',null,$ficha_exists->Alcohol, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('hab3','Consume alcohol',array('class'=>'nobold')); ?>

              </div>
            </div>

        </div>
      </div>

      <div class="panel panel-primary centrarIT">
        <div class="panel-heading">Anamnesis Odontológica </div>
        <div class="panel-body">

          <div class="form-group col-sm-6">
            <?php echo Form::label('ultimocontrol','Fecha de último control: '); ?> <?php echo $ficha_exists->Fecha_Ultima_Consulta; ?>

          </div>

          <div class="form-group col-sm-6">
            <?php echo Form::label('motivoultimaconslta','Motivo de ultima consulta: '); ?> <?php echo $ficha_exists->Motivo_Ultima_Consulta; ?>

          </div>

          <div class="form-group col-sm-12">
            <?php echo Form::label('traumatismo','Antecedentes de Traumatismo Dentoalveolar'); ?>


            <?php if($ficha_exists->Antecedentes_Traumatismo==0): ?>
              <div class="col-sm-8">
                <?php echo Form::radio('traumatismoNO',null, 1 ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('Tortodoncia1','No ha recibido Tratamiento de Ortodoncia'
                  ,array('class'=>'nobold')); ?>

              </div>
            <?php else: ?>
              <div class="form-group col-sm-8">
                <?php echo Form::radio('traumatismoSI',null, 1 ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('Tortodoncia2','Si ha recibido Tratamiento de Ortodoncia'
                  ,array('class'=>'nobold')); ?>

              </div>

              <div class="form-group col-sm-6">
                <?php echo Form::label('Diente(s): '); ?>

                <?php echo $ficha_exists->DienteTraumatismo; ?>

              </div>

              <div class="form-group col-sm-6">
                <?php echo Form::label('fechaTraumatismo','Indique en que fecha: '); ?>

                <?php echo $ficha_exists->Fecha_Traumatismo; ?>

              </div>
            <?php endif; ?>
            </div>

            <div class="form-group col-sm-12">
              <?php echo Form::label('ElemH','Elementos de Hígiene Dental'); ?>

            </div>

            <div class="form-group col-sm-12">
              <div class="form-group col-sm-3">
                <?php echo Form::checkbox('cepillo',null ,$ficha_exists->Cepillo, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('_cepillo','Cepillo',array('class'=>'nobold')); ?>

              </div>

              <div class="form-group col-sm-3">
                <?php echo Form::checkbox('sedadental',null ,$ficha_exists->SedaDental, ['disabled'=>'disabled']); ?>

                <?php echo Form::label('_seda','Seda dental',array('class'=>'nobold')); ?>

              </div>

              <div class="form-group col-sm-3">
                <?php echo Form::checkbox('dentrifico',null ,$ficha_exists->Dentrífico, ['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('_dentrifico','Dentrífico',array('class'=>'nobold')); ?>

              </div>
              <div class="form-group col-sm-3">
                <?php echo Form::checkbox('colutorio',null ,$ficha_exists->Colutorio, ['disabled'=>'disabled']); ?>

                <?php echo Form::label('_colutorio','Colutorio',array('class'=>'nobold')); ?>

              </div>
              <div class="form-group col-sm-3">
                <?php echo Form::checkbox('otros', null, $ficha_exists->Otros,['disabled'=>'disabled'] ); ?>

                <?php echo Form::label('_otros','Otros',array('class'=>'nobold')); ?>

              </div>

              <?php if($ficha_exists->Otros==1): ?>
                <div class="form-group col-sm-12">
                  <?php echo Form::label('nombreotros','Nombre otros: '); ?> <?php echo $ficha_exists->NombreOtros; ?>

                </div>
              <?php endif; ?>

            </div>


            <div class="form-group col-sm-12">

              <div class="form-group col-sm-6">
                <?php echo Form::label('anestesiadental','¿Le han aplicado Anestesia Dental?'); ?>

                <?php if($ficha_exists->Anestesia==0): ?>
                  <div class=" form-group col-sm-8">
                    <?php echo Form::radio('anestesiaNO',null, 1 ,['disabled'=>'disabled']); ?>

                    <?php echo Form::label('anestesia1','No',array('class'=>'nobold')); ?>

                  </div>
                <?php else: ?>
                  <div class="form-group col-sm-8">
                    <?php echo Form::radio('anestesiaSI',null, 1 ,['disabled'=>'disabled']); ?>

                    <?php echo Form::label('anestesia2','Si',array('class'=>'nobold')); ?>

                  </div>
                </div>

                <div class="form-group col-sm-6">
                  <?php echo Form::label('complicacionAnestesia','¿Ha tenido complicaciones al respecto?'); ?>

                  <?php if($ficha_exists->Complicacion_Anestesia==0): ?>
                    <div class=" form-group col-sm-8">
                      <?php echo Form::radio('complicacionNO',null, 1 ,['disabled'=>'disabled']); ?>

                      <?php echo Form::label('complicacion1','No',array('class'=>'nobold')); ?>

                    </div>
                  <?php else: ?>
                    <div class=" form-group col-sm-8">
                      <?php echo Form::radio('complicacionSI',null, 1 ,['disabled'=>'disabled']); ?>

                      <?php echo Form::label('complicacion2','Si',array('class'=>'nobold')); ?>

                    </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

              <?php if($ficha_exists->Complicacion_Anestesia==1): ?>
                <div class="form-group col-sm-8">
                  <?php echo Form::label('Especifique','Especifique: '); ?> <?php echo $ficha_exists->Complicacion; ?>

                </div>
              <?php endif; ?>
              </div>

            <div class="form-group col-sm-12">
                <?php echo Form::label('Procedimientos'); ?>

            </div>

            <div class="form-group col-sm-12">

              <div class="col-sm-6">
                <?php echo Form::checkbox('apicectomia',null , $ficha_exists->Apicectomia ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_apicectomia','Apicectomía',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('blanqueamiento',null , $ficha_exists->Blanqueamiento_Dental ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_blanqueamiento','Blanqueamiento Dental',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('Cementación',null , $ficha_exists->Cementación ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_Cementación','Cementación',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('endodoncia',null , $ficha_exists->Endodoncia ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_endodoncia','Endodoncia',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('exodoncia',null , $ficha_exists->Exodoncia ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_exodoncia','Exodoncia',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('explorador',null , $ficha_exists->Explorador_Dental ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_explorador','Explorador Dental',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('gingivectomia',null , $ficha_exists->Gingivectomía ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_gingivectomia','Gingivectomía',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('gingivoplastia',null , $ficha_exists->Gingivoplastía ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_gingivoplastia','Gingivoplastía',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('higienebucodental',null , $ficha_exists->Higiene_Bucodental ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_higiene','Higiene Bucodental',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('implantedental',null , $ficha_exists->Implante_Dental ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_implante','Implante Dental',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('limpiezadental',null , $ficha_exists->Limpieza_Dental ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_limpieza','Limpieza Dental',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('ostectomia',null , $ficha_exists->Ostectomía ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_ostectomia','Ostectomía',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('remineralizacion',null , $ficha_exists->Remineralización_dental ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_remineralizacion','Remineralización Dental',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('sitioEstado',null , $ficha_exists->SitioEstado ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_sitioestado','Sitio/Estado',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('tartrectomia',null , $ficha_exists->Tartrectomía ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_tartrectomia','Tartrectomía',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('colgajo',null , $ficha_exists->Tecnica_Colgajo ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_colgajo','Técnica de elevación del colgajo',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('senomaxilar',null , $ficha_exists->Tecnica_Seno_Maxilar ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_senomaxilar','Técnica de elevación del seno maxilar',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('Regeneracion_Osea',null , $ficha_exists->Regeneracion_Osea ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_Regeneracion_Osea','Técnica de regeneración ósea guiada',array('class'=>'nobold')); ?>

              </div>

              <div class="col-sm-6">
                <?php echo Form::checkbox('Terapia_Fluoruro',null , $ficha_exists->Terapia_Fluoruro ,['disabled'=>'disabled']); ?>

                <?php echo Form::label('_fluoruro','Terapia de fluoruro',array('class'=>'nobold')); ?>

              </div>
            </div>

              <div class="form-group col-sm-12">
                <?php echo Form::label('alerta_medica','Alerta Médica: '); ?> <?php echo $ficha_exists->Alerta_Medica; ?>

              </div>

          </div>

        </div>
      </div>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>