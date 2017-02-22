@extends('layouts.app')

@section('title','Ficha del Paciente')
@section('content')

<head>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      {!!Html::style('css/micss.css')!!}
      <meta charset="utf-8" />
      <title>Fechas</title>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


</head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li class="active">Odontograma de {{$paciente->Nombre}} {{$paciente->Paterno}} </li>
   </ol>


<div class="row fondoC centro">
    <div class="col-sm-12 "  >
      <h1>Odontograma<small></small></h1>

      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza18']}}"><img  src={{ URL::asset("images/18.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza17']}}"><img  src={{ URL::asset("images/17.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza16']}}"><img  src={{ URL::asset("images/16.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza15']}}"><img  src={{ URL::asset("images/15.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza14']}}"><img  src={{ URL::asset("images/14.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza13']}}"><img  src={{ URL::asset("images/13.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza12']}}"><img  src={{ URL::asset("images/12.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza11']}}"><img  src={{ URL::asset("images/11.png")}}></a>




      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza21']}}"><img  src={{ URL::asset("images/21.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza22']}}"><img  src={{ URL::asset("images/22.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza23']}}"><img  src={{ URL::asset("images/23.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza24']}}"><img  src={{ URL::asset("images/24.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza25']}}"><img  src={{ URL::asset("images/25.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza26']}}"><img  src={{ URL::asset("images/26.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza27']}}"><img  src={{ URL::asset("images/27.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza28']}}"><img  src={{ URL::asset("images/28.png")}}></a>

    </div>

    <div class="col-sm-12" style="margin-bottom:5%;" id="1" >

      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza48']}}"><img  src={{ URL::asset("images/48.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza47']}}"><img  src={{ URL::asset("images/47.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza46']}}"><img  src={{ URL::asset("images/46.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza45']}}"><img  src={{ URL::asset("images/45.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza44']}}"><img  src={{ URL::asset("images/44.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza43']}}"><img  src={{ URL::asset("images/43.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza42']}}"><img  src={{ URL::asset("images/42.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza41']}}"><img  src={{ URL::asset("images/41.png")}}></a>




      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza31']}}"><img  src={{ URL::asset("images/31.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza32']}}"><img  src={{ URL::asset("images/32.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza33']}}"><img  src={{ URL::asset("images/33.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza34']}}"><img  src={{ URL::asset("images/34.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza35']}}"><img  src={{ URL::asset("images/35.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza36']}}"><img  src={{ URL::asset("images/36.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza37']}}"><img  src={{ URL::asset("images/37.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/{{$odonto['pieza38']}}"><img  src={{ URL::asset("images/38.png")}}></a>

      <!--<input  type="image" src='images/31.png' name="31"  data-id="31" data-toggle="modal" data-target="#myModal" class="view-admin" />-->


    </div>

    <div class="panel panel-default fondoCSF" style="overflow:hidden; height: 600px; "   >

      <div class="panel-heading">
        Piezas con problemas
      </div>

      <div class="panel-body " style="overflow:auto; height: 560px; "  >
        <table class="table table-bordered">

          <tbody>
            <?php $i=0;$ct=0;?>

            @foreach($odonto as $key => $odo)
                <?php $problemas=$pr[$i]['attributes']; ?>
                 <tr>
                   @if ($key!='Odontograma_id')
                        <?php $aux=0; ?>
                       @foreach($problemas as $key2 => $pro)
                         @if($key2!='Problema_id')
                            @if($problemas[$key2]==1)
                                <?php $aux++; ?>
                            @endif
                          @endif
                        @endforeach
                       @if($aux!=0)
                       <td>
                         <div class="panel panel-default " >
                           <div class="panel-heading">
                              {{$key}}
                            </div>
                            <div class="panel-body " >
                              @foreach($problemas as $key2 => $pro)
                                @if($problemas[$key2]==1)
                                  <div>
                                    {{$key2}}
                                  </div>
                                @endif
                              @endforeach
                            </div>
                         </div>
                       </td>
                       @endif
                   <?php $i++; ?>
                   @endif
                 </tr>
           @endforeach
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




@endsection
