<?php

 namespace App\Helpers;

 use App\Models\Afiliado;
 use Firebase\JWT\JWT;

 class JwtAuth
{
    private $key;

    public function __construct()
    {
        $this->key = ('my-key');
    }

    public function signup($email, $password)
    {
        $data = Afiliado::where(
            array(
                'email' => $email,
                'contrasena' => $password
            )
        )->first();

        $signup = false;

        if (is_object($data)) {
            $signup = true;
        }

        if ($signup) {
            $user = array(
                'id_afiliado' => $data->id_afiliado,
                'nombre' => $data->nombre,
                'categoria_1' => $data->categoria_1,
                'categoria_2' => $data->categoria_2,
                'categoria_libre' => $data->categoria_libre,
                'telefono' => $data->telefono,
                'logo' => $data->logo,
                'email' => $data->email,
                'calle' => $data->calle,
                'numero' => $data->numero,
                'colonia' => $data->colonia,
                'codigo_p' => $data->codigo_p,
                'num_palabras' => $data->num_palabras
            );

           
        }
    }
}