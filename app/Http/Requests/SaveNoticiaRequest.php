<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveNoticiaRequest extends FormRequest
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
            'foto' => 'required'
        ];
    }

    public function messages() 
    {
        return [
            'titulo.required' => 'Se requiere de un titulo',
            'descripcion.required' => 'Se requiere de una descripción',
            'foto.required' => 'Se requiere un foto'
        ];
    }
}
