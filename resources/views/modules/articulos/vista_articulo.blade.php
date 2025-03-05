@extends('layouts/main')
@section('contenido')
<div class="w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image: url('{{ Storage::url($articulo->nom_img) }}'); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="fw-bold fs-inicio text-white">{{ $articulo->titulo }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">
                        <div id="titulo_pagina">{{ $articulo->titulo }}</div>
                    </h1>
                </header>
                <!-- Post content-->
                <section class="mb-5">
                    {!! $articulo->contenido !!}
                </section>
            </article>
        </div>
        <div class="col-md-4 text-center">
            <a href="{{ route('view-edit-articulo', ['id' => $articulo->id,'titulo' => $articulo->titulo]) }}" class="btn btn-meeimex-blue btn-lg">Editar <i class="fa-solid fa-pen-to-square"></i></a>
        </div>
    </div>
</div>
@endsection