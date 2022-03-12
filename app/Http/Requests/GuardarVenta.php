<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarVenta extends FormRequest
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
            "fecha" => "required|date_format:Y/m/d",
            "cantidad_vendido" => "required",
            "precio_v" => "required",
            "id_producto" => "required",
            "id_empresa" => "required"
        ];
    }
}
