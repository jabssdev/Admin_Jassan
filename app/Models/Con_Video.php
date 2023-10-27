<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Con_Video extends Model
{
    protected $table = 'con_videos';

    protected $fillable = [
        'id',
        'primer_url',
        'segundo_url',
        'tercer_url'
        
    ];
}
