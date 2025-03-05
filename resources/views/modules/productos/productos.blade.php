@extends('layouts/main')
@section('contenido')
<div class="container">
    <h1 class="my-4">{{ $producto->nom_producto }} -
        <small>{{ $categoria->nom_cat }}</small>
        @auth
        @if ($producto->id_usuario == Auth::user()->id)
            <a href="{{ route('view-edit-producto', ['id'=>$producto->id]) }}" class="btn btn-meeimex-blue"> <i class="fa-solid fa-pen-to-square"></i> </a>
        @endif
        @endauth
    </h1>
    <div class="row">
        <div class="col-md-6 text-center align-content-center">
            <img class="img-fluid" src="{{ Storage::url($producto->nom_imagen) }}" style="height: 400px;" alt="">
            <div class="col-md-12 mt-5">
                <div class="card card-login shadow bg-transparent">
                  <div class="card-body">
                    <div class="card-header text-center">
                    <h4>Sobre el producto</h4>
                    </div>
                    <p class="card-text mt-5">
                        @if ($producto->estado == 1)
                            <p class="text-success fs-4">Disponible</p>
                        @else
                            <p class="text-danger fs-4">No Disponible</p>
                        @endif
                        @auth
                            @if (Auth::user()->rol_user == 1)
                                @if ($producto->estado == 1)
                                <form action="{{ route('Productos-desactivar', ['id'=>$producto->id]) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-outline-danger"><i class="fa-solid fa-rectangle-xmark"></i> Desactivar</button>
                                </form>
                                @else
                                <form action="{{ route('Productos-activar', ['id'=>$producto->id]) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-outline-primary"><i class="fa-solid fa-square-check"></i> Activar</button>
                                </form>
                                @endif
                            @endif
                        @endauth
                    </p>
                    <div class="card-footer mt-5 text-muted text-center">
                        @if ($producto->estado == 1)
                            <button class="btn btn-lg btn-meeimex-blue" data-bs-toggle="modal" data-bs-target="#modal_contactanos">Obtener</button>
                        @else
                            <span>Sin existencia</span>
                        @endif
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Descripcion</h3>
            {!! $producto->descripcion !!}
        </div>
        
    </div>
    <hr>
    <h3 class="my-4">Productos similares</h3>
    <div class="row">
        @foreach ($similares as $item)
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="{{ route('view-producto', ['name' =>$item->nom_producto,'id'=>$item->id]) }}">
                <img class="img-fluid" src="{{ Storage::url($item->nom_imagen) }}" alt="" style="height: 150px">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection