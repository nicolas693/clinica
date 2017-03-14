<?php $__env->startSection('content'); ?>
<head>
 <?php echo Html::style('css/micss.css'); ?>

</head>

<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
           <div class="panel panel-default">
               <div class="panel-heading">Bienvenido <?php echo e(Auth::user()->name); ?></div>

               <div class="panel-body">
                   <?php if(Auth::user()->rut==null): ?>
                            <b>Ingrese su rut (Este proceso solo se realiza la primera vez que ingresa al sistema)</b>
                            <?php echo Form::model(Auth::user(),['route'=>['User.inscribir',Auth::user()->id],'method'=>'PUT']); ?>


                            <div class="col-sm-6">
                                <?php echo form::label(' Rut : '); ?>

                                <?php echo form::text('rut',null,['id'=>'Nombre','class'=>'form-control']); ?>

                           </div>

                          <?php echo form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px; margin-left: 16px; margin-right:400px']); ?>

                          <?php echo Form::close(); ?>


                   <?php endif; ?>
                   <?php if(Auth::user()->rut!=null): ?>
                    <?php if($ficha==null): ?>
                      <div style="margin-top:5%;margin-bottom:5%; margin-left:4%">
                          <b>Usted no posee Ficha Dental, acérquese a una clínica para Evaluación dental</b>
                      </div>
                    <?php endif; ?>
                    <?php if($ficha!=null): ?>
                        <?php if($trat->all()==null): ?>
                          <div style="margin-top:5%;margin-bottom:5%; margin-left:4%">
                            <b >Usted no posee Consultas agendadas</b>
                          </div>
                        <?php endif; ?>
                        <?php if($trat->all()!=null): ?>
                          <?php $suma=0; ?>
                          <div class="panel panel-default" style="margin-top:5%;margin-bottom:5%; margin-left:4%">
                            <div class="panel-heading" ><b>FECHAS DE CONSULTAS</b>  </div>
                            <div class="panel-body">
                              <table class="table stripe compact "   >
                                <thead>
                                   <th>Fecha de Atencion</th>
                                   <th>Procedimiento a Realizar</th>
                                   <th>Detalle</th>
                                   <th>Costo</th>
                                </thead>

                                <?php foreach($trat as $tra): ?>
                                    <tr>
                                      <?php if($tra->Fecha==null): ?><td>Fecha No Definida</td><?php endif; ?>
                                      <?php if($tra->Fecha!=null): ?><td><?php echo e($tra->Fecha); ?></td><?php endif; ?>
                                      <?php $p=str_replace('_',' ',$tra->Procedimiento) ?>
                                      <td><?php echo e($p); ?></td>

                                      <td><?php echo e($tra->AccionR); ?></td>
                                      <td>$ <?php echo e($proce[$tra->Procedimiento]); ?></td>
                                      <?php $suma=$suma+$proce[$tra->Procedimiento]; ?>
                                    </tr>
                                <?php endforeach; ?>

                                <td></td>
                                <td></td>
                                <td><b class="pull-right" style="margin-right:10%"> Total: </b></td>
                                <td><b> $ <?php echo e($suma); ?></b></td>
                            </table>
                            </div>

                          </div>
                        <?php endif; ?>

                    <?php endif; ?>

                   <?php endif; ?>
               </div>
           </div>
       </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>