<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Con_Pagina extends Model
{
    protected $table = 'con_pagina';

    protected $fillable = [
        'id',
        'titulo_principal',
        'titulo_propiedades',
        'f_contacto_principal',
        'f_principal_pagina',
        'f_secundario',
        'titulo_quiensoy',
        'subtitulo',
        'titulo_asivendo',
        'beneficio',
        'formulario',
        'imagen_comparto',
        'imagen_quien',
        'imagen_formulario'

        
    ];
}
