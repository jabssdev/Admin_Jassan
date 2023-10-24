<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $table = 'testimonios';

    protected $fillable = [
        'autor',
        'titulo',
        'testimonio',
        'imagen'
    ];
}
