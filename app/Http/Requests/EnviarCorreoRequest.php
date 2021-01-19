<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnviarCorreoRequest extends FormRequest
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
            'nombre' => 'required',
            'domicilio' => 'required',
            'documento' => 'required',
            'numeroDoc' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'bien' => 'required',
            'monto' => 'required',
            'DescProdu' => 'required|min:10',
            'tipReclamo' => 'required',
            'DetReclamo' => 'required|min:10',
            'PedReclamo' => 'required|min:10',
            'acuerdo' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'nombre.required' => __('Nombres completos es obligatorios'),
            'domicilio.required' =>  __('Domicilio es obligatorio'),
             'documento.required' =>  __('Documento de Identidad es obligatorio'),
            'numeroDoc.required' =>  __('Número de Documento es obligatorios'),
            'telefono.required' =>  __('Telefono es obligatorio'),
            'email.required' =>  __('Correo Electronico es obligatorio'),
            'bien.required' =>  __('Slecciona un tipo de bien a reclamar.'),
            'monto.required' =>  __('Monto es obligatorio'),
            'DescProdu.required' =>  __('Descripción del producto o servicio es obligatorio'),
            'tipReclamo.required' =>  __('Seleccione un tipo de reclamo'),
            'DetReclamo.required' =>  __('Detalle del reclamo es obligatorio'),
            'PedReclamo.required' =>  __('Pedido del reclamo es obligatorio'),
            'acuerdo.required' =>  __('Declaración titular es obligatoria.')
        ];
    }
}
