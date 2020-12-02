<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class SaveExperienciaRequest extends FormRequest
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
            'url_video' => 'required',
            'descripcion' => 'required',
        ];
    }

    public function messages() 
    {
        return [
            'url_video.required' => 'Se requiere de un vídeo',
            'descripcion.required' => 'Se requiere de una descripción'
        ];
    }
}
