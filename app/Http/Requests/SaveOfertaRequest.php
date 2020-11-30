<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaveOfertaRequest extends FormRequest
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
            'cargo' => 'required',
            'empresa' => 'required',
            'descripcion' => 'required',
            'salario' => 'required',
            'url' => 'required'
        ];
    }

    public function messages() 
    {
        return [
            'cargo.required' => 'Se requiere de un cargo',
            'empresa.required' => 'Se requiere de una empresa',
            'descripcion.required' => 'Se requiere de una descripción',
            'salario.required' => 'Se requiere un salario',
            'url.required' => 'Se requiere de una URL'
        ];
    }
}
