@extends('layouts.app')

@section('title','Editar Paciente')

@section('content')

<head>
  {!!Html::style('css/micss.css')!!}
</head>




   <div class="row fondoC centro">
     <div class="page-header">
       <h1>Mi Perfil</h1>
     </div>
     <div class="col-md-8">

        <div class="panel panel-primary">
          <div class="panel-heading">
             Datos del Usuario
           </div>
          <div class="panel-body">

            @foreach ($rol as $ro)
              @if ($ro->idrol == $user->idrol )
                @php $nombre=$ro->Nombre @endphp
                @endif
            @endforeach
              {!!Form::open()!!}
             <div class="form-group">
              {!!form::label('CodigoUser','Código de Usuario : ')!!}
               {!!$user->id !!}
             </div>

              <div class="form-group">
              {!!form::label('Email : ')!!}
               {!!$user->email !!}
             </div>

             <div class="form-group">
             {!!form::label('Permisos','Permisos de : ')!!}
              {!!$nombre !!}
            </div>

           </div>
        </div>


          @if($user->idrol==3)
          <div class="panel panel-primary">
            <div class="panel-heading">
               Mis datos
             </div>
          <div class="panel-body">
              {!!Form::open()!!}
              <div class="form-group">
               {!!form::label('Rut : ')!!}
                {!!$info->alumno_id !!}
              </div>

             <div class="form-group">
              {!!form::label('Nombre : ')!!}
               {!!$info->Nombre !!} {!!$info->Apellido !!}
             </div>

              <div class="form-group">
              {!!form::label('Teléfono : ')!!}
               {!!$info->Telefono !!}
             </div>

             
           </div>
         </div>
          @endif

          @if($user->idrol==2)
          <div class="panel panel-primary">
            <div class="panel-heading">
               Mis datos
             </div>
          <div class="panel-body">
              {!!Form::open()!!}
              <div class="form-group">
               {!!form::label('Rut : ')!!}
                {!!$info->id !!}
              </div>

             <div class="form-group">
              {!!form::label('Nombre : ')!!}
               {!!$info->Nombre !!}
             </div>

              <div class="form-group">
              {!!form::label('Teléfono : ')!!}
               {!!$info->Telefono !!}
             </div>
             <a <button href="#" type="button" id= 'Editar' name='Editar' class="btn btn-success" style ="margin-bottom: 20px"  >Editar Datos</button></a>
           </div>
         </div>
          @endif

        </div>

   </div>



@endsection
