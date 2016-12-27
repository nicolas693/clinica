@extends('layouts.app')

@section('title','Editar Clinica')

@section('content')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('Paciente')}}"> Pacientes</a></li>
     <li class="active">Editar Clinica</li>
   </ol>


   <div class="page-header">
     <h1>Editar datos Clinica </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar Clinica
           </div>
          <div class="panel-body">

              {!!Form::open(['route'=>['Clinica.destroy',$cli->id_Clinica],'method'=>'DELETE'])!!}

             <div class="form-group">
               <label for="exampleInputPassword1">DESEA ELIMINAR ESTA  CLINICA ? :</label>
             </div>
             <div class="form-group">
              {!!form::label('Codigo : ')!!}
               {!!$cli->id_Clinica !!}
             </div>

             <div class="form-group">
              {!!form::label('Nombre : ')!!}
               {!!$cli->Nombre_Clinica !!}
             </div>




                 {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}

                <button type="button" id= 'cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10 btn-warning" >Cancelar</button>

{!!Form::close()!!}

           </div>
        </div>


     </div>
   </div>

<script>
                    $("#cancelar").click(function(event)
                    {
                    document.location.href = "{{ route('Clinica.index')}}";
                    });

                    </script>

@endsection
