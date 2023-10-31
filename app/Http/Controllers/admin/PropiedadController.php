<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\Pro_Adicional;
use App\Models\Pro_Incluye;
use App\Models\Pro_Video;
use App\Models\Pro_Foto;
use App\Models\Pro_Vi_Alrededores;
use App\Models\Pro_Fo_Alrededores;
use App\Models\Pro_Vi_Areas;
use App\Models\Pro_Fo_Areas;
use DB;
class PropiedadController extends Controller
{
    public function activos(){
        $propiedades = Propiedad::where('estado','ACTIVO')->get();

        return view('admin.propiedades.activos')->with(compact('propiedades'));
    }
    public function completados(){
        $propiedades = Propiedad::where('estado','COMPLETADO')->get();

        return view('admin.propiedades.completados')->with(compact('propiedades'));
    }
    public function create()
    {
        return view('admin.propiedades.create');
    }

    public function store(Request $request){


        try{
            
            $propiedad = new Propiedad();
            $propiedad->nombre=$request->nombre;
            $propiedad->descripcion=$request->descripcion;
            $propiedad->descripcion_cliente=$request->descripcion_cliente;
            $propiedad->tipo_casa=$request->tipo_casa;
            $propiedad->tipo_operacion=$request->tipo_operacion;
            $propiedad->habitaciones=$request->habitaciones;
            $propiedad->cocheras=$request->cocheras;
            $propiedad->banios=$request->banios;
            $propiedad->banios_visita=$request->banios_visita;
            $propiedad->area_terreno=$request->area_terreno;
            $propiedad->area_construido=$request->area_construido;
            $propiedad->area_ocupado=$request->area_ocupado;
            $propiedad->n_piso=$request->n_piso;
            $propiedad->precio_alquiler_d=$request->precio_alquiler_d;
            $propiedad->precio_alquiler_s=$request->precio_alquiler_s;
            $propiedad->anio_construccion=$request->anio_construccion;
            $propiedad->pais=$request->pais;
            $propiedad->departamento=$request->departamento;
            $propiedad->provincia=$request->provincia;
            $propiedad->distrito=$request->distrito;
            $propiedad->direccion=$request->direccion;
            $propiedad->urbanizacion=$request->urbanizacion;
            $propiedad->referencia=$request->referencia;
            $propiedad->longitud=$request->longitud;
            $propiedad->latitud=$request->latitud;
            $propiedad->zonificacion=$request->zonificacion;
            $propiedad->frente=$request->frente;
            $propiedad->lat_derecho=$request->lat_derecho;
            $propiedad->lat_izquierdo=$request->lat_izquierdo;
            $propiedad->fondo=$request->fondo;
            $propiedad->save();
        
            //---------------------------------------------------------------//
            
            $pro_incluye = new Pro_Incluye();
            $pro_incluye->id_propiedad=$propiedad->id;
            $pro_incluye->comedor=$request->comedor;
            $pro_incluye->salon_juegos=$request->salon_juegos;
            $pro_incluye->area_parrillas=$request->area_parrillas;
            $pro_incluye->comedor_diario=$request->comedor_diario;
            $pro_incluye->lavanderia=$request->lavanderia;
            $pro_incluye->patio_trasero=$request->patio_trasero;
            $pro_incluye->cocina=$request->cocina;
            $pro_incluye->dor_servicio=$request->dor_servicio;
            $pro_incluye->alma_alimentos=$request->alma_alimentos;
            $pro_incluye->bar=$request->bar;
            $pro_incluye->sala_estar=$request->sala_estar;
            $pro_incluye->piscina=$request->piscina;
            $pro_incluye->alma_general=$request->alma_general;
            $pro_incluye->hall_ingreso=$request->hall_ingreso;
            $pro_incluye->salas=$request->salas;
            $pro_incluye->escritorio=$request->escritorio;
            $pro_incluye->cuarto_servicio=$request->cuarto_servicio;
            $pro_incluye->jardin_interior=$request->jardin_interior;
            $pro_incluye->patio=$request->patio;
            $pro_incluye->sotano=$request->sotano;
            $pro_incluye->closet=$request->closet;
            $pro_incluye->aire_acondicionado=$request->aire_acondicionado;
            $pro_incluye->terraza=$request->terraza;
            $pro_incluye->jardin=$request->jardin;
            $pro_incluye->chimenea=$request->chimenea;
            $pro_incluye->jacuzzi=$request->jacuzzi;
            $pro_incluye->sauna=$request->sauna;
            $pro_incluye->gimnasio=$request->gimnasio;
            $pro_incluye->guardiania=$request->guardiania;
            $pro_incluye->permi_mascotas=$request->permi_mascotas;
            $pro_incluye->no_mascotas=$request->no_mascotas;
            $pro_incluye->club_playa=$request->club_playa;
            $pro_incluye->club_house=$request->club_house;
            $pro_incluye->area_deportiva=$request->area_deportiva;
            $pro_incluye->ascensor=$request->ascensor;
            $pro_incluye->banio_visita=$request->banio_visita;
            $pro_incluye->save();
        
            //---------------------------------------------------------------//
            
            $pro_adicional = new Pro_Adicional();
            $pro_adicional->id_propiedad=$propiedad->id;
            $pro_adicional->agua=$request->agua;
            $pro_adicional->fibra=$request->fibra;
            $pro_adicional->desague=$request->desague;
            $pro_adicional->energia=$request->energia;
            $pro_adicional->gas=$request->gas;
            $pro_adicional->inscrito=$request->inscrito;
            $pro_adicional->listo=$request->listo;
            $pro_adicional->libre=$request->libre;
            $pro_adicional->oficina=$request->oficina;
            $pro_adicional->financiamiento=$request->financiamiento;
            $pro_adicional->loza=$request->loza;
            $pro_adicional->vias=$request->vias;
            $pro_adicional->empresas=$request->empresas;
            $pro_adicional->patio=$request->patio;
            $pro_adicional->portones=$request->portones;
            $pro_adicional->save();
            //---------------------------------------------------------------//
            
            
            DB::commit();
            return redirect()->route('activos.index')->with('mensaje','Propiedad registrada correctamente!');
        }
            catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE REGISTRÓ LA PROPIEDAD');
        }
    }

    public function edit($id){
        $propiedad = Propiedad::find($id);
        $incluye=Pro_Incluye::where('id_propiedad',$id)->first();
        $adicional=Pro_Adicional::where('id_propiedad',$id)->first();
        $fotos=Pro_Foto::where('id_propiedad',$id)->get();
        $videos=Pro_Video::where('id_propiedad',$id)->get();
        $videos_alrededor=Pro_Vi_Alrededores::where('id_propiedad',$id)->get();
        $fotos_alrededor=Pro_Fo_Alrededores::where('id_propiedad',$id)->get();
        $videos_areas=Pro_Vi_Areas::where('id_propiedad',$id)->get();
        $fotos_areas=Pro_Fo_Areas::where('id_propiedad',$id)->get();
        return view('admin.propiedades.edit')->with(compact('propiedad','incluye','adicional','videos_alrededor','fotos_alrededor','videos_areas','fotos_areas','videos','fotos'));
    }

    public function update(Request $request, $id){

    }

    public function delete($id)
    {
        
    }
    public function destacar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->destacado = 'SI';
        $propiedad->save();
        return redirect()->route('activos.index')->with('mensaje','Propiedad destacada');
    }
    public function replegar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->destacado = 'NO';
        $propiedad->save();
        return redirect()->route('activos.index')->with('mensaje','Propiedad replegada');
    }
    public function completar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->estado = 'COMPLETADO';
        $propiedad->save();
        return redirect()->route('activos.index')->with('mensaje','Propiedad pasó a la lista de completados');
    }
    public function activar($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->estado = 'ACTIVO';
        $propiedad->save();
        return redirect()->route('completados.index')->with('mensaje','Propiedad pasó a la lista de activos');
    }
    //fotos y videos propiedades//
    public function storeFoto(Request $request){
        $foto = new Pro_Foto();
        $foto->id_propiedad=$request->id_propiedad;
        if ($request->file('foto')) {
            $file = $request->file('foto');
            $name = 'propiedad_foto_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/fotos/';
            $file->move($path, $name);
            $foto->foto = $name;
           
        }
        $foto->save();
        return response()->json(['message' => 'Foto subida exitosamente']);
    }
    public function adicionalFoto(Request $request){
        $id= $request->id_foto;
        
        $foto = Pro_Foto::findOrFail($id);
        $foto->titulo=$request->titulo;
        $foto->descripcion=$request->descripcion;
        $foto->save();
        return response()->json(['message' => 'editado exitosamente']);
    }
    public function deleteFoto(Request $request){
        $id= $request->id;
        
        DB::transaction(function () use ($id) { 
            $foto = Pro_Foto::findOrFail($id);            
            $pathToYourFile = public_path().'/propiedad/fotos/'.$foto->foto;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            
            
            $foto->delete();
        });                

        return redirect()->back();
    }
    public function destacarFoto(Request $request){
        $id= $request->id;
        
    
        $foto = Pro_Foto::findOrFail($id);            
        $foto->destacado='SI';
        
        
        $foto->save();
                     

        return redirect()->back();
    }
    public function storeVideo(Request $request){
        $video = new Pro_Video();
        $video->id_propiedad=$request->id_propiedad;
        if ($request->file('video')) {
            $file = $request->file('video');
            $name = 'propiedad_video_'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/videos/';
            $file->move($path, $name);
            $video->video = $name;
           
        }
        $video->save();
        return response()->json(['message' => 'Video subido exitosamente']);
    }
    public function miniaturaVideo(Request $request){
        $id= $request->id_video;
        
        $video = Pro_Video::findOrFail($id);
        if ($request->file('miniatura')) {
            $file = $request->file('miniatura');
            $name = 'propiedad_miniatura_'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/videos/';
            $file->move($path, $name);
            $video->miniatura = $name;
           
        }
        $video->save();
        return response()->json(['message' => 'miniatura subida exitosamente']);
    }
    public function deleteVideo(Request $request){
        $id= $request->id;
        
        DB::transaction(function () use ($id) { 
            $video = Pro_Video::findOrFail($id);            
            $pathToYourFile = public_path().'/propiedad/videos/'.$video->video;
            $pathToYourFile1 = public_path().'/propiedad/videos/'.$video->miniatura;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            if(isset($video->miniatura)){
                if(file_exists($pathToYourFile1)) { 
                    unlink($pathToYourFile1);  
                } 
            }
            
            $video->delete();
        });                

        return redirect()->back();
    }
    //fotos y video alrededores//
    public function storeFotoAl(Request $request){
        $foto = new Pro_Fo_Alrededores();
        $foto->id_propiedad=$request->id_propiedad;
        if ($request->file('foto')) {
            $file = $request->file('foto');
            $name = 'propiedad_foto_alrededor'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/alrededores/';
            $file->move($path, $name);
            $foto->foto = $name;
           
        }
        $foto->save();
        return response()->json(['message' => 'Foto subida exitosamente']);
    }
    public function adicionalFotoAl(Request $request){
        $id= $request->id_foto_al;
        
        $foto = Pro_Fo_Alrededores::findOrFail($id);
        $foto->titulo=$request->titulo_al;
        $foto->descripcion=$request->descripcion_al;
        $foto->save();
        return response()->json(['message' => 'editado exitosamente']);
    }
    public function deleteFotoAl(Request $request){
        $id= $request->id;
        
        DB::transaction(function () use ($id) { 
            $foto = Pro_Fo_Alrededores::findOrFail($id);            
            $pathToYourFile = public_path().'/propiedad/alrededores/'.$foto->foto;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            
            
            $foto->delete();
        });                

        return redirect()->back();
    }
    public function storeVideoAl(Request $request){
        $video = new Pro_Vi_Alrededores();
        $video->id_propiedad=$request->id_propiedad;
        if ($request->file('video')) {
            $file = $request->file('video');
            $name = 'propiedad_video_alrededor'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/alrededores/';
            $file->move($path, $name);
            $video->video = $name;
           
        }
        $video->save();
        return response()->json(['message' => 'Video subido exitosamente']);
    }
    public function miniaturaVideoAl(Request $request){
        $id= $request->id_video_al;
        
        $video = Pro_Vi_Alrededores::findOrFail($id);
        if ($request->file('miniatura')) {
            $file = $request->file('miniatura');
            $name = 'propiedad_miniatura_alrededor'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/alrededores/';
            $file->move($path, $name);
            $video->miniatura = $name;
           
        }
        $video->save();
        return response()->json(['message' => 'miniatura subida exitosamente']);
    }
    public function deleteVideoAl(Request $request){
        $id= $request->id;
        
        DB::transaction(function () use ($id) { 
            $video = Pro_Vi_Alrededores::findOrFail($id);            
            $pathToYourFile = public_path().'/propiedad/alrededores/'.$video->video;
            $pathToYourFile1 = public_path().'/propiedad/alrededores/'.$video->miniatura;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            if(isset($video->miniatura)){
                if(file_exists($pathToYourFile1)) { 
                    unlink($pathToYourFile1);  
                } 
            }
            
            $video->delete();
        });                

        return redirect()->back();
    }
    //fotos y videoas areas//
    public function storeFotoAr(Request $request){
        $foto = new Pro_Fo_Areas();
        $foto->id_propiedad=$request->id_propiedad;
        if ($request->file('foto')) {
            $file = $request->file('foto');
            $name = 'propiedad_foto_area'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/areas/';
            $file->move($path, $name);
            $foto->foto = $name;
           
        }
        $foto->save();
        return response()->json(['message' => 'Foto subida exitosamente']);
    }
    public function adicionalFotoAr(Request $request){
        $id= $request->id_foto_ar;
        
        $foto = Pro_Fo_Areas::findOrFail($id);
        $foto->titulo=$request->titulo_ar;
        $foto->descripcion=$request->descripcion_ar;
        $foto->save();
        return response()->json(['message' => 'editado exitosamente']);
    }
    public function deleteFotoAr(Request $request){
        $id= $request->id;
        
        DB::transaction(function () use ($id) { 
            $foto = Pro_Fo_Areas::findOrFail($id);            
            $pathToYourFile = public_path().'/propiedad/areas/'.$foto->foto;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            
            
            $foto->delete();
        });                

        return redirect()->back();
    }
    public function storeVideoAr(Request $request){
        $video = new Pro_Vi_Areas();
        $video->id_propiedad=$request->id_propiedad;
        if ($request->file('video')) {
            $file = $request->file('video');
            $name = 'propiedad_video_area'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/areas/';
            $file->move($path, $name);
            $video->video = $name;
           
        }
        $video->save();
        return response()->json(['message' => 'Video subido exitosamente']);
    }
    public function miniaturaVideoAr(Request $request){
        $id= $request->id_video_ar;
        
        $video = Pro_Vi_Areas::findOrFail($id);
        if ($request->file('miniatura')) {
            $file = $request->file('miniatura');
            $name = 'propiedad_miniatura_area'.'_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/propiedad/areas/';
            $file->move($path, $name);
            $video->miniatura = $name;
           
        }
        $video->save();
        return response()->json(['message' => 'miniatura subida exitosamente']);
    }
    public function deleteVideoAr(Request $request){
        $id= $request->id;
        
        DB::transaction(function () use ($id) { 
            $video = Pro_Vi_Areas::findOrFail($id);            
            $pathToYourFile = public_path().'/propiedad/areas/'.$video->video;
            $pathToYourFile1 = public_path().'/propiedad/areas/'.$video->miniatura;
            if(file_exists($pathToYourFile)) { 
                   unlink($pathToYourFile);  
            } 
            if(isset($video->miniatura)){
                if(file_exists($pathToYourFile1)) { 
                    unlink($pathToYourFile1);  
                } 
            }
            
            $video->delete();
        });                

        return redirect()->back();
    }


}
