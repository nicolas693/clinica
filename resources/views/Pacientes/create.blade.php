@extends('layouts.master')

@section('title','Paciente Nuevo')

@section('content')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('Paciente')}}"> Pacientes</a></li>
     <li class="active">Nuevo Producto</li>
   </ol>
 

   <div class="page-header">
     <h1>Paciente Nuevo </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Producto
           </div>
          <div class="panel-body">

               {!!Form::open(['route'=>'Paciente.store','method'=>'POST'])!!}


               <div class="form-group">
                  {!!form::label('RUT')!!}
                  {!!form::text('rut',null,['id'=>'rut','class'=>'form-control','placeholder'=>'Digite Producto'])!!}
             </div>
            
              <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control','placeholder'=>'Digite Producto'])!!}
             </div>

             <div class="form-group">
                  {!!form::label('Apellido Paterno')!!}
                  {!!form::text('Paterno',null,['id'=>'Paterno','class'=>'form-control','placeholder'=>'Digite el Precio'])!!}
             </div>

             <div class="form-group">
                  {!!form::label('Apellido Materno')!!}
                  {!!form::text('Materno',null,['id'=>'Materno','class'=>'form-control','placeholder'=>'Digite Producto'])!!}
             </div>

              <div class="form-group">
                  {!!form::label('Fecha Ingreso')!!}
                  {!!form::text('Fecha_Ingreso',null,['id'=>'Fecha_Ingreso','class'=>'form-control','placeholder'=>'Digite Producto'])!!}
             </div>

             

            


             

             <div class="form-group">
                
                {!!form::label('Clinica')!!}

                {!! Form::select('id_Clinica',$paciente,null,['id'=>'id_Clinica','class'=>'form-control']) !!}

               

             </div>
                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}             
              {!!Form::close()!!}



           

           </div>
        </div>


     </div>
   </div>



@endsection