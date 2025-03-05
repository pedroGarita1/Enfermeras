<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class ValidateController extends Controller
{
    public function auth_signIn_validate($request){
        $request->validate(
            [
                'nom_empresa' => 'required',
                'tipo_empresa' => 'required',
                'industria' => 'required',
                'email' => 'required | email | unique:App\Models\User,email',
                'password' => ['required','max:50',Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
            ],
            [
                'nom_empresa.required' => 'El campo es requerido',
                'tipo_empresa.required' => 'El campo es requerido',
                'industria' => 'El campo es requerido',
                'email.required' => 'El correo electronico es requerido',
                'email.email' => 'El campo tiene que ser un correo electronico valido',
                'email.unique' => 'El correo electronico ingresado ya esta registrado',
                'password.required' => 'La contraseña es requerida',
                'password.max' => 'El maximo de caracteres son 50'
            ]
        );
    }
    public function auth_lognIn_validate($request){
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'El campo "Correo Electronico o nombre de usuario" es requerido',
                'password.required' => 'El campo "Contraseña" es requerido',
            ]
        );
    }
    public function articulo_store_validate($request){
        $request->validate(
            [
                'content' => 'required',
                'titulo_pagina' => 'required',
                'imagen_portada' => 'required | image | max:2048',
                'resumen_articulo' => 'required',
            ],
            [
                'content.required' => 'Se require tener contenido',
                'titulo_pagina.required' => 'El campo "Titulo" es requerido',
                'imagen_portada.required' => 'El campo "Imagen de portada" es requerido',
                'imagen.image' => 'El campo "Imagen de portada" tiene que ser de tipo JPG, PNG',
                'imagen_portada.max' => 'La imagen tiene que pesar menos de 2 MB',
                'resumen_articulo.required' => 'El campo "Resumen" es requerido' 
            ]
        );
    }
    public function articulo_update_articulo_validate($request){
        $request->validate(
            [
                'content' => 'required',
                'titulo_pagina' => 'required',
                'imagen_portada' => 'required | image | max:2048',
                'resumen_articulo' => 'required',
            ],
            [
                'content.required' => 'Se require tener contenido',
                'titulo_pagina.required' => 'El campo "Titulo" es requerido',
                'imagen_portada.required' => 'El campo "Imagen de portada" es requerido',
                'imagen.image' => 'El campo "Imagen de portada" tiene que ser de tipo JPG, PNG',
                'imagen_portada.max' => 'La imagen tiene que pesar menos de 2 MB',
                'resumen_articulo.required' => 'El campo "Resumen" es requerido' 
            ]
        );
    }
    public function productos_store_categoria_validate($request){
        $request->validate(
            [
                'nom_categoria' => 'required'
            ],
            [
                'nom_categoria.required' => 'El campo "Titulo de la categoria" es requerido'
            ]
        );
    }
    public function productos_store_validate($request){
        $request->validate(
            [
                'nom_producto' => 'required',
                'img_producto' => 'required | image | max:2048',
                'id_categoria' => 'required|not_in:0',
                'content' => 'required',
            ],
            [
                'nom_producto.required' => 'El campo "Nombre del producto" es requerido',
                'img_producto.required' => 'El campo "Imagen del producto" es requerido',
                'img_producto.image' => 'El campo tiene que ser de tipo imagen PNG ó JPG',
                'img_producto.max' => 'La imagen tiene que ser menor a 2MB',
                'id_categoria.required' => 'El campo de categoria es requerido',
                'id_categoria.not_in' => 'Selecciona una opcion',
                'content.required' => 'El campo "Descripcion" es requerido',
            ]
        );
    }
    public function productos_update_categoria_validate($request){
        $request->validate(
            [
                'nom_categoria' => 'required'
            ],
            [
                'nom_categoria.required' => 'El campo "Titulo de la categoria" es requerido'
            ]
        );
    }
    public function productos_update_validate($request){
        $request->validate(
            [
                'nom_producto' => 'required',
                'img_producto' => 'required | image | max:2048',
                'id_categoria' => 'required|not_in:0',
                'content' => 'required',
            ],
            [
                'nom_producto.required' => 'El campo "Nombre del producto" es requerido',
                'img_producto.required' => 'El campo "Imagen del producto" es requerido',
                'img_producto.image' => 'El campo tiene que ser de tipo imagen PNG ó JPG',
                'img_producto.max' => 'La imagen tiene que ser menor a 2MB',
                'id_categoria.required' => 'El campo de categoria es requerido',
                'id_categoria.not_in' => 'Selecciona una opcion',
                'content.required' => 'El campo "Descripcion" es requerido',
            ]
        );
    }
    public function contactanos_store_validate($request){
        $request->validate(
            [
                'nombre' => 'required',
                'email' => 'required',
                'cargo' => 'required',
                'estado' => 'required',
                'apellido' => 'required',
                'organizacion' => 'required',
                'telefono' => 'required',
                'comentarios' => 'required',
            ],
            [
                'nombre.required' => 'El campo "Nombre" es requerido',
                'email.required' => 'El campo "Correo electronico" es requerido',
                'cargo.required' => 'El campo "Cargo / Puesto" es requerido',
                'estado.required' => 'El campo "Estado / Provincia" es requerido',
                'apellido.required' => 'El campo "Apellido" es requerido',
                'organizacion.required' => 'El campo "Compañía / Organización" es requerido',
                'telefono.required' => 'El campo "Teléfono" es requerido',
                'comentarios.required' => 'El campo "Comentarios" es requerido',
            ]
        );
    }
}
