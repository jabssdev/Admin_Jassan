<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Con_Google extends Model
{
    protected $table = 'con_google';

    protected $fillable = [
        'id',
        'face_pixel',
        'face_verificacion',
        'face_token',
        'google_tag_global',
        'google_tag_fragmento'
        
    ];
}
