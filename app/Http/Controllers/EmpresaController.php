<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Http\Requests\GuardarEmpresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    //LISTAR TODOS LOS REGISTROS 
    public function list()
    {
        $empresas = Empresa::with('id_usuario')->get();
        return $empresas->toArray();
    }

    //LISTAR UN REGISTRO ESPECÍFICO 
    public function show(Empresa $empresa)
    {
        return response()->json($empresa);
    }

    //CREAR UN NUEVO REGISTRO
    public function store(GuardarEmpresa $request)
    {
        Empresa::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Empresa registrada correctamente'
        ], 200);
    }

    //ACTUALIZAR UN REGISTRO 
    public function update(GuardarEmpresa $request, Empresa $empresa)
    {
        $empresa->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Empresa actualizada correctamente'
        ], 200);
    }

    //ELIMINAR UN REGISTRO DE MANERA LÓGICA 
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return response()->json([
            'res' => true,
            'mensaje' => 'Empresa eliminada correctamente'
        ], 200);
    }
}
