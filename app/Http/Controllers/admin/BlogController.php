<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use DB;
class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();

        return view('admin.blogs.index')->with(compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request){

        try {
            DB::beginTransaction();
            $blog = new Blog();
            $blog->titulo = $request->titulo;
            $blog->descripcion_corta = $request->descripcion_corta;
            $blog->primer_subtitulo = $request->primer_subtitulo;
            $blog->primer_parrafo = $request->primer_parrafo;
            $blog->segundo_parrafo = $request->segundo_parrafo;
            $blog->frase = $request->frase;
            $blog->segundo_subtitulo = $request->segundo_subtitulo;
            $blog->tercer_parrafo = $request->tercer_parrafo;
            $blog->cuarto_parrafo = $request->cuarto_parrafo;
            $blog->tercer_subtitulo = $request->tercer_subtitulo;
            $blog->quinto_parrafo = $request->quinto_parrafo;
            
            if ($request->file('primera_imagen')) {
                $file = $request->file('primera_imagen');
                $name = 'blog_primera_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_blogs/';
                $file->move($path, $name);
        
                $blog->primera_imagen = $name;
            }
            if ($request->file('segunda_imagen')) {
                $file = $request->file('segunda_imagen');
                $name = 'blog_segunda_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_blogs/';
                $file->move($path, $name);
        
                $blog->segunda_imagen = $name;
            }
            if ($request->file('tercera_imagen')) {
                $file = $request->file('tercera_imagen');
                $name = 'blog_tercera_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_blogs/';
                $file->move($path, $name);
        
                $blog->tercera_imagen = $name;
            }
            
            $blog->save();
            
            DB::commit();
            return redirect()->route('blog.index')->with('mensaje','Blog registrado correctamente!');
        }
            catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE REGISTRÓ EL BLOG');
        }
    }

    public function edit($id){
        $blog = Blog::find($id);

        return view('admin.blogs.edit')->with(compact('blog'));
    }

    public function update(Request $request, $id){
        try {
            DB::beginTransaction();
            $blog = Blog::find($id);
            $blog->titulo = $request->titulo;
            $blog->descripcion_corta = $request->descripcion_corta;
            $blog->primer_subtitulo = $request->primer_subtitulo;
            $blog->primer_parrafo = $request->primer_parrafo;
            $blog->segundo_parrafo = $request->segundo_parrafo;
            $blog->frase = $request->frase;
            $blog->segundo_subtitulo = $request->segundo_subtitulo;
            $blog->tercer_parrafo = $request->tercer_parrafo;
            $blog->cuarto_parrafo = $request->cuarto_parrafo;
            $blog->tercer_subtitulo = $request->tercer_subtitulo;
            $blog->quinto_parrafo = $request->quinto_parrafo;
            $pathToYourFile1 = public_path().'/img_blogs/'.$blog->primera_imagen;
            $pathToYourFile2 = public_path().'/img_blogs/'.$blog->segunda_imagen;
            $pathToYourFile3 = public_path().'/img_blogs/'.$blog->tercera_imagen;

            if ($request->file('primera_imagen')) {

                if(file_exists($pathToYourFile1)) { 
                    unlink($pathToYourFile1);  
                } 

                $file = $request->file('primera_imagen');
                $name = 'blog_primera_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_blogs/';
                $file->move($path, $name);

                $blog->primera_imagen = $name;
            }
            if ($request->file('segunda_imagen')) {

                if(file_exists($pathToYourFile2)) { 
                    unlink($pathToYourFile2);  
                } 

                $file = $request->file('segunda_imagen');
                $name = 'blog_segunda_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_blogs/';
                $file->move($path, $name);

                $blog->segunda_imagen = $name;
            }
            if ($request->file('tercera_imagen')) {

                if(file_exists($pathToYourFile3)) { 
                    unlink($pathToYourFile3);  
                } 

                $file = $request->file('tercera_imagen');
                $name = 'blog_tercera_imagen_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_blogs/';
                $file->move($path, $name);

                $blog->tercera_imagen = $name;
            }
            $blog->save();
            DB::commit();
            return redirect()->route('blog.index')->with('mensaje','Blog actualizado correctamente!');
        }
            catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE ACTUALIZÓ EL BLOG');
        }
    }

    public function delete($id)
    {
         DB::transaction(function () use ($id) { 
            $blog = Blog::findOrFail($id);  
            if(isset($blog->primera_imagen)){
                $pathToYourFile = public_path().'/img_blogs/'.$blog->primera_imagen;
                if(file_exists($pathToYourFile)) { 
                    unlink($pathToYourFile);  
                }   
            }  
            if(isset($blog->segunda_imagen)){
                $pathToYourFile = public_path().'/img_blogs/'.$blog->segunda_imagen;
                if(file_exists($pathToYourFile)) { 
                    unlink($pathToYourFile);  
                }   
            }   
            if(isset($blog->tercera_imagen)){
                $pathToYourFile = public_path().'/img_blogs/'.$blog->tercera_imagen;
                if(file_exists($pathToYourFile)) { 
                    unlink($pathToYourFile);  
                }   
            }         
            
            $blog->delete();
        });                

        return redirect()->back();
    }
}
