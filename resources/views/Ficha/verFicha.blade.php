@extends('layouts.app')

@section('title','Ficha del Paciente')
@section('content')

<head>{!!Html::style('css/micss.css')!!} </head>

<ol class="breadcrumb fondoC1 ">
     <li><a href="{{url('Alumno')}}"> Alumno</a></li>
     <li><a href="{{url('Ficha',$id)}}">Menú Ficha </a></li>
     <li class="active">Ficha Paciente</li>
</ol>

<div class="row fondoC centro">
    <div class="page-header" style="margin-right:350px;" > <h1>Antecedentes del Paciente<small></small></h1> </div>

    <div class="col-md-10">
      <div class="panel panel-primary centrarIT" >
        <div class="panel-heading">
           Datos Paciente
         </div>
             <div class="panel-body">

               {!!Form::open() !!}
                 <div class="form-group col-sm-6">
                   {!!form::label('Nombre : ')!!}
                   {!!$paciente->Nombre !!} {!!$paciente->Paterno !!} {!!$paciente->Materno !!}
                </div>

                <div class="form-group col-sm-6">
                   {!!form::label('Rut : ')!!}
                    {!!$paciente->rut !!}
                </div>

                <div class="form-group col-sm-6">
                   {!!form::label('Sexo : ')!!}
                    {!!$paciente->Genero !!}
                </div>

                <div class="form-group col-sm-6">
                   {!!form::label('Teléfono : ')!!}
                    {!!$paciente->Telefono_Movil !!}
                </div>

                <div class="form-group col-sm-6">
                   {!!form::label('Dirección : ')!!}
                    {!!$paciente->Calle !!} {!!$paciente->Numero_calle !!}
                </div>

                <div class="form-group col-sm-6">
                   {!!form::label('Cobertura Médica : ')!!}
                    {!!$paciente->Cobertura_Medica !!}
                </div>

                {!!Form::close() !!}

                <div class="btn-group">
                  <a <button type="button" href={{route('Ficha.index',$id) }} class="btn btn-primary">Volver</button></a>
                  <a <button href={{route('Ficha.edit',$id) }} type="button"  class="btn btn-success">Editar Ficha</button> </a>
                </div>
          </div>
        </div>


        <div class="panel panel-primary centrarIT">
          <div class="panel-heading">Anamnesis General</div>

          <div class="panel-body">
            <div class="form-group col-sm-6">
              {!!Form::label('ocupacion','Ocupación: ') !!}
              {!!$ficha_exists->Ocupacion!!}
            </div>

            <div class="form-group col-sm-6">
              {!!Form::label('motivoconsulta','Motivo de Consulta: ') !!}
              {!!$ficha_exists->Motivo_Consulta!!}
            </div>

            <div class="form-group col-sm-6">
              {!!Form::label('expectativas','Expectativas: ') !!}
              {!!$ficha_exists->Expectativas!!}
            </div>

            <div class="form-group col-sm-6">
              {!!Form::label('fechaingreso','Fecha de ingreso: ') !!}
              {!!$ficha_exists->Fecha_Ingreso!!}
            </div>

            <div class="form-group col-sm-12">
              {!!Form::label('antecedentes','Antecedentes Médicos') !!}
            </div>

            <div class="form-group col-sm-12">

              <div class="col-sm-6">
                {!!Form::checkbox('cardiovascular',null,$ficha_exists->EnfCardiovasculares, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf1','Enfermedades Cardiovasculares',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('gastrointestinales',null,$ficha_exists->EnfGastrointestinales, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf2','Enfermedades Gastrointestinales',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('respiratorias',null,$ficha_exists->EnfRespiratorias, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf3','Enfermedades Respiratorias',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('neurologicas',null,$ficha_exists->EnfNeurologicas, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf4','Enfermedades Neurológicas',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('infectocontagiosas',null,$ficha_exists->EnfIntectocontagiosas, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf5','Enfermedades Infectocontagiosas',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('discrasia',null,$ficha_exists->DiscrasiaSanguinea, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf6','Discrasia Sanguinea',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('diabtes',null,$ficha_exists->Diabetes, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf7','Diabetes',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('alergia',null,$ficha_exists->Alergia, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf8','Alergias',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('embarazo',null,$ficha_exists->Embarazo, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf9','Embarazo',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('otraenf',null,$ficha_exists->OtraEnf, ['disabled'=>'disabled'] )!!}
                {!!Form::label('enf10','Otra Enfermedad',array('class'=>'nobold')) !!}
              </div>

              @if ($ficha_exists->OtraEnf==1)
                <div class="form-group col-sm-6">
                  {!!Form::label('nombreotraenf','Nombre de otra enfermedad: ') !!}
                  {!!$ficha_exists->NombreOtra!!}
                </div>
              @endif
            </div>

            <div class="form-group col-sm-12">
                {!!Form::label('farmacos','Farmacos en uso: ')!!}
                {!!$ficha_exists->Farmacos_Uso!!}
            </div>

            <div class="form-group col-sm-12">
                {!!Form::label('Hábitos') !!}
            </div>

            <div class="form-group col-sm-12">
              <div class="form-group col-sm-6">
                {!!Form::checkbox('fuma',null,$ficha_exists->Fuma, ['disabled'=>'disabled'] )!!}
                {!!Form::label('hab1','Fuma',array('class'=>'nobold')) !!}
              </div>

              <div class="form-group col-sm-6">
                {!!Form::checkbox('drogas',null,$ficha_exists->Drogas, ['disabled'=>'disabled'] )!!}
                {!!Form::label('hab2','Consume drogas',array('class'=>'nobold')) !!}
              </div>

              <div class="form-group col-sm-6">
                {!!Form::checkbox('alcohol',null,$ficha_exists->Alcohol, ['disabled'=>'disabled'] )!!}
                {!!Form::label('hab3','Consume alcohol',array('class'=>'nobold')) !!}
              </div>
            </div>

        </div>
      </div>

      <div class="panel panel-primary centrarIT">
        <div class="panel-heading">Anamnesis Odontológica </div>
        <div class="panel-body">

          <div class="form-group col-sm-6">
            {!!Form::label('ultimocontrol','Fecha de último control: ') !!} {!!$ficha_exists->Fecha_Ultima_Consulta !!}
          </div>

          <div class="form-group col-sm-6">
            {!!Form::label('motivoultimaconslta','Motivo de ultima consulta: ') !!} {!!$ficha_exists->Motivo_Ultima_Consulta !!}
          </div>

          <div class="form-group col-sm-12">
            {!!Form::label('traumatismo','Antecedentes de Traumatismo Dentoalveolar') !!}

            @if ($ficha_exists->Antecedentes_Traumatismo==0)
              <div class="col-sm-8">
                {!!Form::radio('traumatismoNO',null, 1 ,['disabled'=>'disabled']) !!}
                {!!Form::label('Tortodoncia1','No ha recibido Tratamiento de Ortodoncia'
                  ,array('class'=>'nobold'))!!}
              </div>
            @else
              <div class="form-group col-sm-8">
                {!!Form::radio('traumatismoSI',null, 1 ,['disabled'=>'disabled']) !!}
                {!!Form::label('Tortodoncia2','Si ha recibido Tratamiento de Ortodoncia'
                  ,array('class'=>'nobold'))!!}
              </div>

              <div class="form-group col-sm-6">
                {!!Form::label('Diente(s): ') !!}
                {!!$ficha_exists->DienteTraumatismo!!}
              </div>

              <div class="form-group col-sm-6">
                {!!Form::label('fechaTraumatismo','Indique en que fecha: ') !!}
                {!!$ficha_exists->Fecha_Traumatismo !!}
              </div>
            @endif
            </div>

            <div class="form-group col-sm-12">
              {!!Form::label('ElemH','Elementos de Hígiene Dental') !!}
            </div>

            <div class="form-group col-sm-12">
              <div class="form-group col-sm-3">
                {!!Form::checkbox('cepillo',null ,$ficha_exists->Cepillo, ['disabled'=>'disabled'] )!!}
                {!!Form::label('_cepillo','Cepillo',array('class'=>'nobold')) !!}
              </div>

              <div class="form-group col-sm-3">
                {!!Form::checkbox('sedadental',null ,$ficha_exists->SedaDental, ['disabled'=>'disabled'])!!}
                {!!Form::label('_seda','Seda dental',array('class'=>'nobold')) !!}
              </div>

              <div class="form-group col-sm-3">
                {!!Form::checkbox('dentrifico',null ,$ficha_exists->Dentrífico, ['disabled'=>'disabled'] )!!}
                {!!Form::label('_dentrifico','Dentrífico',array('class'=>'nobold')) !!}
              </div>
              <div class="form-group col-sm-3">
                {!!Form::checkbox('colutorio',null ,$ficha_exists->Colutorio, ['disabled'=>'disabled'])!!}
                {!!Form::label('_colutorio','Colutorio',array('class'=>'nobold')) !!}
              </div>
              <div class="form-group col-sm-3">
                {!!Form::checkbox('otros', null, $ficha_exists->Otros,['disabled'=>'disabled'] )!!}
                {!!Form::label('_otros','Otros',array('class'=>'nobold')) !!}
              </div>

              @if ($ficha_exists->Otros==1)
                <div class="form-group col-sm-12">
                  {!!Form::label('nombreotros','Nombre otros: ') !!} {!!$ficha_exists->NombreOtros !!}
                </div>
              @endif

            </div>


            <div class="form-group col-sm-12">

              <div class="form-group col-sm-6">
                {!!Form::label('anestesiadental','¿Le han aplicado Anestesia Dental?') !!}
                @if ($ficha_exists->Anestesia==0)
                  <div class=" form-group col-sm-8">
                    {!!Form::radio('anestesiaNO',null, 1 ,['disabled'=>'disabled']) !!}
                    {!!Form::label('anestesia1','No',array('class'=>'nobold'))!!}
                  </div>
                @else
                  <div class="form-group col-sm-8">
                    {!!Form::radio('anestesiaSI',null, 1 ,['disabled'=>'disabled']) !!}
                    {!!Form::label('anestesia2','Si',array('class'=>'nobold'))!!}
                  </div>
                </div>

                <div class="form-group col-sm-6">
                  {!!Form::label('complicacionAnestesia','¿Ha tenido complicaciones al respecto?') !!}
                  @if ($ficha_exists->Complicacion_Anestesia==0)
                    <div class=" form-group col-sm-8">
                      {!!Form::radio('complicacionNO',null, 1 ,['disabled'=>'disabled']) !!}
                      {!!Form::label('complicacion1','No',array('class'=>'nobold'))!!}
                    </div>
                  @else
                    <div class=" form-group col-sm-8">
                      {!!Form::radio('complicacionSI',null, 1 ,['disabled'=>'disabled']) !!}
                      {!!Form::label('complicacion2','Si',array('class'=>'nobold'))!!}
                    </div>
                  @endif
                </div>
              @endif

              @if ($ficha_exists->Complicacion_Anestesia==1)
                <div class="form-group col-sm-8">
                  {!!Form::label('Especifique','Especifique: ') !!} {!!$ficha_exists->Complicacion !!}
                </div>
              @endif
              </div>

            <div class="form-group col-sm-12">
                {!!Form::label('Procedimientos') !!}
            </div>

            <div class="form-group col-sm-12">

              <div class="col-sm-6">
                {!!Form::checkbox('apicectomia',null , $ficha_exists->Apicectomia ,['disabled'=>'disabled']) !!}
                {!!Form::label('_apicectomia','Apicectomía',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('blanqueamiento',null , $ficha_exists->Blanqueamiento_Dental ,['disabled'=>'disabled'])!!}
                {!!Form::label('_blanqueamiento','Blanqueamiento Dental',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('empaste',null , $ficha_exists->Empaste ,['disabled'=>'disabled'])!!}
                {!!Form::label('_empaste','Empaste',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('endodoncia',null , $ficha_exists->Endodoncia ,['disabled'=>'disabled'])!!}
                {!!Form::label('_endodoncia','Endodoncia',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('exodoncia',null , $ficha_exists->Exodoncia ,['disabled'=>'disabled'])!!}
                {!!Form::label('_exodoncia','Exodoncia',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('explorador',null , $ficha_exists->Explorador_Dental ,['disabled'=>'disabled'])!!}
                {!!Form::label('_explorador','Explorador Dental',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('gingivectomia',null , $ficha_exists->Gingivectomía ,['disabled'=>'disabled'])!!}
                {!!Form::label('_gingivectomia','Gingivectomía',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('gingivoplastia',null , $ficha_exists->Gingivoplastía ,['disabled'=>'disabled'])!!}
                {!!Form::label('_gingivoplastia','Gingivoplastía',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('higienebucodental',null , $ficha_exists->Higiene_Bucodental ,['disabled'=>'disabled'])!!}
                {!!Form::label('_higiene','Higiene Bucodental',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('implantedental',null , $ficha_exists->Implante_Dental ,['disabled'=>'disabled'])!!}
                {!!Form::label('_implante','Implante Dental',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('limpiezadental',null , $ficha_exists->Limpieza_Dental ,['disabled'=>'disabled'])!!}
                {!!Form::label('_limpieza','Limpieza Dental',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('ostectomia',null , $ficha_exists->Ostectomía ,['disabled'=>'disabled'])!!}
                {!!Form::label('_ostectomia','Ostectomía',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('remineralizacion',null , $ficha_exists->Remineralización_dental ,['disabled'=>'disabled'])!!}
                {!!Form::label('_remineralizacion','Remineralización Dental',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('sitioEstado',null , $ficha_exists->SitioEstado ,['disabled'=>'disabled'])!!}
                {!!Form::label('_sitioestado','Sitio/Estado',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('tartrectomia',null , $ficha_exists->Tartrectomía ,['disabled'=>'disabled'])!!}
                {!!Form::label('_tartrectomia','Tartrectomía',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('colgajo',null , $ficha_exists->TecnicaColgajo ,['disabled'=>'disabled'])!!}
                {!!Form::label('_colgajo','Técnica de elevación del colgajo',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('senomaxilar',null , $ficha_exists->TecnicaSenoMaxilar ,['disabled'=>'disabled'])!!}
                {!!Form::label('_senomaxilar','Técnica de elevación del seno maxilar',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('regeneracionosea',null , $ficha_exists->RegeneracionOsea ,['disabled'=>'disabled'])!!}
                {!!Form::label('_regeneracionosea','Técnica de regeneración ósea guiada',array('class'=>'nobold')) !!}
              </div>

              <div class="col-sm-6">
                {!!Form::checkbox('terapiafluoruro',null , $ficha_exists->TerapiaFluoruro ,['disabled'=>'disabled'])!!}
                {!!Form::label('_fluoruro','Terapia de fluoruro',array('class'=>'nobold')) !!}
              </div>
            </div>

              <div class="form-group col-sm-12">
                {!!Form::label('alerta_medica','Alerta Médica: ') !!} {!!$ficha_exists->Alerta_Medica!!}
              </div>

          </div>

        </div>
      </div>

    </div>
</div>


@endsection
