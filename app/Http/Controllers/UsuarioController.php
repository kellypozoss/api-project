<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\GuardarUsuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //LISTAR TODOS LOS REGISTROS 
    public function list()
    {
        $usuario = Usuario::all();
        return response()->json($usuario);
    }


    //LISTAR UN REGISTRO EN ESPECIDFICO
    public function show(Usuario $usuario)
    {
        return response()->json([
            'res' => true,
            'Usuario' => $usuario
        ], 200);
    }

    //CREAR UN NUEVO REGISTRO
    public function store(GuardarUsuario $request)
    {
        Usuario::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Usuario creado correctamente'
        ], 200);
    }

    //ACTUALIZAR UN REGISTRO 
    public function update(GuardarUsuario $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json([
            'res' => 'true',
            'mensaje' => 'Usuario actualizado correctamente'
        ], 200);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json([
            'res' => 'true',
            'mensaje' => 'Usuario eliminado correctamente'
        ], 200);
    }
}
