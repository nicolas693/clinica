<?php

namespace clinica\Http\Requests\Docente;

use clinica\Http\Requests\Request;

class DocenteCreateRequest extends Request
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
            'rut_alumno' => ['required','cl_rut'],
            'Nombre_Alumno' => ['required','min:3','max:12','alpha'],
            'Apellido_Alumno' => ['required','min:4','max:15','alpha'],
            'Telefono_Alumno' => ['required','min:7','max:9','integer'],
            'user_id' => ['required','max:7','integer'],
        ];
    }

    public function messages()
    {
      return [
        'rut_alumno.cl_rut' => 'Formato de Rut no valido',
        'Nombre_Alumno.alpha' => 'El nombre del Alumno solo debe contener letras',
        'user_id.required' => 'El campo código usuario es obligatorio'
      ];
    }
}
