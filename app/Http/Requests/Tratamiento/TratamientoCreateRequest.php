<?php

namespace clinica\Http\Requests\Tratamiento;

use clinica\Http\Requests\Request;

class TratamientoCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'Diente' => ['required','max:2','regex:/[0-9]/'],
          'Costo' => ['required','min:4','max:7','regex:/[0-9]/'],
          'nProfe' => ['required','min:4','max:20','regex:/^[\pL\s\-]+$/u'],
          'AccionR' => ['required','min:15','max:200','regex:/^[\pL\s\-]+$/u'],
        ];
    }

    public function messages()
    {
      return [
        'AccionR.required' => 'El campo Acción a realizar es obligatorio',
        'AccionR.min' => 'El Campo Acción a realizar requiere como mínimo 15 letras',
        'AccionR.regex' => 'El formato Acción a realizar es invalido',
      ];
    }
}
