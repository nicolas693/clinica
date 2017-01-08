@extends('layouts.app')

@section('title','Planificación de Tratamiento')
@section('content')

  <div class="page-header "  >
    <h1>Planificación de Tratamiento<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Tratamiento
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href="#" type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Ingresar Tratamiento</button></a>
             </p>
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                 <th>#</th>
                 <th>Fecha</th>
                 <th>Tratamiento</th>
                 <th>Diente</th>
              </thead>
              </table>

           </div>


@endsection
