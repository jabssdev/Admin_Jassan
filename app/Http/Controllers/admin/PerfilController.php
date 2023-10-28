<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Per_Informacion;
use App\Models\Per_Redes;
use App\Models\Per_Adicional;
use App\Models\Per_Foto;
use App\Models\Per_Video;
use App\Models\User;
use DB;
class PerfilController extends Controller
{
    public function index(){
        $per_informacion=Per_Informacion::find(1);
        $per_redes=Per_Redes::find(1);
        $per_adicional=Per_Adicional::find(1);
        $per_foto=Per_Foto::find(1);
        $per_video=Per_Video::find(1);
        return view('admin.perfil.index')->with(compact('per_informacion','per_redes','per_adicional','per_foto','per_video'));
    }

    public function store(Request $request){
        
            DB::beginTransaction();
            $per_informacion=Per_Informacion::where('id',1)->first();
            if(isset($per_informacion)){
                $pathToYourFile = public_path().'/img_perfil/'.$per_informacion->imagen;
                if ($request->file('imagen')) {

                    if(file_exists($pathToYourFile)) { 
                        unlink($pathToYourFile);  
                    } 
    
                    $file = $request->file('imagen');
                    $name = 'perfil_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
    
                    $per_informacion->imagen = $name;
                }
                $per_informacion->nombres=$request->nombres;
                $per_informacion->apellidos=$request->apellidos;
                $per_informacion->correo=$request->correo;
                $per_informacion->pais=$request->pais;
                $per_informacion->direccion=$request->direccion;
                $per_informacion->anios_experiencia=$request->anios_experiencia;
                $per_informacion->what_codigo=$request->what_codigo;
                $per_informacion->what_numero=$request->what_numero;
                $per_informacion->primer_cel_codigo=$request->primer_cel_codigo;
                $per_informacion->primer_cel_numero=$request->primer_cel_numero;
                $per_informacion->segundo_cel_codigo=$request->segundo_cel_codigo;
                $per_informacion->segundo_cel_numero=$request->segundo_cel_numero;
                $per_informacion->descripcion=$request->descripcion;
                $per_informacion->save();
                
            }else{
                $per_informacion = new Per_Informacion();
                if ($request->file('imagen')) {
                    $file = $request->file('imagen');
                    $name = 'perfil_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_informacion->imagen = $name;
                }
                $per_informacion->nombres=$request->nombres;
                $per_informacion->apellidos=$request->apellidos;
                $per_informacion->correo=$request->correo;
                $per_informacion->pais=$request->pais;
                $per_informacion->direccion=$request->direccion;
                $per_informacion->anios_experiencia=$request->anios_experiencia;
                $per_informacion->what_codigo=$request->what_codigo;
                $per_informacion->what_numero=$request->what_numero;
                $per_informacion->primer_cel_codigo=$request->primer_cel_codigo;
                $per_informacion->primer_cel_numero=$request->primer_cel_numero;
                $per_informacion->segundo_cel_codigo=$request->segundo_cel_codigo;
                $per_informacion->segundo_cel_numero=$request->segundo_cel_numero;
                $per_informacion->descripcion=$request->descripcion;
                $per_informacion->save();
            }
            //---------------------------------------------------------------//
            $per_redes=Per_Redes::where('id',1)->first();
            if(isset($per_redes)){
                
                $per_redes->face_link=$request->face_link;
                $per_redes->you_link=$request->you_link;
                $per_redes->insta_link=$request->insta_link;
                $per_redes->lin_link=$request->lin_link;
                $per_redes->tik_link=$request->tik_link;
                $per_redes->save();
                
            }else{
                $per_redes = new Per_Redes();
                $per_redes->face_link=$request->face_link;
                $per_redes->you_link=$request->you_link;
                $per_redes->insta_link=$request->insta_link;
                $per_redes->lin_link=$request->lin_link;
                $per_redes->tik_link=$request->tik_link;
                $per_redes->save();
            }
            //---------------------------------------------------------------//
            $per_adicional=Per_Adicional::where('id',1)->first();
            if(isset($per_adicional)){
                
                $per_adicional->p_vendidas=$request->p_vendidas;
                $per_adicional->p_alquiladas=$request->p_alquiladas;
                $per_adicional->p_vendidas_mes=$request->p_vendidas_mes;
                $per_adicional->save();
            }else{
                $per_adicional = new Per_Adicional();
                $per_adicional->p_vendidas=$request->p_vendidas;
                $per_adicional->p_alquiladas=$request->p_alquiladas;
                $per_adicional->p_vendidas_mes=$request->p_vendidas_mes;
                $per_adicional->save();
            }
            //---------------------------------------------------------------//
            $user=User::where('id',1)->first();
            if(isset($user)){
                if(isset($request->password)){
                    $user->password=bcrypt($request->password);
                    $user->save();
                }
                
            }else{
                $user = new User();
                if(isset($request->password)){
                    $user->password=bcrypt($request->password);
                    $user->save();
                }
                
            }
            //---------------------------------------------------------------//
            $per_foto=Per_Foto::where('id',1)->first();
            if(isset($per_foto)){
                
                
                
                if ($request->file('imagen1')) {

                    
        
                    $file = $request->file('imagen1');
                    $name = 'perfil_imagen1'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen1 = $name;
                }
                if ($request->file('imagen2')) {

                   
        
                    $file = $request->file('imagen2');
                    $name = 'perfil_imagen2'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen2 = $name;
                }
                if ($request->file('imagen3')) {

                    
        
                    $file = $request->file('imagen3');
                    $name = 'perfil_imagen3'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen3 = $name;
                }
                if ($request->file('imagen4')) {

                   
                    $file = $request->file('imagen4');
                    $name = 'perfil_imagen4'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen4 = $name;
                }
                if ($request->file('imagen5')) {

                    
                    $file = $request->file('imagen5');
                    $name = 'perfil_imagen5'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen5 = $name;
                }
                if ($request->file('imagen6')) {

                   
        
                    $file = $request->file('imagen6');
                    $name = 'perfil_imagen6'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen6 = $name;
                }
                if ($request->file('imagen7')) {

                    
                    $file = $request->file('imagen7');
                    $name = 'perfil_imagen7'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen7 = $name;
                }
                if ($request->file('imagen8')) {

                    
        
                    $file = $request->file('imagen8');
                    $name = 'perfil_imagen8'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen8 = $name;
                }
                if ($request->file('imagen9')) {

                    
        
                    $file = $request->file('imagen9');
                    $name = 'perfil_imagen9'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen9 = $name;
                }
                if ($request->file('imagen10')) {

                    
        
                    $file = $request->file('imagen10');
                    $name = 'perfil_imagen10'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen10 = $name;
                }
                if ($request->file('imagen11')) {

                    
        
                    $file = $request->file('imagen11');
                    $name = 'perfil_imagen11'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_foto->imagen11 = $name;
                }
                $per_foto->portada=$request->portada;
                $per_foto->save();    
                
                
                
            }else{
                $per_foto = new Per_Foto();
                
                
                if ($request->file('imagen1')) {
                    $file = $request->file('imagen1');
                    $name = 'perfil_imagen1'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen1 = $name;
                }
                if ($request->file('imagen2')) {
                    $file = $request->file('imagen2');
                    $name = 'perfil_imagen2'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen2 = $name;
                }
                if ($request->file('imagen3')) {
                    $file = $request->file('imagen3');
                    $name = 'perfil_imagen3'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen3 = $name;
                }
                if ($request->file('imagen4')) {
                    $file = $request->file('imagen4');
                    $name = 'perfil_imagen4'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen4 = $name;
                }
                if ($request->file('imagen5')) {
                    $file = $request->file('imagen5');
                    $name = 'perfil_imagen5'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen5 = $name;
                }
                if ($request->file('imagen6')) {
                    $file = $request->file('imagen6');
                    $name = 'perfil_imagen6'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen6 = $name;
                }
                if ($request->file('imagen7')) {
                    $file = $request->file('imagen7');
                    $name = 'perfil_imagen7'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen7 = $name;
                }
                if ($request->file('imagen8')) {
                    $file = $request->file('imagen8');
                    $name = 'perfil_imagen8'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen8 = $name;
                }
                if ($request->file('imagen9')) {
                    $file = $request->file('imagen9');
                    $name = 'perfil_imagen9'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen9 = $name;
                }
                if ($request->file('imagen10')) {
                    $file = $request->file('imagen10');
                    $name = 'perfil_imagen10'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen10 = $name;
                }
                if ($request->file('imagen11')) {
                    $file = $request->file('imagen11');
                    $name = 'perfil_imagen11'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_foto->imagen11 = $name;
                }
                
                
                $per_foto->portada=$request->portada;
                    
                
                $per_foto->save(); 
                
            }
            //---------------------------------------------------------------//
            $per_video=Per_Video::where('id',1)->first();
            if(isset($per_video)){
                
                
                if ($request->file('video1')) {

                    
                    $file = $request->file('video1');
                    $name = 'perfil_video1'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video1 = $name;
                }
                if ($request->file('video2')) {

                    
        
                    $file = $request->file('video2');
                    $name = 'perfil_video2'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video2 = $name;
                }
                if ($request->file('video3')) {

        
                    $file = $request->file('video3');
                    $name = 'perfil_video3'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video3 = $name;
                }
                if ($request->file('video4')) {

                    
        
                    $file = $request->file('video4');
                    $name = 'perfil_video4'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video4 = $name;
                }
                if ($request->file('video5')) {

                    
        
                    $file = $request->file('video5');
                    $name = 'perfil_video5'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video5 = $name;
                }
                if ($request->file('video6')) {

                    
        
                    $file = $request->file('video6');
                    $name = 'perfil_video6'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video6 = $name;
                }
                if ($request->file('video7')) {

                    
        
                    $file = $request->file('video7');
                    $name = 'perfil_video7'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video7 = $name;
                }
                if ($request->file('video8')) {

                    
        
                    $file = $request->file('video8');
                    $name = 'perfil_video8'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video8 = $name;
                }
                if ($request->file('video9')) {

                    
                    $file = $request->file('video9');
                    $name = 'perfil_video9'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video9 = $name;
                }
                if ($request->file('video10')) {

                    
        
                    $file = $request->file('video10');
                    $name = 'perfil_video10'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video10 = $name;
                }
                if ($request->file('video11')) {

                    $file = $request->file('video11');
                    $name = 'perfil_video11'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
        
                    $per_video->video11 = $name;
                }
                $per_video->save();
                
                
            }else{
                $per_video = new Per_Video();
                
                if ($request->file('video1')) {
                    $file = $request->file('video1');
                    $name = 'perfil_video1'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video1 = $name;
                }
                if ($request->file('video2')) {
                    $file = $request->file('video2');
                    $name = 'perfil_video2'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video2 = $name;
                }
                if ($request->file('video3')) {
                    $file = $request->file('video3');
                    $name = 'perfil_video3'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video3 = $name;
                }
                if ($request->file('video4')) {
                    $file = $request->file('video4');
                    $name = 'perfil_video4'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video4 = $name;
                }
                if ($request->file('video5')) {
                    $file = $request->file('video5');
                    $name = 'perfil_video5'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video5 = $name;
                }
                if ($request->file('video6')) {
                    $file = $request->file('video6');
                    $name = 'perfil_video6'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video6 = $name;
                }
                if ($request->file('video7')) {
                    $file = $request->file('video7');
                    $name = 'perfil_video7'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video7 = $name;
                }
                if ($request->file('video8')) {
                    $file = $request->file('video8');
                    $name = 'perfil_video8'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video8= $name;
                }
                if ($request->file('video9')) {
                    $file = $request->file('video9');
                    $name = 'perfil_video9'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video9 = $name;
                }
                if ($request->file('video10')) {
                    $file = $request->file('video10');
                    $name = 'perfil_video10'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video10 = $name;
                }
                if ($request->file('video11')) {
                    $file = $request->file('video11');
                    $name = 'perfil_video11'.'_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = public_path() . '/img_perfil/';
                    $file->move($path, $name);
            
                    $per_video->video11 = $name;
                }
                $per_video->save();
                
            }
            
            
            DB::commit();
            return redirect()->route('perfil.index')->with('mensaje','Perfil registrado correctamente!');
        
    }
    
    
}
