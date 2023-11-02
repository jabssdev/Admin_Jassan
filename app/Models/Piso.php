<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $table = 'pisos';
    protected $fillable = [
        'id',
        'id_pro_distribucion',
        'tipo',
        'area',
        'dormitorios',
        'banios',
        'n_cuarto'
        
    ];
}
