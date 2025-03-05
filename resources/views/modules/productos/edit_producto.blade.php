@extends('layouts/main')
@section('contenido')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 col-sm-12 p-3">
                    <div class="card card-login shadow-login bg-transparent">
                        <div class="card-body">
                            <form action="{{ route('Productos-update', ['id'=>$producto->id]) }}"  method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h5 class="card-title ">CREADOR DE PRODUCTOS</h5>
                                <p class="card-text">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                                @csrf
                                            <div class="form-floating mb-3">
                                                <input type="" class="form-control bg-transparent  @error('nom_producto') is-invalid @enderror"
                                                    name="nom_producto" id="nom_producto" autocomplete="off"
                                                    placeholder="Titulo del articulo" value="{{ $producto->nom_producto }}">
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
                                                <option value="0">Selecciona una categoria</option>
                                                @foreach ($categoria as $item)
                                                    @if ($producto->id_categoria == $item->id)
                                                    <option selected value="{{ $item->id }}">{{ $item->nom_cat }}</option> 
                                                    @else
                                                    <option value="{{ $item->id }}">{{ $item->nom_cat }}</option> 
                                                    @endif 
                                                                                         
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
                                                        <textarea class="bg-transparent" name="content" id="editor" cols="30" rows="10">{{ $producto->descripcion }}</textarea>
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
                                            <button class="btn btn-lg btn-meeimex-blue" id="btn_generar">Actualizar producto</button>
                                        </div>
                                    </div>
                                </p>
                            </form>
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