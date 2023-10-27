<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Con_Informacion extends Model
{
    protected $table = 'con_informacion';

    protected $fillable = [
        'id',
        'titulo_web',
        'titulo_footer',
        'texto_footer',
        
    ];
}
