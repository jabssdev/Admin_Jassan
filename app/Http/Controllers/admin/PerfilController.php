<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Per_Informacion;
use App\Models\Per_Redes;
use App\Models\Per_Adicional;
use App\Models\Per_Foto;
use App\Models\Per_Video;
use App\Models\Perfil_Foto;
use App\Models\Perfil_Video;
use App\Models\User;
use DB;
class PerfilController extends Controller
{
    public function index(){
        $per_informacion=Per_Informacion::find(1);
        $per_redes=Per_Redes::find(1);
        $per_adicional=Per_Adicional::find(1);
        $videos=Perfil_Video::all();
        $fotos=Perfil_Foto::all();
        return view('admin.perfil.index')->with(compact('per_informacion','per_redes','per_adicional','videos','fotos'));
    }

    public function store(Request $request){
        
            DB::beginTransaction();
            $per_informacion=Per_Informacion::where('id',1)->first();
            if(isset($per_informacion)){
                
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
            
            
            
            DB::commit();
            return redirect()->route('perfil.index')->with('mensaje','Perfil registrado correctamente!');
        
    }
    public function storeFoto(Request $request){
        $foto = new Perfil_Foto();
        if ($request->file('foto')) {
            $file = $request->file('foto');
            $name = 'perfil_foto'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img_perfil/';
            $file->move($path, $name);
            $foto->foto = $name;
           
        }
        $foto->save();
        return response()->json(['message' => 'Foto subida exitosamente']);
       
        
    }
    public function deleteFoto(Request $request)
    {   $id= $request->input('id');
        DB::transaction(function () use ($id) { 
            $foto = Perfil_Foto::findOrFail($id);            
            $pathToYourFile = public_path().'/img_perfil/'.$foto->foto;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            $foto->delete();
        });                

        return redirect()->back();
    }

    public function Portada(Request $request)
    {   $id= $request->input('id');
        $fotos = Perfil_Foto::all();
        foreach ($fotos as $foto) {
            if ($foto->id == $id) {
                $foto->portada = 'SI';
            } else {
                $foto->portada = 'NO';
            }
            $foto->save();
        }
        return redirect()->back();
    }

    public function storeVideo(Request $request){
        $video = new Perfil_Video();
        if ($request->file('video')) {
            $file = $request->file('video');
            $name = 'perfil_video'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img_perfil/';
            $file->move($path, $name);
            $video->video = $name;
           
        }
        $video->save();
        return response()->json(['message' => 'Video subido exitosamente']);
       
        
    }
    public function deleteVideo(Request $request)
    {   $id= $request->input('id');
        DB::transaction(function () use ($id) { 
            $video = Perfil_Video::findOrFail($id);            
            $pathToYourFile = public_path().'/img_perfil/'.$video->video;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            $video->delete();
        });                

        return redirect()->back();
    }
    
}
