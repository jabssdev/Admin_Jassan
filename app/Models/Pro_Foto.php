<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Foto extends Model
{
    protected $table = 'pro_fotos';
    protected $fillable = [
        'id',
        'id_propiedad',
        'foto',
        'destacado',
        'titulo',
        'descripcion'
        
    ];
}
