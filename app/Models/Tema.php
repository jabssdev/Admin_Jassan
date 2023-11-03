<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'temas';
    protected $fillable = [
        'id',
        'color_derechos',
        'color_barra_superior',
        'color_texto_superior',
        'color_fondo_general',
        'color_texto_general',
        'color_principal',
        'color_boton_primario',
        'color_boton_texto_primario',
        'color_boton_sec',
        'color_boton_texto_sec',
        'color_fondo_d_prop',
        'color_texto_d_prop',
        'color_fondo_conoce',
        'color_texto_conoce',
        'color_fondo_videos',
        'color_texto_videos',
        'color_fondo_fotos',
        'color_texto_fotos',
        'color_fondo_detalles',
        'color_texto_detalles',
        'color_fondo_polga',
        'color_texto_polga',
        'color_fondo_destacadas',
        'color_texto_destacadas',
        'color_fondo_enventa',
        'color_texto_enventa',
        'color_fondo_alquiler',
        'color_texto_alquiler',
        'color_fondo_vendi',
        'color_texto_vendi',
        'color_fondo_experiencia',
        'color_texto_experiencia',
        'color_fondo_comparto',
        'color_texto_comparto',
        'color_fondo_solga',
        'color_texto_solga',
        'color_fondo_noticias',
        'color_texto_noticias'
    ];
}
