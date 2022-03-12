<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\GuardarProductoRequest;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //LISTAR TODOS LOS REGISTROS 
    public function list()
    {
        $productos = Producto::with('id_empresa')->get();
        return $productos->toArray();
    }

    //LISTAR UN REGISTRO ESPECÍFICO 
    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    //CREAR UN NUEVO REGISTRO
    public function store(GuardarProductoRequest $request)
    {
        Producto::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Producto registrado correctamente'
        ], 200);
    }

    //ACTUALIZAR UN REGISTRO 
    public function update(GuardarProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Producto actualizado correctamente'
        ], 200);
    }

    //ELIMINAR UN REGISTRO DE MANERA LÓGICA 
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json([
            'res' => true,
            'mensaje' => 'Producto eliminado correctamente'
        ], 200);
    }
}
