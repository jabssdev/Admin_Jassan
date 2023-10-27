<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Con_Google extends Model
{
    protected $table = 'detalle_con_google';

    protected $fillable = [
        'id',
        'id_con_google',
        'nombre',
        'tipo_evento',
        'url',
        
        
    ];
}
