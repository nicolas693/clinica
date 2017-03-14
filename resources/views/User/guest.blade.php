@extends('layouts.app')

@section('content')
<head>
 {!!Html::style('css/micss.css')!!}
</head>

<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
           <div class="panel panel-default">
               <div class="panel-heading">Bienvenido {{ Auth::user()->name }}</div>

               <div class="panel-body">
                   @if(Auth::user()->rut==null)
                            <b>Ingrese su rut (Este proceso solo se realiza la primera vez que ingresa al sistema)</b>
                            {!!Form::model(Auth::user(),['route'=>['User.inscribir',Auth::user()->id],'method'=>'PUT'])!!}

                            <div class="col-sm-6">
                                {!!form::label(' Rut : ')!!}
                                {!!form::text('rut',null,['id'=>'Nombre','class'=>'form-control'])!!}
                           </div>

                          {!!form::submit('Actualizar',['name'=>'grabar','id'=>'grabar','class'=>'btn btn-success btn-sm m-t-12','style'=>'margin-top: 26px; margin-left: 16px; margin-right:400px'])!!}
                          {!!Form::close()!!}

                   @endif
                   @if(Auth::user()->rut!=null)
                    @if($ficha==null)
                      <div style="margin-top:5%;margin-bottom:5%; margin-left:4%">
                          <b>Usted no posee Ficha Dental, acérquese a una clínica para Evaluación dental</b>
                      </div>
                    @endif
                    @if($ficha!=null)
                        @if($trat->all()==null)
                          <div style="margin-top:5%;margin-bottom:5%; margin-left:4%">
                            <b >Usted no posee Consultas agendadas</b>
                          </div>
                        @endif
                        @if($trat->all()!=null)
                          <?php $suma=0; ?>
                          <div class="panel panel-default" style="margin-top:5%;margin-bottom:5%; margin-left:4%">
                            <div class="panel-heading" ><b>FECHAS DE CONSULTAS</b>  </div>
                            <div class="panel-body">
                              <table class="table stripe compact "   >
                                <thead>
                                   <th>Fecha de Atencion</th>
                                   <th>Procedimiento a Realizar</th>
                                   <th>Detalle</th>
                                   <th>Costo</th>
                                </thead>

                                @foreach($trat as $tra)
                                    <tr>
                                      @if($tra->Fecha==null)<td>Fecha No Definida</td>@endif
                                      @if($tra->Fecha!=null)<td>{{$tra->Fecha}}</td>@endif
                                      <?php $p=str_replace('_',' ',$tra->Procedimiento) ?>
                                      <td>{{$p}}</td>

                                      <td>{{$tra->AccionR}}</td>
                                      <td>$ {{$proce[$tra->Procedimiento]}}</td>
                                      <?php $suma=$suma+$proce[$tra->Procedimiento]; ?>
                                    </tr>
                                @endforeach

                                <td></td>
                                <td></td>
                                <td><b class="pull-right" style="margin-right:10%"> Total: </b></td>
                                <td><b> $ {{$suma}}</b></td>
                            </table>
                            </div>

                          </div>
                        @endif

                    @endif

                   @endif
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
