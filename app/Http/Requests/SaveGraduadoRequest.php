<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaveGraduadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'cedula' => 'required',
            'fecha_grado' => 'required',
            'email' => 'required',
            'num_celular' => 'required',
            'pais_residencia' => 'required'
        ];
    }

    public function messages() 
    {
        return [
            'nombre.required' => 'Se requiere de un nombre',
            'cedula.required' => 'Se requiere de una cédula',
            'fecha_grado.required' => 'Se requiere de una fecha de grado',
            'email.required' => 'Se requiere un email',
            'num_celular.required' => 'Se requiere de un número de celular',
            'pais_residencia.required' => 'Se debe elegir un país de residencia'
        ];
    }
}
