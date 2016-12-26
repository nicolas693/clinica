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
            'rut' => 'required|max:8|min:7|unique:paciente,rut',
            'Nombre' =>'required|max:15|regex:/^[a-zA-Z]+$/u',
            'Paterno' =>'required|max:15|regex:/^[a-zA-Z]+$/u',
            'Materno' =>'required|max:15|regex:/^[a-zA-Z]+$/u',
            'Fecha_Ingreso' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
            'Genero' =>'required|regex:/^[MF]$/',
            'Fecha_Nacimiento' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
            'Telefono_Casa' =>'min:7|max:9',
            'Telefono_Movil' =>'min:7|max:9',
            'Telefono_Oficina' =>'min:7|max:9',
            'Calle' =>'required|max:25|regex:/^[a-zA-Z\s]*$/',
            'Numero_Calle' =>'required|max:25',
            'Pais' =>'max:15|regex:/^[a-zA-Z]+$/u',
            'Region' =>'max:15|regex:/^[a-zA-Z]+$/u',
            'Comuna' =>'max:15|regex:/^[a-zA-Z]+$/u',
            'Nacionalidad' =>'required|max:15|regex:/^[a-zA-Z]+$/u',
            'Cobertura_Medica' =>'required|max:15|regex:/^[a-zA-Z]+$/u',




        ];
    }
}
