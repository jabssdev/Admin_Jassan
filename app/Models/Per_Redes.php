<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Redes extends Model
{
    protected $table = 'per_redes';

    protected $fillable = [
        'id',
        'face_link',
        'you_link',
        'insta_link',
        'lin_link',
        'tik_link',
        
        
    ];
}
