<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Foto extends Model
{
    protected $table = 'per_fotos';

    protected $fillable = [
        'id',
        'imagen1',
        'imagen2',
        'imagen3',
        'imagen4',
        'imagen5',
        'imagen6',
        'imagen7',
        'imagen8',
        'imagen9',
        'imagen10',
        'imagen11',
        'portada'
        
    ];
}
