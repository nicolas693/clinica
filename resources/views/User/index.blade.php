@extends('layouts.app')

@section('title','Editar Paciente')

@section('content')




   <div class="page-header">
     <h1>ALGO PONDRE ACA </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Datos Usuario
           </div>
          <div class="panel-body">

            @foreach ($rol as $ro)
              @if ($ro->idrol == $user->idrol )
                @php $nombre=$ro->Nombre @endphp
                @endif
            @endforeach

              {!!Form::open()!!}



             <div class="form-group">
              {!!form::label('Codigo : ')!!}
               {!!$user->id !!}
             </div>

              <div class="form-group">
              {!!form::label('Email : ')!!}
               {!!$user->email !!}
             </div>

             <div class="form-group">
             {!!form::label('Permisos de : ')!!}
              {!!$nombre !!}
            </div>




           </div>
        </div>


     </div>
   </div>



@endsection
