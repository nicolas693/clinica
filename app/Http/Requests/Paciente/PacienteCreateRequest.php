<?php

namespace clinica\Http\Requests\Paciente;

use clinica\Http\Requests\Request;

class PacienteCreateRequest extends Request
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

            'rut' => ['required','cl_rut'],
            'Nombre' => ['required','min:3','max:15','alpha'],
            'Paterno' => ['required','min:4','max:15','alpha'],
            'Materno' => ['required','min:4','max:15','alpha'],
            'Fecha_Ingreso' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
            'Genero' =>'required|regex:/^[MF]$/',
            'Fecha_Nacimiento' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
            'Telefono_Casa' => ['required','min:7','max:9','integer'],
            'Telefono_Movil' =>['required','min:7','max:9','integer'],
            'Telefono_Oficina' => ['required','min:7','max:9','integer'],
            'Calle' =>['required','max:25','alpha_num'],
            'Numero_Calle' =>['required','min:2','max:25','integer'],
            'Pais' =>['required','max:15','alpha'],
            'Region' =>['required','min:4','max:15','alpha'],
            'Comuna' =>['required','min:4','max:15','alpha'],
            'Nacionalidad' => ['required','min:4','max:15','alpha'],
            'Cobertura_Medica' =>['required','min:6','max:15','alpha'],

        ];
    }

    public function messages()
    {
      return [
        'rut_alumno.cl_rut' => 'Formato de Rut no valido',
      ];
    }


}
