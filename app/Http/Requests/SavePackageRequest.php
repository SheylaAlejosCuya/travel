<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePackageRequest extends FormRequest
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
            'country_id' => 'required',
         ];
    }
    public function messages()
    {
        return[
            'title.required' => __('El paquete necesita un titulo :)'),
            'country_id.required' => __('Señalar categoria')
        ];
    }
}
