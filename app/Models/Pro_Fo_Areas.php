<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Fo_Areas extends Model
{
    protected $table = 'pro_fo_areas';
    protected $fillable = [
        'id',
        'id_propiedad',
        'foto',
        'titulo',
        'descripcion'
        
    ];
}
