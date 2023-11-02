<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Distribucion extends Model
{
    protected $table = 'pro_distribucion';
    protected $fillable = [
        'id',
        'id_propiedad',
        'imagen',
        'pisos'
        
    ];
}
