<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tema;
use DB;
class TemaController extends Controller
{
    public function index(){
        $tema=Tema::find(1);
        return view('admin.tema.index')->with(compact('tema'));
    }
    
    public function store(Request $request){

        try{
            DB::beginTransaction();
            $tema=Tema::where('id',1)->first();
            if(isset($tema)){
                $tema->color_derechos=$request->color_derechos;
                $tema->color_barra_superior=$request->color_barra_superior;
                $tema->color_texto_superior=$request->color_texto_superior;
                $tema->color_fondo_general=$request->color_fondo_general;
                $tema->color_texto_general=$request->color_texto_general;
                $tema->color_principal=$request->color_principal;
                $tema->color_boton_primario=$request->color_boton_primario;
                $tema->color_boton_texto_primario=$request->color_boton_texto_primario;
                $tema->color_boton_sec=$request->color_boton_sec;
                $tema->color_boton_texto_sec=$request->color_boton_texto_sec;
                $tema->color_fondo_d_prop=$request->color_fondo_d_prop;
                $tema->color_texto_d_prop=$request->color_texto_d_prop;
                $tema->color_fondo_conoce=$request->color_fondo_conoce;
                $tema->color_texto_conoce=$request->color_texto_conoce;
                $tema->color_fondo_videos=$request->color_fondo_videos;
                $tema->color_texto_videos=$request->color_texto_videos;
                $tema->color_fondo_fotos=$request->color_fondo_fotos;
                $tema->color_texto_fotos=$request->color_texto_fotos;
                $tema->color_fondo_detalles=$request->color_fondo_detalles;
                $tema->color_texto_detalles=$request->color_texto_detalles;
                $tema->color_fondo_polga=$request->color_fondo_polga;
                $tema->color_texto_polga=$request->color_texto_polga;
                $tema->color_fondo_destacadas=$request->color_fondo_destacadas;
                $tema->color_texto_destacadas=$request->color_texto_destacadas;
                $tema->color_fondo_enventa=$request->color_fondo_enventa;
                $tema->color_texto_enventa=$request->color_texto_enventa;
                $tema->color_fondo_alquiler=$request->color_fondo_alquiler;
                $tema->color_texto_alquiler=$request->color_texto_alquiler;
                $tema->color_fondo_vendi=$request->color_fondo_vendi;
                $tema->color_texto_vendi=$request->color_texto_vendi;
                $tema->color_fondo_experiencia=$request->color_fondo_experiencia;
                $tema->color_texto_experiencia=$request->color_texto_experiencia;
                $tema->color_fondo_comparto=$request->color_fondo_comparto;
                $tema->color_texto_comparto=$request->color_texto_comparto;
                $tema->color_fondo_solga=$request->color_fondo_solga;
                $tema->color_texto_solga=$request->color_texto_solga;
                $tema->color_fondo_noticias=$request->color_fondo_noticias;
                $tema->color_texto_noticias=$request->color_texto_noticias;

            }else{
                $tema = new Tema();
                $tema->color_derechos=$request->color_derechos;
                $tema->color_barra_superior=$request->color_barra_superior;
                $tema->color_texto_superior=$request->color_texto_superior;
                $tema->color_fondo_general=$request->color_fondo_general;
                $tema->color_texto_general=$request->color_texto_general;
                $tema->color_principal=$request->color_principal;
                $tema->color_boton_primario=$request->color_boton_primario;
                $tema->color_boton_texto_primario=$request->color_boton_texto_primario;
                $tema->color_boton_sec=$request->color_boton_sec;
                $tema->color_boton_texto_sec=$request->color_boton_texto_sec;
                $tema->color_fondo_d_prop=$request->color_fondo_d_prop;
                $tema->color_texto_d_prop=$request->color_texto_d_prop;
                $tema->color_fondo_conoce=$request->color_fondo_conoce;
                $tema->color_texto_conoce=$request->color_texto_conoce;
                $tema->color_fondo_videos=$request->color_fondo_videos;
                $tema->color_texto_videos=$request->color_texto_videos;
                $tema->color_fondo_fotos=$request->color_fondo_fotos;
                $tema->color_texto_fotos=$request->color_texto_fotos;
                $tema->color_fondo_detalles=$request->color_fondo_detalles;
                $tema->color_texto_detalles=$request->color_texto_detalles;
                $tema->color_fondo_polga=$request->color_fondo_polga;
                $tema->color_texto_polga=$request->color_texto_polga;
                $tema->color_fondo_destacadas=$request->color_fondo_destacadas;
                $tema->color_texto_destacadas=$request->color_texto_destacadas;
                $tema->color_fondo_enventa=$request->color_fondo_enventa;
                $tema->color_texto_enventa=$request->color_texto_enventa;
                $tema->color_fondo_alquiler=$request->color_fondo_alquiler;
                $tema->color_texto_alquiler=$request->color_texto_alquiler;
                $tema->color_fondo_vendi=$request->color_fondo_vendi;
                $tema->color_texto_vendi=$request->color_texto_vendi;
                $tema->color_fondo_experiencia=$request->color_fondo_experiencia;
                $tema->color_texto_experiencia=$request->color_texto_experiencia;
                $tema->color_fondo_comparto=$request->color_fondo_comparto;
                $tema->color_texto_comparto=$request->color_texto_comparto;
                $tema->color_fondo_solga=$request->color_fondo_solga;
                $tema->color_texto_solga=$request->color_texto_solga;
                $tema->color_fondo_noticias=$request->color_fondo_noticias;
                $tema->color_texto_noticias=$request->color_texto_noticias;
                $tema->save();
            }
            DB::commit();
            return redirect()->route('tema.index')->with('mensaje','Tema registrado correctamente!');

        }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE REGISTRÓ EL TEMA');
        }

    }


}
