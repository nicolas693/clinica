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

      <a href="/Ficha/{{$id}}/Odontograma/18"><img  src={{ URL::asset("images/18.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/17"><img  src={{ URL::asset("images/17.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/16"><img  src={{ URL::asset("images/16.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/15"><img  src={{ URL::asset("images/15.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/14"><img  src={{ URL::asset("images/14.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/13"><img  src={{ URL::asset("images/13.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/12"><img  src={{ URL::asset("images/12.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/11"><img  src={{ URL::asset("images/11.png")}}></a>




      <a href="/Ficha/{{$id}}/Odontograma/21"><img  src={{ URL::asset("images/21.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/22"><img  src={{ URL::asset("images/22.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/23"><img  src={{ URL::asset("images/23.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/24"><img  src={{ URL::asset("images/24.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/25"><img  src={{ URL::asset("images/25.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/26"><img  src={{ URL::asset("images/26.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/27"><img  src={{ URL::asset("images/27.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/28"><img  src={{ URL::asset("images/28.png")}}></a>

    </div>

    <div class="col-sm-12" style="margin-bottom:5%;" id="1" >

      <a href="/Ficha/{{$id}}/Odontograma/48"><img  src={{ URL::asset("images/48.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/47"><img  src={{ URL::asset("images/47.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/46"><img  src={{ URL::asset("images/46.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/45"><img  src={{ URL::asset("images/45.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/44"><img  src={{ URL::asset("images/44.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/43"><img  src={{ URL::asset("images/43.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/42"><img  src={{ URL::asset("images/42.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/41"><img  src={{ URL::asset("images/41.png")}}></a>




      <a href="/Ficha/{{$id}}/Odontograma/31"><img  src={{ URL::asset("images/31.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/32"><img  src={{ URL::asset("images/32.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/33"><img  src={{ URL::asset("images/33.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/34"><img  src={{ URL::asset("images/34.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/35"><img  src={{ URL::asset("images/35.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/36"><img  src={{ URL::asset("images/36.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/37"><img  src={{ URL::asset("images/37.png")}}></a>
      <a href="/Ficha/{{$id}}/Odontograma/38"><img  src={{ URL::asset("images/38.png")}}></a>

      <!--<input  type="image" src='images/31.png' name="31"  data-id="31" data-toggle="modal" data-target="#myModal" class="view-admin" />-->

    </div>

    <div class="col-sm-12 borde" style="margin-top:4%; margin-bottom:4%; " >





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
