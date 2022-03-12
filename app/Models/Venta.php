<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Producto;
use App\Models\Empresa;

class Venta extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'ventas';
    protected $primaryKey = 'id_venta';
    protected $fillable = [
        'id_venta',
        'fecha',
        'cantidad_vendido',
        'precio_v',
        'id_producto',
        'id_empresa'

    ];

    public function id_producto()
    {
        return $this->hasOne(Producto::class, 'id_producto', 'id_producto');
    }
    public function id_empresa()
    {
        return $this->hasOne(Empresa::class, 'id_empresa', 'id_empresa');
    }
}
