<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Con_Informacion;
use App\Models\Con_Google;
use App\Models\Detalle_Con_Google;
use App\Models\Con_Video;
use App\Models\Con_Logo;
use App\Models\Con_Pagina;
use DB;
class ConfiguracionController extends Controller
{
    public function index(){
        $con_informacion=Con_Informacion::find(1);
        $con_google=Con_Google::find(1);
        $con_video=Con_Video::find(1);
        $con_logo=Con_Logo::find(1);
        $con_pagina=Con_Pagina::find(1);
        return view('admin.configuracion.index')->with(compact('con_informacion','con_google','con_video','con_logo','con_pagina'));
    }

    public function store(Request $request){

        try{
            DB::beginTransaction();
            $con_informacion=Con_Informacion::where('id',1)->first();
            if(isset($con_informacion)){
                $con_informacion->titulo_web=$request->titulo_web;
                $con_informacion->titulo_footer=$request->titulo_footer;
                $con_informacion->texto_footer=$request->texto_footer;
                $con_informacion->save();
            }else{
                $con_informacion = new Con_Informacion();
                $con_informacion->titulo_web=$request->titulo_web;
                $con_informacion->titulo_footer=$request->titulo_footer;
                $con_informacion->texto_footer=$request->texto_footer;
                $con_informacion->save();
            }
            //---------------------------------------------------------------//
            $con_google=Con_Google::where('id',1)->first();
            if(isset($con_google)){
                $con_google->face_pixel=$request->face_pixel;
                $con_google->face_verificacion=$request->face_verificacion;
                $con_google->face_token=$request->face_token;
                $con_google->google_tag_global=$request->google_tag_global;
                $con_google->google_tag_fragmento=$request->google_tag_fragmento;
                $con_google->save();
                if($request->datosTabla!="[]"){
                    for ($i = 0; $i < count($request->datosTabla); $i++) {
                        $detalle_google = new Detalle_Con_Google();
                        $detalle_google->id_con_google = 1;
                        $detalle_google->nombre = $request->datosTabla[$i]['nombre'];
                        $detalle_google->tipo_evento = $request->datosTabla[$i]['tipo_evento'];
                        $detalle_google->url = $request->datosTabla[$i]['url'];
                        $detalle_google->save();
            
                    }
                }
                
            }else{
                $con_google = new Con_Google();
                $con_google->face_pixel=$request->face_pixel;
                $con_google->face_verificacion=$request->face_verificacion;
                $con_google->face_token=$request->face_token;
                $con_google->google_tag_global=$request->google_tag_global;
                $con_google->google_tag_fragmento=$request->google_tag_fragmento;
                $con_google->save();
                if($request->datosTabla!="[]"){
                    for ($i = 0; $i < count($request->datosTabla); $i++) {
                        $detalle_google = new Detalle_Con_Google();
                        $detalle_google->id_con_google = 1;
                        $detalle_google->nombre = $request->datosTabla[$i]['nombre'];
                        $detalle_google->tipo_evento = $request->datosTabla[$i]['tipo_evento'];
                        $detalle_google->url = $request->datosTabla[$i]['url'];
                        $detalle_google->save();
            
                    }
                }
                
                
            }
            //---------------------------------------------------------------//
            $con_video=Con_Video::where('id',1)->first();
            if(isset($con_video)){
                $con_video->primer_url=$request->primer_url;
                $con_video->segundo_url=$request->segundo_url;
                $con_video->tercer_url=$request->tercer_url;
                $con_video->save();
            }else{
                $con_video = new Con_Video();
                $con_video->primer_url=$request->primer_url;
                $con_video->segundo_url=$request->segundo_url;
                $con_video->tercer_url=$request->tercer_url;
                $con_video->save();
            }
            //---------------------------------------------------------------//
            $con_logo=Con_Logo::where('id',1)->first();
            if(isset($con_logo)){
                $pathToYourFile1 = public_path().'/img_configuracion/'.$con_logo->logo;
                $pathToYourFile2 = public_path().'/img_configuracion/'.$con_logo->favicon;
                if ($request->file('logo')) {

                    if(file_exists($pathToYourFile1)) { 
                        unlink($pathToYourFile1);  
                    } 
    
                    $file = $request->file('logo');
                    $name = 'configuracion_logo_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
    
                    $con_logo->logo = $name;
                }
                if ($request->file('favicon')) {

                    if(file_exists($pathToYourFile2)) { 
                        unlink($pathToYourFile2);  
                    } 
    
                    $file = $request->file('favicon');
                    $name = 'configuracion_favicon_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
    
                    $con_logo->favicon = $name;
                }
                $con_logo->save();
            }else{
                $con_logo = new Con_Logo();
                if ($request->file('logo')) {
                    $file = $request->file('logo');
                    $name = 'configuracion_logo_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
            
                    $con_logo->logo = $name;
                }
                if ($request->file('favicon')) {
                    $file = $request->file('favicon');
                    $name = 'configuracion_favicon_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
            
                    $con_logo->favicon = $name;
                }
                $con_logo->save();
            }
            //---------------------------------------------------------------//
            $con_pagina=Con_Pagina::where('id',1)->first();
            if(isset($con_pagina)){
                $con_pagina->titulo_principal=$request->titulo_principal;
                $con_pagina->titulo_propiedades=$request->titulo_propiedades;
                $con_pagina->f_contacto_principal=$request->f_contacto_principal;
                $con_pagina->f_principal_pagina=$request->f_principal_pagina;
                $con_pagina->f_secundario=$request->f_secundario;
                $con_pagina->titulo_quiensoy=$request->titulo_quiensoy;
                $con_pagina->subtitulo=$request->subtitulo;
                $con_pagina->titulo_asivendo=$request->titulo_asivendo;
                $con_pagina->beneficio=$request->beneficio;
                $con_pagina->formulario=$request->formulario;
                $pathToYourFileP1 = public_path().'/img_configuracion/'.$con_pagina->imagen_comparto;
                $pathToYourFileP2 = public_path().'/img_configuracion/'.$con_pagina->imagen_quien;
                $pathToYourFileP3 = public_path().'/img_configuracion/'.$con_pagina->imagen_formulario;

                if ($request->file('imagen_comparto')) {

                    if(file_exists($pathToYourFileP1)) { 
                        unlink($pathToYourFileP1);  
                    } 
    
                    $file = $request->file('imagen_comparto');
                    $name = 'configuracion_imagen_comparto_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
    
                    $con_pagina->imagen_comparto = $name;
                }
                if ($request->file('imagen_quien')) {

                    if(file_exists($pathToYourFile1)) { 
                        unlink($pathToYourFile1);  
                    } 
    
                    $file = $request->file('imagen_quien');
                    $name = 'configuracion_imagen_quien_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
    
                    $con_pagina->imagen_quien = $name;
                }
                if ($request->file('imagen_formulario')) {

                    if(file_exists($pathToYourFile1)) { 
                        unlink($pathToYourFile1);  
                    } 
    
                    $file = $request->file('imagen_formulario');
                    $name = 'configuracion_imagen_formulario_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
    
                    $con_pagina->imagen_formulario = $name;
                }
                $con_pagina->save();
            }else{
                $con_pagina = new Con_Pagina();
                $con_pagina->titulo_principal=$request->titulo_principal;
                $con_pagina->titulo_propiedades=$request->titulo_propiedades;
                $con_pagina->f_contacto_principal=$request->f_contacto_principal;
                $con_pagina->f_principal_pagina=$request->f_principal_pagina;
                $con_pagina->f_secundario=$request->f_secundario;
                $con_pagina->titulo_quiensoy=$request->titulo_quiensoy;
                $con_pagina->subtitulo=$request->subtitulo;
                $con_pagina->titulo_asivendo=$request->titulo_asivendo;
                $con_pagina->beneficio=$request->beneficio;
                $con_pagina->formulario=$request->formulario;

                if ($request->file('imagen_comparto')) {
                    $file = $request->file('imagen_comparto');
                    $name = 'configuracion_imagen_comparto_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
            
                    $con_pagina->imagen_comparto = $name;
                }
                if ($request->file('imagen_quien')) {
                    $file = $request->file('imagen_quien');
                    $name = 'configuracion_imagen_quien_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
            
                    $con_pagina->imagen_quien = $name;
                }
                if ($request->file('imagen_formulario')) {
                    $file = $request->file('imagen_formulario');
                    $name = 'configuracion_imagen_formulario_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_configuracion/';
                    $file->move($path, $name);
            
                    $con_pagina->imagen_formulario = $name;
                }
                $con_pagina->save();
            }
            
            DB::commit();
            return redirect()->route('configuracion.index')->with('mensaje','Configuración registrada correctamente!');
        }
            catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE REGISTRÓ EL BLOG');
        }
    }

}
