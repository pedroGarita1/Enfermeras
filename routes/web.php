<?php

use App\Http\Controllers\Articulos;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Contactanos;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

Route::controller(Vistas::class)->group(function(){
    // ========== VIEW INICIO ==========
    Route::get('/','index')->name('view-inicio');
    // ========== VIEW AUTH ==========
    Route::get('/iniciar-sesion','lognIn')->name('view-login');
    Route::get('/registro-usuario','signIn')->name('view-signIn');
    // ========== VIEW SERVICIOS ==========
    Route::get('/servicios','general_servicios')->name('view-servicios');
    Route::get('/servicio/{name}','servicio')->name('view-servicio');
    // ========== VIEW PRODUCTOS ==========
    Route::get('/productos','general_productos')->name('view-productos');
    Route::get('/producto/{name}/{id}','productos')->name('view-producto');
    Route::get('/creador-productos','store_productos')->name('view-store-producto');
    Route::get('/edit-categoria/{id}','view_edit_categoria')->name('view-edit-categoria');
    Route::get('/edit-producto/{id}','edit_producto')->name('view-edit-producto');
    // ========== VIEW NOSOTROS ==========
    Route::get('/sobre-nosotros','sobre_nosotros')->name('view-nosotros');
    // ========== VIEW ARTICULOS ==========
    Route::get('/creador-articulos','store_articulo')->name('view-store-articulo');
    Route::get('/articulo/{id}/{titulo}','view_articulo')->name('view-articulo');
    Route::get('/editar-articulo/{id}/{titulo}','view_edit_articulo')->name('view-edit-articulo');
    Route::get('/articulos','all_articulos')->name('view-articulos');
});
Route::controller(AuthController::class)->group(function(){
    Route::post('/register','signIn')->name('Auth-signIn');
    Route::post('/auth','lognIn')->name('Auth-lognIn');
    Route::get('/logout','logOut')->name('Auth-lognOut');
    Route::get('/login-google','login_google')->name('Auth-google');
    Route::get('/google-callback','google_callback');
});
Route::controller(Articulos::class)->group(function(){
    Route::post('/store-articulo','store_articulo')->name('Articulos-store');
    Route::put('/update-articulo/{id}','update_articulo')->name('Articulos-update');
});
Route::controller(Productos::class)->group(function (){
    Route::post('/store-productos','store_productos')->name('Productos-store');
    Route::post('/store-categoria','store_categoria')->name('Productos-store-categoria');
    Route::put('/update-categoria/{id}','update_categoria')->name('Productos-update-categoria');
    Route::put('/update-producto/{id}','update_producto')->name('Productos-update');
    Route::put('/activar-producto/{id}','activar_producto')->name('Productos-activar');
    Route::put('/desactivar-producto/{id}','desactivar_producto')->name('Productos-desactivar');
});
Route::controller(Contactanos::class)->group(function(){
    Route::post('/store-contactanos','store_contactanos')->name('Contactanos-store');
});
