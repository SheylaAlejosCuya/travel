<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
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
            'title' => 'required',
            'descripcion' =>  'required',
            'image' => 'required',
         ];
    }
    public function messages()
    {
        return[
            'title.required' => __('El viaje necesita un titulo :)'),
            'descripcion.required' => __('Describe la viaje :)'),
            'image.required' => __('Imagen necesaria')
        ];
    }
}
