<?php



use App\Http\Controllers\ProductosController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//RUTAS DE USUARIOS 
Route::get('usuarios', [UsuarioController::class, 'list']);
Route::get('usuarios/{usuario}', [UsuarioController::class, 'show']);
Route::post('usuarios', [UsuarioController::class, 'store']);
Route::put('usuarios/{usuario}', [UsuarioController::class, 'update']);
Route::delete('usuarios/{usuario}', [UsuarioController::class, 'destroy']);

//RUTAS DE EMPRESAS 
Route::get('empresas', [EmpresaController::class, 'list']);
Route::get('empresas/{empresa}', [EmpresaController::class, 'show']);
Route::post('empresas', [EmpresaController::class, 'store']);
Route::put('empresas/{empresa}', [EmpresaController::class, 'update']);
Route::delete('empresas/{empresa}', [EmpresaController::class, 'destroy']);


//RUTAS DE PRODUCTOS 
Route::get('productos', [ProductosController::class, 'list']);
Route::get('productos/{producto}', [ProductosController::class, 'show']);
Route::post('productos', [ProductosController::class, 'store']);
Route::put('productos/{producto}', [ProductosController::class, 'update']);
Route::delete('productos/{producto}', [ProductosController::class, 'destroy']);

//Route::get('productos', 'App\Http\Controllers\ProductosController@list');
//Route::post('productos', 'App\Http\Controllers\ProductosController@store');

//RUTAS DE EMPLEADOS 
Route::get('empleados', [EmpleadoController::class, 'list']);
Route::get('empleados/{empleado}', [EmpleadoController::class, 'show']);
Route::post('empleados', [EmpleadoController::class, 'store']);
Route::put('empleados/{empleado}', [EmpleadoController::class, 'update']);
Route::delete('empleados/{empleado}', [EmpleadoController::class, 'destroy']);

//RUTAS DE VENTAS 
Route::get('ventas', [VentaController::class, 'list']);
Route::get('ventas/{venta}', [VentaController::class, 'show']);
Route::post('ventas', [VentaController::class, 'store']);
Route::put('ventas/{venta}', [VentaController::class, 'update']);
Route::delete('ventas/{venta}', [VentaController::class, 'destroy']);
