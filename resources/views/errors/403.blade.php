
  @extends('layouts.app')
  @section('title','Sin permisos')
  @section('content')





     </div>
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                        No tiene permisos para ingresar a esta ruta
                     </div>

                     <div class="panel-body">
                         <a href="{{ URL::previous() }}" class="btn btn-primary btn-success" style="background-color:green;">Volver</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>



  @endsection
