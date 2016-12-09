@extends('layouts.master')

@section('title','Editar Paciente')

@section('content')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('Paciente')}}"> Pacientes</a></li>
     <li class="active">Editar paciente</li>
   </ol>
 

   <div class="page-header">
     <h1>Editar datos paciente </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar paciente
           </div>
          <div class="panel-body">

              {!!Form::open(['route'=>['Paciente.destroy',$pa->rut],'method'=>'DELETE'])!!}
            
             <div class="form-group">
               <label for="exampleInputPassword1">DESEA ELIMINAR ESTE PACIENTE ? :</label>                
             </div>
             <div class="form-group">
              {!!form::label('Rut : ')!!} 
               {!!$pa->rut !!}
             </div>

              <div class="form-group">
              {!!form::label('Nombre : ')!!} 
               {!!$pa->Nombre !!} {!!$pa->Paterno !!} {!!$pa->Materno !!}
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
                    document.location.href = "{{ route('Paciente.index')}}";
                    });

                    </script>

@endsection