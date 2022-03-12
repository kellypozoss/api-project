<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Usuario;

class Empresa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'empresa';
    protected $primaryKey = 'id_empresa';
    protected $fillable = [
        'correo',
        'contrasena',
        'nombre_empresa',
        'estado',
        'municipio',
        'cp',
        'calle',
        'numero',
        'imagen',
        'id_usuario'

    ];

    public function id_usuario()
    {
        return $this->hasOne(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
