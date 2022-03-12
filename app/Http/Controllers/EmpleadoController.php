<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Http\Requests\GuardarEmpleado;


class EmpleadoController extends Controller
{
    //LISTAR TODOS LOS REGISTROS 
    public function list()
    {
        $empleados = Empleado::with('id_empresa')->get();
        return $empleados->toArray();
    }


    //LISTAR UN REGISTRO EN ESPECIDFICO
    public function show(Empleado $empleado)
    {
        return response()->json([
            'res' => true,
            'Empleado' => $empleado
        ], 200);
    }

    //CREAR UN NUEVO REGISTRO
    public function store(GuardarEmpleado $request)
    {
        Empleado::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Empleado creado correctamente'
        ], 200);
    }

    //ACTUALIZAR UN REGISTRO 
    public function update(GuardarEmpleado $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return response()->json([
            'res' => 'true',
            'mensaje' => 'Empleado actualizado correctamente'
        ], 200);
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return response()->json([
            'res' => 'true',
            'mensaje' => 'Empleado eliminado correctamente'
        ], 200);
    }
}
