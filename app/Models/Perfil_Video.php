<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil_Video extends Model
{
    protected $table = 'perfil_videos';
    protected $fillable = [
        'id',
        'video',
        
    ];
}
