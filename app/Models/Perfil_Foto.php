<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil_Foto extends Model
{
    protected $table = 'perfil_fotos';
    protected $fillable = [
        'id',
        'foto',
        'portada'
        
    ];
}
