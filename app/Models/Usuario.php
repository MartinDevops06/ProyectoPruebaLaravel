<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = [
        'nombre',
        'apellidos',
        'correo',
        'telefono',
        'direccion',
        'DocumentoId',
        'password'
    ];
}
