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

    function valida_rut($rut)
{
    $rut = preg_replace('/[^k0-9]/i', '', $rut);
    $dv  = substr($rut, -1);
    $numero = substr($rut, 0, strlen($rut)-1);
    $i = 2;
    $suma = 0;
    foreach(array_reverse(str_split($numero)) as $v)
    {
        if($i==8)
            $i = 2;
        $suma += $v * $i;
        ++$i;
    }
    $dvr = 11 - ($suma % 11);

    if($dvr == 11)
        $dvr = 0;
    if($dvr == 10)
        $dvr = 'K';
    if($dvr == strtoupper($dv))
        return true;
    else
        return false;
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
            'Telefono_Casa' =>'min:7|max:9|regex:/[0-9]/',
            'Telefono_Movil' =>'min:7|max:9|regex:/[0-9]/',
            'Telefono_Oficina' =>'min:7|max:9|regex:/[0-9]/',
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
