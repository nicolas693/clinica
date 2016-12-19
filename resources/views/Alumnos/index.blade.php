@extends('layouts.master')

@section('title','Lista de Alumnos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header" >
     <h1>Alumnos<small></small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Futuro Login Alumnos
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn  navbar-btn btn-success" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Ingresar</button>
              </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
              
               </tbody>
             </table>
          </div>
        </div>


     </div>
   </div>






@endsection
