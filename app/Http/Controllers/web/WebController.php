<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tema;
use App\Models\Propiedad;
use App\Models\Per_Informacion;
class WebController extends Controller
{
    public function index(){
        $tema=Tema::find(1);
        $per_informacion=Per_Informacion::find(1);
        $pro_destacadas=Propiedad::where('destacado','SI')->get();
        return view('web.index')->with(compact('tema','pro_destacadas','per_informacion'));
    }
}
