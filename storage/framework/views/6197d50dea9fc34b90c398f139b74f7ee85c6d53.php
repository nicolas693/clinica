<?php $__env->startSection('title','Ficha del Paciente'); ?>
<?php $__env->startSection('content'); ?>

<head>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <?php echo Html::style('css/micss.css'); ?>

      <meta charset="utf-8" />
      <title>Fechas</title>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="<?php echo e(url('Alumno')); ?>"> Alumno</a></li>
     <li><a href="<?php echo e(url('Ficha',$id)); ?>"> Ficha</a></li>
     <li class="active">Odontograma de <?php echo e($paciente->Nombre); ?> <?php echo e($paciente->Paterno); ?> </li>
   </ol>


<div class="row fondoC centro">
    <div class="col-sm-12 "  >
      <h1>Odontograma<small></small></h1>

      <div class="col-sm-3" >
        <div class="col-sm-3">
          <div class="panel-heading"> <b>18</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza18']); ?>"><img  src=<?php echo e(URL::asset("images/18.png")); ?>></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>17</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza17']); ?>"><img  src=<?php echo e(URL::asset("images/17.png")); ?>></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>16</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza16']); ?>"><img  src=<?php echo e(URL::asset("images/16.png")); ?>></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>15</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza15']); ?>"><img  src=<?php echo e(URL::asset("images/15.png")); ?>></a>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">
          <div class="panel-heading"> <b>14</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza14']); ?>"><img  src=<?php echo e(URL::asset("images/14.png")); ?>></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>13</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza13']); ?>"><img  src=<?php echo e(URL::asset("images/13.png")); ?>></a>
        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>12</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza12']); ?>"><img  src=<?php echo e(URL::asset("images/12.png")); ?>></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>11</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza11']); ?>"><img  src=<?php echo e(URL::asset("images/11.png")); ?>></a>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">
          <div class="panel-heading"> <b>21</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza21']); ?>"><img  src=<?php echo e(URL::asset("images/21.png")); ?>></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>22</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza22']); ?>"><img  src=<?php echo e(URL::asset("images/22.png")); ?>></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>23</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza23']); ?>"><img  src=<?php echo e(URL::asset("images/23.png")); ?>></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>24</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza24']); ?>"><img  src=<?php echo e(URL::asset("images/24.png")); ?>></a>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">
          <div class="panel-heading"> <b>25</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza25']); ?>"><img  src=<?php echo e(URL::asset("images/25.png")); ?>></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>26</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza26']); ?>"><img  src=<?php echo e(URL::asset("images/26.png")); ?>></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>27</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza27']); ?>"><img  src=<?php echo e(URL::asset("images/27.png")); ?>></a>

        </div>
        <div class="col-sm-3">
          <div class="panel-heading"> <b>28</b> </div>
          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza28']); ?>"><img  src=<?php echo e(URL::asset("images/28.png")); ?>></a>

        </div>
      </div>










    </div>

    <div class="col-sm-12" style="margin-bottom:5%;" id="1" >


      <div class="col-sm-3" >
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza48']); ?>"><img  src=<?php echo e(URL::asset("images/48.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 25px;"> <b>48</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza47']); ?>"><img  src=<?php echo e(URL::asset("images/47.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>47</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza46']); ?>"><img  src=<?php echo e(URL::asset("images/46.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 8px;"> <b>46</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza45']); ?>"><img  src=<?php echo e(URL::asset("images/45.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>45</b> </div>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza44']); ?>"><img  src=<?php echo e(URL::asset("images/44.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>44</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza43']); ?>"><img  src=<?php echo e(URL::asset("images/43.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 8px;"> <b>43</b> </div>
        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza42']); ?>"><img  src=<?php echo e(URL::asset("images/42.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>42</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza41']); ?>"><img  src=<?php echo e(URL::asset("images/41.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 20px;"> <b>41</b> </div>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza31']); ?>"><img  src=<?php echo e(URL::asset("images/31.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 15px;"> <b>31</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza32']); ?>"><img  src=<?php echo e(URL::asset("images/32.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 12px;"> <b>32</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza33']); ?>"><img  src=<?php echo e(URL::asset("images/33.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 10px;"> <b>33</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza34']); ?>"><img  src=<?php echo e(URL::asset("images/34.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 15px;"> <b>34</b> </div>
        </div>
      </div>

      <div class="col-sm-3" style="margin-left:-3%;">
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza35']); ?>"><img  src=<?php echo e(URL::asset("images/35.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 10px;"> <b>35</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza36']); ?>"><img  src=<?php echo e(URL::asset("images/36.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 15px;"> <b>36</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza37']); ?>"><img  src=<?php echo e(URL::asset("images/37.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 22px;"> <b>37</b> </div>

        </div>
        <div class="col-sm-3">

          <a href="/Ficha/<?php echo e($id); ?>/Odontograma/<?php echo e($odonto['pieza38']); ?>"><img  src=<?php echo e(URL::asset("images/38.png")); ?>></a>
          <div class="panel-footer" style="background-color: white; border:0px; margin-top: 22px;" > <b>38</b> </div>
        </div>
      </div>



      <!--<input  type="image" src='images/31.png' name="31"  data-id="31" data-toggle="modal" data-target="#myModal" class="view-admin" />-->


    </div>

    <div class="panel panel-default fondoCSF" style="overflow:hidden; height: 600px; width:70%;margin-left:10%; "   >

      <div class="panel-heading">
        Piezas con problemas
      </div>

      <div class="panel-body " style="overflow:auto; height: 560px; "  >
        <table class="table table-bordered">

          <tbody>
            <?php $i=0;$ct=0;?>

            <?php foreach($odonto as $key => $odo): ?>
                <?php $problemas=$pr[$i]['attributes']; ?>
                 <tr>
                   <?php if($key!='Odontograma_id'): ?>
                        <?php $aux=0; ?>
                       <?php foreach($problemas as $key2 => $pro): ?>
                         <?php if($key2!='Problema_id'): ?>
                            <?php if($problemas[$key2]==1): ?>
                                <?php $aux++; ?>
                            <?php endif; ?>
                          <?php endif; ?>
                        <?php endforeach; ?>
                       <?php if($aux!=0): ?>
                       <td>
                         <div class="panel panel-default " >
                           <div class="panel-heading">
                             <?php
                                 $nomp=$key;
                                 $nomp = str_replace('pieza', '', $nomp);
                              ?>
                              <b><?php echo e($nomp); ?></b>
                            </div>
                            <div class="panel-body " >
                              <?php echo Form::model($problemas,['route'=>['Problema.update',$problemas['Problema_id']],'method'=>'PUT']); ?>

                              <?php foreach($problemas as $key2 => $pro): ?>
                                <?php if($problemas[$key2]==1 and $key2!='Problema_id'): ?>
                                  <div class="col-sm-6"style="margin-bottom:5px;">
                                    <?php
                                        $sinesp=$key2;
                                        $sinesp = str_replace('_', ' ', $sinesp);

                                     ?>
                                     <b><?php echo e($sinesp); ?></b>
                                     <?php echo e(Form::hidden($key2,0)); ?>

                                  </div>
                                  <div class="col-sm-6"style="margin-bottom:5px;">

                                          <?php echo form::submit('Quitar registro del problema',['name'=>'grabar','id'=>'grabar','content'=>'<span>Quitar registro del problema</span>','class'=>'btn btn-warning btn-xs']); ?>


                                  </div>
                                <?php endif; ?>
                              <?php endforeach; ?>
                              <?php echo Form::close(); ?>


                            </div>
                         </div>
                       </td>
                       <?php endif; ?>
                   <?php $i++; ?>
                   <?php endif; ?>
                 </tr>
           <?php endforeach; ?>
          </tbody>
        </table>
      </div>




</div>




</div>










<script>
    var adminid;
    $(document).on("click", ".view-admin", function() {
        adminid = $(this).attr('data-id');
        $("#showid").text(adminid);
        $('#myModal').modal('show');
    });
</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>