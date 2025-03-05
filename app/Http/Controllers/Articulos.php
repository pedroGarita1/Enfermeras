<?php

namespace App\Http\Controllers;

use App\Models\Articulos as ModelsArticulos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Articulos extends Controller
{
    public function store_articulo(Request $request){
        $validate = new ValidateController();
        $validate->articulo_store_validate($request);
        $articulo = new ModelsArticulos();
        //<-------------------------------------------------->
        $remplazar = array('¿','?','¡','!');
        $titulo_articulo = str_replace($remplazar,'',$request->titulo_pagina);
        //<-------------------------------------------------->
        $articulo->id_usuario = Auth::user()->id;
        $articulo->titulo = $titulo_articulo;
        $articulo->nom_img = $request->file('imagen_portada')->storeAs('public/'.Auth::user()->name.'/articulos','articulo_'.str_replace(' ','_',$articulo->titulo).'.' .$request->file('imagen_portada')->extension());
        $articulo->contenido = $request->content;
        $articulo->resumen = $request->resumen_articulo;
        $articulo->save();
        return redirect()->route('view-articulo',['id' => $articulo->id,'titulo' => $articulo->titulo]);
    }
    public function update_articulo(Request $request, $id){
        $validate = new ValidateController();
        $validate->articulo_update_articulo_validate($request);
        $articulo = ModelsArticulos::find($id);
        //----------------------------------------
        if(Storage::url($articulo->nom_img)){
            Storage::delete($articulo->nom_img);
            $articulo->nom_img = $request->file('imagen_portada')->storeAs('public/'.Auth::user()->name.'/articulos','articulo_'.str_replace(' ','_',$articulo->titulo).'.' .$request->file('imagen_portada')->extension());
        }
        //----------------------------------------
        $articulo->titulo = $request->titulo_pagina;
        $articulo->contenido = $request->content;
        $articulo->resumen = $request->resumen_articulo;
        $articulo->save();
        return redirect()->route('view-articulo',['id' => $articulo->id,'titulo' => $articulo->titulo]);
    }
}
