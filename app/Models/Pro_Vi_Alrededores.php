<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Vi_Alrededores extends Model
{
    protected $table = 'pro_vi_alrededores';
    protected $fillable = [
        'id',
        'id_propiedad',
        'video',
        'miniatura'
        
    ];
}
