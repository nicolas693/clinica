@extends('layouts.app')

@section('title','Editar Paciente')

@section('content')
<head>
    {!!Html::style('css/micss.css')!!}
</head>


<ol class="breadcrumb fondoC1 ">

     <li class="active">Alta Paciente</li>
     <li class="pull-right"><a href="/Alumno/mostrar/{{$pa->clinica_id}}" class="btn btn-primary btn-xs"> <b>Volver</b></a></li>
   </ol>


   <div class="row fondoC centro">

     <div class="page-header">
       <h1>Alta Medica </h1>
     </div>
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Datos
           </div>
          <div class="panel-body">

              {!!Form::open()!!}

             <div class="form-group">
               <label for="exampleInputPassword1"> ¿Desea dar de alta al paciente  ? :</label>
             </div>
             <div class="form-group">
              {!!form::label('Rut : ')!!}
               {!!$pa->rut !!}
             </div>

              <div class="form-group">
              {!!form::label('Nombre : ')!!}
               {!!$pa->Nombre !!} {!!$pa->Paterno !!} {!!$pa->Materno !!}
             </div>

             <div class="form-group">
             {!!form::label('Alta : ')!!}
              {!!$pa->alta !!}
            </div>







                <button type="button" id= 'alta' name='alta' class="btn btn-warning" >Dar de Alta</button>

{!!Form::close()!!}

           </div>
        </div>


     </div>
   </div>

<script>

    $("#cancelar").click(function(event)
        {
        document.location.href = "{{  URL::previous()}}";
        });

</script>


<script>

    $("#alta").click(function(event)
        {
        document.location.href = "{{url('/Paciente/alta/'.$pa->rut)}}";
        });

</script>

@endsection
