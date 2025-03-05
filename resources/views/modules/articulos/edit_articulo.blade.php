@extends('layouts/main')
@section('contenido')
<div class="banner-image-login w-100 vh-100 justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('Articulos-update', ['id'=>$articulo->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="text" hidden value="{{ $articulo->id }}">
                    <div class="row p-5">
                        <div class="col-lg-12 text-center">
                            <h1 class="fw-bold mt-3 text-white">CREADOR DE CONTENIDO</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 p-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-white fs-3 fw-bold">EDITOR</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-0">
                                    <main>
                                        <div class="document-editor">
                                            <div class="content-container">
                                                <textarea class="bg-transparent" name="content" id="editor" cols="30" rows="10">{{ $articulo->contenido }}</textarea>
                                                @error('content')
                                                    <div id="basic-addon2" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 p-3">
                            <div class="card card-login shadow-login bg-transparent">
                                <div class="card-body">
                                    <h5 class="card-title text-white">Opciones</h5>
                                    <p class="card-text">
                                        <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <div class="form-floating mb-3">
                                                    <input type="" class="form-control bg-transparent text-white @error('titulo_pagina') is-invalid @enderror"
                                                        name="titulo_pagina" id="titulo_pagina" autocomplete="off"
                                                        placeholder="Titulo del articulo" value="{{ $articulo->titulo }}">
                                                    <label for="" class="text-white">Titulo</label>
                                                    @error('titulo_pagina')
                                                        <div id="basic-addon2" class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="text-white">Imagen de portada</label>
                                                <input type="file" name="imagen_portada" id="imagen_portada"
                                                    class="form-control bg-transparent form-control-lg @error('imagen_portada') is-invalid @enderror">
                                                @error('imagen_portada')
                                                    <div id="basic-addon2" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-floating">
                                                    <textarea class="form-control bg-transparent text-white @error('resumen_articulo') is-invalid @enderror" name="resumen_articulo"
                                                        id="floatingTextarea2" style="height: 100px">{{ $articulo->resumen }}</textarea>
                                                    <label for="floatingTextarea2" class="text-white">Resumen</label>
                                                    @error('resumen_articulo')
                                                        <div id="basic-addon2" class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mb-5">
                                            <div class="col text-center">
                                                <a href="{{ route('view-inicio') }}" class="btn btn-lg btn-danger">Cancelar</a>
                                                <button class="btn btn-lg btn-success" id="btn_generar">Generar Articulo</button>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        ClassicEditor.create(document.querySelector('#editor'))
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('There was a problem initializing the editor.', error);
            });
    </script>
@endsection 