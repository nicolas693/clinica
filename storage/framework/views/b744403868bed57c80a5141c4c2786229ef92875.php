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


<div class="row fondoC centro">
    <div class="col-sm-12 "  >
      <h1>Odontograma<small></small></h1>
      <input  type="image" src='images/18.png' name="18"  data-id="18" data-toggle="modal" data-target="#myModal" class="view-admin" />
      <input  type="image" src='images/17.png' name="17"  data-id="17" data-toggle="modal" data-target="#myModal" class="view-admin" />
      <input  type="image" src='images/16.png' name="16"  id="16" />
      <input  type="image" src='images/15.png' name="15"  id="15" />
      <input  type="image" src='images/14.png' name="14"  id="14" />
      <input  type="image" src='images/13.png' name="13"  id="13" />
      <input  type="image" src='images/12.png' name="12"  id="12" />
      <input  type="image" src='images/11.png' name="11"  id="11" />




      <input  type="image" src='images/21.png' name="21"  id="21" />
      <input  type="image" src='images/22.png' name="22"  id="22" />
      <input  type="image" src='images/23.png' name="23"  id="23" />
      <input  type="image" src='images/24.png' name="24"  id="24" />
      <input  type="image" src='images/25.png' name="25"  id="25" />
      <input  type="image" src='images/26.png' name="26"  id="26" />
      <input  type="image" src='images/27.png' name="27"  id="27" />
      <input  type="image" src='images/28.png' name="28"  id="28" />



    </div>

    <div class="col-sm-12" style="margin-bottom:5%;" id="1" >

      <input  type="image" src='images/48.png' name="48"  id="48" />
      <input  type="image" src='images/47.png' name="47"  id="47" />
      <input  type="image" src='images/46.png' name="46"  id="46" />
      <input  type="image" src='images/45.png' name="45"  id="45" />
      <input  type="image" src='images/44.png' name="44"  id="44" />
      <input  type="image" src='images/43.png' name="43"  id="43" />
      <input  type="image" src='images/42.png' name="42"  id="42" />
      <input  type="image" src='images/41.png' name="41"  id="41" />

      <input  type="image" src='images/31.png' name="31"  id="31" />
      <input  type="image" src='images/32.png' name="32"  id="32" />
      <input  type="image" src='images/33.png' name="33"  id="33" />
      <input  type="image" src='images/34.png' name="34"  id="34" />
      <input  type="image" src='images/35.png' name="35"  id="35" />
      <input  type="image" src='images/36.png' name="36"  id="36" />
      <input  type="image" src='images/37.png' name="37"  id="37" />
      <input  type="image" src='images/38.png' name="38"  id="38" />
</div>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 8%;" >
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 >Pieza : <p style="display:inline;" id="showid"></p>  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body" style="max-height: 250px;overflow: auto;">

          <ul class="list-group" style"margin-top: 5%;">
              <li class="list-group-item">
                  problema 1
                  <div class="material-switch pull-right">
                      <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                      <label for="someSwitchOptionDefault" class="label-default"></label>
                  </div>
              </li>

          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">cerrar</button>
          <button type="button" name="nuevo" id="nuevo" class="btn btn-success" data-dismiss="modal">Guardar</button>

        </div>
      </div>

    </div>
  </div>



</div>

<script>
var adminid;
var p1="<?php echo e(route('Paciente.create',";
var p2=")); ?>";
$(document).on("click", ".view-admin", function() {
    adminid = $(this).attr('data-id');

    $("#showid").text(adminid);
    $('#myModal').modal('show');
});


$("#nuevo").click(function(event){
  document.location.href = p1;
});

</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>