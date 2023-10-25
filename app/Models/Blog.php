<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'id',
        'primera_imagen',
        'titulo',
        'descripcion_corta',
        'primer_subtitulo',
        'primer_parrafo',
        'segundo_parrafo',
        'frase',
        'segundo_subtitulo',
        'tercer_parrafo',
        'segunda_imagen',
        'cuarto_parrafo',
        'tercera_imagen',
        'tercer_subtitulo',
        'quinto_parrafo'
    ];
}
