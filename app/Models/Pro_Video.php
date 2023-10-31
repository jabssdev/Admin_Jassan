<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Video extends Model
{
    protected $table = 'pro_videos';
    protected $fillable = [
        'id',
        'id_propiedad',
        'video',
        'miniatura'
        
    ];
}
