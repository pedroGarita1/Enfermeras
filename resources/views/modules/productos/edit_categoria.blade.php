@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">EDITAR CATEGORIA</h5>
                    <p class="card-text">
                        <form action="{{ route('Productos-update-categoria', ['id'=>$categoria->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="" class="form-control bg-transparent  @error('nom_categoria') is-invalid @enderror"
                                    name="nom_categoria" id="nom_categoria" autocomplete="off"
                                    placeholder="Titulo del articulo" value="{{ $categoria->nom_cat }}">
                                <label for="" class="">Titulo de la categoria</label>
                                @error('nom_categoria')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-meeimex-blue">Actualizar Categoria</button>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection