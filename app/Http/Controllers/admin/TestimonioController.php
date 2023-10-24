<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonio;
use DB;
class TestimonioController extends Controller
{
    public function index(){
        $testimonios = Testimonio::all();

        return view('admin.testimonios.index')->with(compact('testimonios'));
    }

    public function create()
    {
        return view('admin.testimonios.create');
    }

    public function store(Request $request){

        try {
            DB::beginTransaction();
            $testimonio = new Testimonio();
            $testimonio->autor = $request->autor;
            $testimonio->titulo = $request->titulo;
            $testimonio->testimonio = $request->testimonio;
            if ($request->file('imagen')) {
                $file = $request->file('imagen');
                $name = 'testimonio_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_testimonios/';
                $file->move($path, $name);
        
                $testimonio->imagen = $name;
            }
            
            $testimonio->save();
            DB::commit();
            return redirect()->route('testimonio.index')->with('mensaje','Testimonio registrado correctamente!');
        }
            catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE REGISTRÓ EL TESTIMONIO');
        }
    }

    public function edit($id){
        $testimonio = Testimonio::find($id);

        return view('admin.testimonios.edit')->with(compact('testimonio'));
    }

    public function update(Request $request, $id){
        try {
            DB::beginTransaction();
            $testimonio = Testimonio::find($id);
            $testimonio->autor = $request->autor;
            $testimonio->titulo = $request->titulo;
            $testimonio->testimonio = $request->testimonio;
            $pathToYourFile = public_path().'/img_testimonios/'.$testimonio->imagen;

            if ($request->file('imagen')) {

                if(file_exists($pathToYourFile)) { 
                    unlink($pathToYourFile);  
                } 

                $file = $request->file('imagen');
                $name = 'testimonio_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/img_testimonios/';
                $file->move($path, $name);

                $testimonio->imagen = $name;
            }
            $testimonio->save();
            DB::commit();
            return redirect()->route('testimonio.index')->with('mensaje','Testimonio actualizado correctamente!');
        }
            catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'NO SE ACTUALIZÓ EL TESTIMONIO');
        }
    }

    public function delete($id)
    {
         DB::transaction(function () use ($id) { 
            $testimonio = Testimonio::findOrFail($id);  
            if(isset($testimonio->imagen)){
                $pathToYourFile = public_path().'/img_testimonios/'.$testimonio->imagen;
                if(file_exists($pathToYourFile)) { 
                    unlink($pathToYourFile);  
                }   
            }          
            
            $testimonio->delete();
        });                

        return redirect()->back();
    }
}
