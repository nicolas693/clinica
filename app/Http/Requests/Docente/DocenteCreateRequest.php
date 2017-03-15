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

            'id' => ['required','cl_rut'],
            'Nombre' => ['required','min:3','max:12','regex:/^[\pL\s\-]+$/u'],
            'Paterno' => ['required','min:4','max:15','regex:/^[\pL\s\-]+$/u'],
            'Materno' => ['required','min:4','max:15','regex:/^[\pL\s\-]+$/u'],
            'Telefono' => ['required','min:7','max:9','regex:/[0-9]/'],
            //'user_id' => ['required','max:7','regex:/[0-9]/','unique:Docente','unique:Alumno','exists:users,id'],
        ];
    }

    public function messages()
    {
      return [
        'id.cl_rut' => 'Formato de Rut no valido',
        'id.regex' => 'El rut no debe contener espacios',
      ];
    }
}
