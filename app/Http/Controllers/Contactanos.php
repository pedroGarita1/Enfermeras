<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Send_Email;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contactanos extends Controller
{
    public function store_contactanos(Request $request){
        $contacto = new Contacto();
        $validate = new ValidateController();
        $validate->contactanos_store_validate($request);
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->correo = $request->email;
        $contacto->organizacion = $request->organizacion;
        $contacto->cargo = $request->cargo;
        $contacto->telefono = $request->telefono;
        $contacto->provincia = $request->estado;
        $contacto->comentarios = $request->comentarios;
        $contacto->save();
        Mail::to('pedrogarit3@gmail.com')->send(new Send_Email($contacto->nombre, $contacto->apellido, $contacto->correo, $contacto->organizacion,
        $contacto->cargo, $contacto->telefono, $contacto->provincia, $contacto->comentarios));
        return redirect()->back();
    }
}
