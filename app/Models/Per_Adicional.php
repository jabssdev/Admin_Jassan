<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Adicional extends Model
{
    protected $table = 'per_adicional';

    protected $fillable = [
        'id',
        'p_vendidas',
        'p_alquiladas',
        'p_vendidas_mes',
        
        
    ];
}
