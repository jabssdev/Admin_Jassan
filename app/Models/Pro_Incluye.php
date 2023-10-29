<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_Incluye extends Model
{
    protected $table = 'pro_incluye';
    protected $fillable = [
        'id',
        'id_propiedad',
        'comedor',
        'salon_juegos',
        'area_parrillas',
        'comedor_diario',
        'lavanderia',
        'patio_trasero',
        'cocina',
        'dor_servicio',
        'alma_alimentos',
        'bar',
        'sala_estar',
        'piscina',
        'alma_general',
        'hall_ingreso',
        'salas',
        'escritorio',
        'cuarto_servicio',
        'jardin_interior',
        'patio',
        'sotano',
        'closet',
        'aire_acondicionado',
        'terraza',
        'jardin',
        'chimenea',
        'jacuzzi',
        'sauna',
        'gimnasio',
        'guardiana',
        'permi_mascotas',
        'no_mascotas',
        'club_playa',
        'club_house',
        'area_deportiva',
        'ascensor',
        'banio_visita',
    ];
}
