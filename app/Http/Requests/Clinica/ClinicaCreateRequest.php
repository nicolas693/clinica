<?php

namespace clinica\Http\Requests\Clinica;

use clinica\Http\Requests\Request;

class ClinicaCreateRequest extends Request
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
            'id_Clinica' => 'required|unique:Clinica,id_Clinica',
            'Nombre_Clinica' => 'required|max:15|regex:/^[a-zA-Z\s]*$/',
            'Direccion_Clinica' => 'required|max:25|regex:/^[a-zA-Z\s]*$/',
            'Telefono_Clinica' => 'required|min:7|max:9',
        ];
    }
}
