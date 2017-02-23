<?php
  namespace clinica\http\Requests\Ficha;
  use clinica\https\Requests\Request;

  /**
   *
   */
  class FichaCreateRequiest extends Request
  {

    function authorize()
    {
      return true;
    }
    public function rules()
    {
        return[
          'Telefono' => 'min:8|max:11|regex:/[0-9]/',
          'Ocupacion' => ['required','min:4','max:15','regex:/^[\pL\s\-]+$/u'],
          'Calle' => 'required|max:25|regex:/^[\pL\s\0-9\-]+$/u',
          'Numero_Calle' => 'min:4|max:5|regex:/[0-9]/',
          'Sexo' => ['required','min:8','max:9','regex:/^[\pL\s\-]+$/u'],
          'Motivo_Consulta' => 'required|max:100|regex:/^[\pL\s\0-9\-]+$/u',
          'Expectativas' => 'required|max:100|regex:/^[\pL\s\0-9\-]+$/u',
          'Farmacos_Uso' => 'max:100|regex:/^[\pL\s\0-9\-]+$/u',
          'Alerta_Medica' => 'max:100|regex:/^[\pL\s\0-9\-]+$/u',
        ];
    }

  }




 ?>
