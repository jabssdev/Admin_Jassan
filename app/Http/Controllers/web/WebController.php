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
use App\Models\Pro_Distribucion;
use App\Models\Pro_Incluye;
use App\Models\Pro_Adicional;
use App\Models\Pro_Foto;
use App\Models\Pro_Video;
use App\Models\Pro_Vi_Alrededores;
use App\Models\Pro_Fo_Alrededores;
use App\Models\Pro_Vi_Areas;
use App\Models\Pro_Fo_Areas;

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
        $pro_ventas=Propiedad::where('tipo_operacion',['En venta', 'Alquiler - Venta'])->get();
        $vendidos=Propiedad::where('estado','COMPLETADO')->get();
        $testimonios=Testimonio::all();
        $con_informacion=Con_Informacion::find(1);
        $con_pagina=Con_Pagina::find(1);
        $blogs=Blog::all();
        return view('web.index')->with(compact('tema','pro_destacadas','per_informacion','per_redes','per_adicional','videos','fotos','portada','pro_ventas','vendidos','testimonios','con_informacion','con_pagina','blogs'));
    }
    public function detallePropiedad($id){
        $tema=Tema::find(1);
        $propiedad = Propiedad::find($id);
        $pisos = Pro_Distribucion::where('id_propiedad',$id)->get();
        $incluye=Pro_Incluye::where('id_propiedad',$id)->first();
        $adicional=Pro_Adicional::where('id_propiedad',$id)->first();
        $fotos=Pro_Foto::where('id_propiedad',$id)->get();
        $videos=Pro_Video::where('id_propiedad',$id)->get();
        $videos_alrededor=Pro_Vi_Alrededores::where('id_propiedad',$id)->get();
        $fotos_alrededor=Pro_Fo_Alrededores::where('id_propiedad',$id)->get();
        $videos_areas=Pro_Vi_Areas::where('id_propiedad',$id)->get();
        $fotos_areas=Pro_Fo_Areas::where('id_propiedad',$id)->get();
        $con_informacion=Con_Informacion::find(1);
        $con_pagina=Con_Pagina::find(1);
        $per_redes=Per_Redes::find(1);
        $pro_ventas=Propiedad::where('tipo_operacion',['En venta', 'Alquiler - Venta'])->get();
        return view('web.propiedad')->with(compact('tema','propiedad','pisos','incluye','adicional','videos_alrededor','fotos_alrededor','videos_areas','fotos_areas','videos','fotos','con_informacion','con_pagina','per_redes','pro_ventas'));
    }
    public function blog($id){
        $tema=Tema::find(1);
        $blog = Blog::find($id);
        $todos =Blog::all();
        $con_informacion=Con_Informacion::find(1);
        $con_pagina=Con_Pagina::find(1);
        $per_redes=Per_Redes::find(1);
        return view('web.blog')->with(compact('tema','blog','todos','con_informacion','con_pagina','per_redes'));
    }
    
}
