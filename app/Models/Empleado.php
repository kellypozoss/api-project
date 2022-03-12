<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Empresa;



class Empleado extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable = [

        'id_empleado',
        'nombre',
        'apellido_p',
        'apellido_m',
        'telefono',
        'correo',
        'sueldo',
        'id_empresa'

    ];

    public function id_empresa()
    {
        return $this->hasOne(Empresa::class, 'id_empresa', 'id_empresa');
    }
}
