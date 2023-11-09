<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tema;
use App\Models\Propiedad;
use App\Models\Per_Informacion;
use App\Models\Per_Redes;
use App\Models\Per_Adicional;
use App\Models\Perfil_Video;
use App\Models\Perfil_Foto;
use App\Models\Con_Informacion;
use App\Models\Con_Pagina;
use App\Models\Testimonio;
use App\Models\Blog;
class WebController extends Controller
{
    public function index(){
        $tema=Tema::find(1);
        $per_informacion=Per_Informacion::find(1);
        $per_redes=Per_Redes::find(1);
        $per_adicional=Per_Adicional::find(1);
        $videos=Perfil_Video::all();
        $fotos=Perfil_Foto::all();
        $portada=Perfil_Foto::where('portada','SI')->first();
        $pro_destacadas=Propiedad::where('destacado','SI')->get();
        $pro_ventas=Propiedad::where('tipo_operacion','En venta')->where('tipo_operacion','Alquiler - Venta')->get();
        $vendidos=Propiedad::where('estado','COMPLETADO')->get();
        $testimonios=Testimonio::all();
        $con_informacion=Con_Informacion::find(1);
        $con_pagina=Con_Pagina::find(1);
        $blogs=Blog::all();
        return view('web.index')->with(compact('tema','pro_destacadas','per_informacion','per_redes','per_adicional','videos','fotos','portada','pro_ventas','vendidos','testimonios','con_informacion','con_pagina','blogs'));
    }
    
}
