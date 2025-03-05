@extends('layouts/main')
@section('contenido')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 col-sm-12 p-3">
                    <div class="card card-login shadow-login bg-transparent">
                        <div class="card-body">
                            <form action="{{ route('Productos-store') }}"  method="post" enctype="multipart/form-data">
                                @csrf
                                <h5 class="card-title ">CREADOR DE PRODUCTOS</h5>
                                <p class="card-text">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                                @csrf
                                            <div class="form-floating mb-3">
                                                <input type="" class="form-control bg-transparent  @error('nom_producto') is-invalid @enderror"
                                                    name="nom_producto" id="nom_producto" autocomplete="off"
                                                    placeholder="Titulo del articulo" value="{{ old('nom_producto') }}">
                                                <label for="" class="">Nombre del producto</label>
                                                @error('nom_producto')
                                                    <div id="basic-addon2" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="" class="">Imagen del producto</label>
                                            <input type="file" name="img_producto" id="img_producto"
                                                class="form-control bg-transparent  form-control-lg @error('img_producto') is-invalid @enderror">
                                            @error('img_producto')
                                                <div id="basic-addon2" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <select name="id_categoria" class="form-select form-select-lg mb-3  " aria-label=".form-select-lg example">
                                                <option value="0" selected>Selecciona una categoria</option>
                                                @foreach ($categoria as $item)
                                                <option value="{{ $item->id }}">{{ $item->nom_cat }}</option>                                                        
                                                @endforeach
                                            </select>
                                            @error('id_categoria')
                                                <div id="basic-addon2" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <p class="text-center ">Descripcion</p>
                                            <main>
                                                <div class="document-editor">
                                                    <div class="content-container">
                                                        <textarea class="bg-transparent" name="content" id="editor" cols="30" rows="10">{{ old('content') }}</textarea>
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
                                    <div class="row mt-4">
                                        <div class="col text-end">
                                            <a href="{{ route('view-inicio') }}" class="btn btn-lg btn-meeimex-black">Cancelar</a>
                                            <button class="btn btn-lg btn-meeimex-blue" id="btn_generar">Generar Producto</button>
                                        </div>
                                    </div>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="card card-login shadow-login bg-transparent">
                        <div class="card-body">
                            <h5 class="card-title ">CREADOR DE CATEGORIAS</h5>
                            <p class="card-text">
                                <form action="{{ route('Productos-store-categoria') }}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="" class="form-control bg-transparent  @error('nom_categoria') is-invalid @enderror"
                                            name="nom_categoria" id="nom_categoria" autocomplete="off"
                                            placeholder="Titulo del articulo" value="{{ old('nom_categoria') }}">
                                        <label for="" class="">Titulo de la categoria</label>
                                        @error('nom_categoria')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-meeimex-blue">Agregar</button>
                                    </div>
                                </form>
                            </p>
                        </div>
                    </div>
                    <div class="card card-login shadow-login bg-transparent mt-4">
                        <div class="card-body">
                            <h5 class="card-title">EDITAR CATEGORIA</h5>
                            <p class="card-text">
                                <table class="table table-striped table-hover table-bordered table-sm table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Editar</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $contador = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($categoria as $item)
                                        <tr>
                                            <th scope="row">{{ $contador ++ }}</th>
                                            <td>{{ $item->nom_cat }}</td>
                                            <td><a href="{{ route('view-edit-categoria', ['id'=>$item->id]) }}" class="btn btn-meeimex-blue"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </p>
                        </div>
                    </div>
                </div>
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