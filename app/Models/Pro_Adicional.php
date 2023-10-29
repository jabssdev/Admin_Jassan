<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Adicional extends Model
{
    protected $table = 'pro_adicional';

    protected $fillable = [
        'id',
        'id_propiedad',
        'agua',
        'fibra',
        'desague',
        'energia',
        'gas',
        'inscrito',
        'listo',
        'libre',
        'oficina',
        'financiamiento',
        'loza',
        'vias',
        'empresas',
        'patio',
        'portones',
        
    ];
}
