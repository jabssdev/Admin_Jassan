<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Con_Logo extends Model
{
    protected $table = 'con_logo';

    protected $fillable = [
        'id',
        'logo',
        'favicon',
        
    ];
}
