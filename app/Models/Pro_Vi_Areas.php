<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Vi_Areas extends Model
{
    protected $table = 'pro_vi_areas';
    protected $fillable = [
        'id',
        'id_propiedad',
        'video',
        'miniatura'
        
    ];
}
