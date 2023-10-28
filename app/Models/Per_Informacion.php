<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Informacion extends Model
{
    protected $table = 'per_informacion';

    protected $fillable = [
        'id',
        'imagen',
        'nombres',
        'apellidos',
        'correo',
        'pais',
        'direccion',
        'anios_experiencia',
        'what_codigo',
        'what_numero',
        'primer_cel_codigo',
        'primer_cel_numero',
        'segundo_cel_codigo',
        'segundo_cel_numero',
        'descripcion'
        
    ];
}
