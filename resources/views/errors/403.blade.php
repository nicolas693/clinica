
  @extends('layouts.app')
  @section('title','Sin permisos')
  @section('content')






     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="panel panel-default">

                        <h1 align="center">No tiene permisos para ingresar a esta ruta</h1>


                     <div class="panel-body ">

                       <div class="text-center">
                           <img src="{{asset('/images/acceso-restringido.png')}}" />
                       </div>
                       <div class="text-center">
                           <a href="{{ URL::previous() }}" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span>   Volver</a>
                       </div>
                     </div>
             </div>
         </div>
     </div>



  @endsection
