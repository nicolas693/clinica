<?php

namespace clinica\Http\Requests\Paciente;

use clinica\Http\Requests\Request;
use Illuminate\Routing\Route;


class PacienteUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function __construct(Route $route){
       $this->route=$route;
     }


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
          'rut' => 'required|cl_rut'.$this->route->getparameter('paciente'),
          'Nombre' => ['required','min:3','max:15','alpha'],
          'Paterno' => ['required','max:15','alpha'],
          'Materno' => ['required','max:15','alpha'],
          'Fecha_Ingreso' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
          'Genero' =>'required|regex:/^[MF]$/',
          'Fecha_Nacimiento' =>'required|regex:/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/',
          'Telefono_Casa' => ['required','min:7','max:9','integer'],
          'Telefono_Movil' =>['required','min:7','max:9','integer'],
          'Telefono_Oficina' => ['required','min:7','max:9','integer'],
          'Calle' =>['required','max:25','alpha_num'],
          'Numero_Calle' =>['required','max:25','integer'],
          'Pais' =>['required','max:15','alpha'],
          'Region' =>['required','max:15','alpha'],
          'Comuna' =>['required','max:15','alpha'],
          'Nacionalidad' => ['required','max:15','alpha'],
          'Cobertura_Medica' =>['required','max:15','alpha'],
        ];
    }

    public function messages()
    {
      return [
        'rut_alumno.cl_rut' => 'Formato de Rut no valido',
      ];
    }

}
