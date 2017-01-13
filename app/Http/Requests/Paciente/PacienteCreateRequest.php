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
            'Nombre' => ['required','min:3','max:15','regex:/^[\pL\s\-]+$/u'],
            'Paterno' => ['required','min:4','max:15','regex:/^[\pL\s\-]+$/u'],
            'Materno' => ['required','min:4','max:15','regex:/^[\pL\s\-]+$/u'],
            'Fecha_Ingreso' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
            'Fecha_Nacimiento' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
            'Telefono_Casa' =>'min:7|max:9|regex:/[0-9]/',
            'Telefono_Movil' =>'min:7|max:9|regex:/[0-9]/',
            'Telefono_Oficina' =>'min:7|max:9|regex:/[0-9]/',
            'Calle' =>'required|max:25|regex:/^[\pL\s\0-9\-]+$/u',
            'Numero_Calle' =>'min:4|max:5|regex:/[0-9]/',
            'Pais' =>['required','max:15','regex:/^[\pL\s\-]+$/u'],
            'Region' =>['required','min:4','max:20','regex:/^[\pL\s\-]+$/u'], //Esta regla regex admite Ñ, mayusculas, minusculas y saltos de linea
            'Comuna' => ['required','max:25','regex:/^[\pL\s\-]+$/u'],
            'Nacionalidad' => ['required','min:4','max:15','regex:/^[\pL\s\-]+$/u'],
            'Cobertura_Medica' =>['required','min:6','max:15','regex:/^[\pL\s\-]+$/u'],

        ];
    }

    public function messages()
    {
      return [
        'alumno_id.cl_rut' => 'Formato de Rut no valido',
      ];
    }


}
