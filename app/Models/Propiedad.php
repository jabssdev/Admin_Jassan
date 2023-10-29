<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedades';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'descripcion_cliente',
        'tipo_casa',
        'tipo_operacion',
        'habitaciones',
        'cocheras',
        'banios',
        'banios_visista',
        'area_terreno',
        'area_construido',
        'area_ocupado',
        'n_piso',
        'precio_alquiler_d',
        'precio_alquiler_s',
        'anio_construccion',
        'pais',
        'departamento',
        'provincia',
        'distrito',
        'direccion',
        'urbanizacion',
        'referencia',
        'pin',
        'ubi_exacta',
        'longitud',
        'latitud',
        'zonificacion',
        'frente',
        'lat_derecho',
        'lat_izquierdo',
        'fondo'
    ];
}
