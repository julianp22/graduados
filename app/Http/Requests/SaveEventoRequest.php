<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class SaveEventoRequest extends FormRequest
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
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required'
        ];
    }

    public function messages() 
    {
        return [
            'titulo.required' => 'Se requiere de un título',
            'descripcion.required' => 'Se requiere de una descripcion',
            'fecha_inicio.required' => 'Se requiere una fecha de inicio',
            'fecha_fin.required' => 'Se requiere de una fecha fin'
        ];
    }
}
