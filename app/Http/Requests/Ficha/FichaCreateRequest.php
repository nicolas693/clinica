<?php
  namespace clinica\Http\Requests\Ficha;
  use clinica\Http\Requests\Request;

  /**
   *
   */
  class FichaCreateRequest extends Request
  {

    function authorize()
    {
      return true;
    }
    public function rules()
    {
        return[
          'Ocupacion' => ['required','min:4','max:15','regex:/^[\pL\s\-]+$/u'],
          'Motivo_Consulta' => ['required','min:4','max:50','regex:/^[\pL\s\-]+$/u'],
          'Expectativas' => ['required','min:8','max:50','regex:/^[\pL\s\-]+$/u'],
          'Farmacos_Uso' => ['min:6','max:40','regex:/^[\pL\s\-]+$/u'],
          'Fecha_Ultima_Consulta' => ['regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/'],
          'Motivo_Ultima_Consulta' => ['min:6','max:40','regex:/^[\pL\s\-]+$/u'],
          'Anestesia' =>['required'],
          'Antecedentes_Traumatismo'=> ['required'],
          'DienteTraumatismo' => ['min:2','max:60','regex:/^[\0-9\,\-]+$/u'],
          'Fecha_Traumatismo' => ['regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/'],
          'Complicacion' => ['min:5','max:50','regex:/^[\pL\s\-]+$/u'],
          'Alerta_Medica' => ['min:5','max:50','regex:/^[\pL\s\-]+$/u'],
        ];
    }

  }




 ?>
