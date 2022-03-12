<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarEmpresa extends FormRequest
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
            "correo" => "required",
            "contrasena" => "required",
            "nombre_empresa" => "required",
            "estado" => "required",
            "municipio" => "required",
            "cp" => "required",
            "calle" => "required",
            "numero" => "required",
            "imagen" => "required",
            "id_usuario" => "required"
        ];
    }
}
