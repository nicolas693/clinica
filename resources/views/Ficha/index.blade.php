@extends('layouts.app')

@section('title','Ficha del Paciente')

  <div class="page-header "  >
    <h1>Pacientes<small></small></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

       <div class="panel panel-default " >
         <div class="panel-heading">
            Lista
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
              <a <button href={{route('Paciente.create')}} type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"  >Nuevo</button></a>
               <!--<button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>-->
             </p>
          </div>
         <div class="panel-body " >

            <table class="table table-bordered">
              <thead>
                 <th>Rut</th>
                 <th>Nombre</th>
                 <th>Apellido Paterno</th>
                 <th>Apellido Materno</th>
                 <th>Clinica</th>


                 <th>Accion</th>
              </thead>
            </div>
          </div>
        </div>
    </div>
