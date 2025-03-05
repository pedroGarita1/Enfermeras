<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Productos extends Controller
{
    public function store_categoria(Request $request){
        $validate = new ValidateController();
        $validate->productos_store_categoria_validate($request);
        $categoria = new Categoria();
        $categoria->id_usuario = Auth::user()->id;
        $categoria->nom_cat = $request->nom_categoria;
        $categoria->save();
        return redirect()->back();
    }
    public function store_productos(Request $request){
        $validate = new ValidateController();
        $validate->productos_store_validate($request);
        $productos = new Producto();
        $productos->id_usuario = Auth::user()->id;
        $productos->id_categoria = $request->id_categoria;
        $productos->nom_producto = $request->nom_producto;
        $productos->nom_imagen = $request->file('img_producto')->storeAs('public/'.Auth::user()->name.'/productos','producto_'.str_replace(' ','_',$productos->nom_producto).'.' .$request->file('img_producto')->extension());
        $productos->descripcion = $request->content;
        $productos->save();
        return redirect()->back();
    }
    public function update_categoria(Request $request, $id){
        $validate = new ValidateController();
        $validate->productos_update_categoria_validate($request);
        $categoria = Categoria::find($id);
        $categoria->nom_cat = $request->nom_categoria;
        $categoria->save();
        return redirect()->route('view-store-producto');
    }
    public function update_producto(Request $request, $id){
        $validate = new ValidateController();
        $validate->productos_update_validate($request);
        $productos = Producto::find($id);
        $productos->id_categoria = $request->id_categoria;
        $productos->nom_producto = $request->nom_producto;
        if(Storage::url($productos->nom_imagen)){
            Storage::delete($productos->nom_imagen);
            $productos->nom_imagen = $request->file('img_producto')->storeAs('public/'.Auth::user()->name.'/productos','producto_'.str_replace(' ','_',$productos->nom_producto).'.' .$request->file('img_producto')->extension());
        }
        $productos->descripcion = $request->content;
        $productos->save();
        return redirect()->route('view-producto',['name' => $productos->nom_producto,'id' => $productos->id]);
    }
    public function activar_producto($id){
        $productos = Producto::find($id);
        $productos->estado = 1;
        $productos->save();
        return redirect()->route('view-producto',['name' => $productos->nom_producto,'id' => $productos->id]);
    }
    public function desactivar_producto($id){
        $productos = Producto::find($id);
        $productos->estado = 0;
        $productos->save();
        return redirect()->route('view-producto',['name' => $productos->nom_producto,'id' => $productos->id]);
    }
}
