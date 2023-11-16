<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\MessageContact;
use Illuminate\Support\Facades\Mail;
class FormularioController extends Controller
{
    public function sendMail(Request $request)
    {
        
       
        $this->validate($request,[
            'nombre'=>'required',
        ]);
            
        Mail::to('info@jassan.pe')->cc(['web@jassan.pe'])->send(new MessageContact($request));
        return redirect()->back()->with('success',  "Su mensaje se ha enviado con exito.");
    
    }
}
