<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarEmpleado extends FormRequest
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
            "nombre" => "required",
            "apellido_p" => "required",
            "apellido_m" => "required",
            "telefono" => "required",
            "correo" => "required",
            "sueldo" => "required",
            "id_empresa" => "required"

        ];
    }
}
