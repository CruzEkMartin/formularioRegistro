<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'municipio',
        'modalidad',
        'telefono',
        'email',
        'fechanacimiento',
        'carta',
        'extension_carta',
        'tamanio_carta',
        'representacion',
        'organizacion',
        'discapacidad',
        'temaPropuesta',
        'tipoPropuesta',
        'escrito',
        'documento',
        'extension_documento',
        'tamanio_documento',
        'video',
        'extension_video',
        'tamanio_video',
    ];
}
