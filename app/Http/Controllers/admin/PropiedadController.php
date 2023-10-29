<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use DB;
class PropiedadController extends Controller
{
    public function activos(){
        $propiedades = Propiedad::all();

        return view('admin.propiedades.activos')->with(compact('propiedades'));
    }
    public function create()
    {
        return view('admin.propiedades.create');
    }

    public function store(Request $request){
        
    }

    public function edit($id){
        $propiedad = Propiedad::find($id);

        return view('admin.propiedades.edit')->with(compact('propiedad'));
    }

    public function update(Request $request, $id){

    }

    public function delete($id)
    {
        
    }

}
