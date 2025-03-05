<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Vistas extends Controller
{
    public function __construct(){
        $this->middleware(['guest'])->only('signIn','lognIn');
        $this->middleware(['auth','RolUsuario'])->only('store_articulo','store_productos');
    }
    public function index(){
        $titulo = 'inicio';
        $articulos = Articulos::latest('created_at')->paginate(8);
        return view('inicio', compact('titulo','articulos'));
    }
    public function lognIn(){
        $titulo = 'Inicio de sesion';
        return view('auth/login',compact('titulo'));
    }
    public function signIn(){
        $titulo = 'Registro de usuario';
        return view('auth/register',compact('titulo'));
    }
    public function general_servicios(){
        $titulo = 'General servicios';
        return view('modules/servicios/general_servicios', compact('titulo'));
    }
    public function servicio($name){
        $titulo = 'Servicio ' . $name;
        $articulos = Articulos::all();
        return view('modules/servicios/servicios', compact('titulo','articulos','name'));
    }
    public function general_productos(){
        $titulo = 'General productos';
        $productos = Producto::all();
        return view('modules/productos/general_productos', compact('titulo','productos'));
    }
    public function productos ($name, $id){
        $titulo = 'Producto - ' . $name;
        $producto = Producto::where('id', $id)->first();
        $categoria = Categoria::where('id',$producto->id_categoria)->first();
        $similares = Producto::where('id_categoria',$categoria->id)->paginate(4);
        return view('modules/productos/productos', compact('titulo','producto','categoria','similares'));
    }
    public function sobre_nosotros(){
        $titulo = 'Sobre nosotros';
        return view('modules/sobre_nosotros/sobre_nosotros',compact('titulo'));
    }
    public function store_articulo(){
        $titulo = 'Creacion de articulos';
        return view('modules/articulos/store_articulos',compact('titulo'));
    }
    public function view_articulo ($id,$titulo){
        $titulo = 'Articulo';
        $articulo = Articulos::where('id',$id)->first();
        return view('modules/articulos/vista_articulo',compact('titulo','articulo'));
    }
    public function all_articulos(){
        $recientes = Articulos::whereDate('created_at','>', now()->subDays(5))->get();
        $titulo = 'Articulos';
        $articulos = Articulos::latest('created_at')->get();
        return view('modules/articulos/all_articulos',compact('titulo','articulos','recientes'));
    }
    public function view_edit_articulo($id, $titulo){
        $titulo = 'Editar articulo' . $titulo;
        $articulo = Articulos::find($id);
        return view('modules/articulos/edit_articulo',compact('titulo','articulo'));
    }
    public function store_productos(){
        $titulo = 'Creador de Productos';
        $categoria = Categoria::all();
        return view('modules/productos/store_productos', compact('titulo','categoria'));
    }
    public function view_edit_categoria($id){
        $titulo = 'Editar Categoria';
        $categoria = Categoria::find($id);
        return view('modules/productos/edit_categoria',compact('titulo','categoria'));
    }
    public function edit_producto($id){
        $titulo = 'Editar Articulo';
        $producto = Producto::find($id);
        $categoria = Categoria::all();
        return view('modules/productos/edit_producto',compact('titulo','producto','categoria'));
    }
}
