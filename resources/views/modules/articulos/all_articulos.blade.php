@extends('layouts/main')
@section('contenido')
<div class="container mt-5 mb-5">
    <div class="row justify-content-around">
        <div class="col-md-12 animation-figure">
            <h2 class=" fs-2 animation-content" data-animation="fade">Nuevos lanzamientos</h2>
        </div>
        <div class="col-md-12 mb-5">
            <div class="slider">
                @foreach ($recientes as $item)
                    <div class="wrapper">
                        <div class="card card-login shadow bg-transparent h-75">
                            <img src="{{ Storage::url($item->nom_img) }}" class="card-img-top" style="height: 140px" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">{{ Str::limit($item->titulo, 30, '...') }}</h5>
                            </div>
                            <div class="card-footer">
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('view-articulo', ['id'=>$item->id,'titulo'=>$item->titulo]) }}" class="btn form-control btn-meeimex-blue">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <h2 class="fw-bold">Todos los articulos</h2>
        </div>
        <hr class="mb-3">
        @foreach ($articulos as $item)
            <div class="col-md-3 mb-3">
                <div class="card shadow rounded h-100">
                    <img src="{{ Storage::url($item->nom_img) }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($item->resumen, 100, '...') }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('view-articulo', ['id'=>$item->id,'titulo'=>$item->titulo]) }}" class="btn form-control btn-meeimex-blue">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/inicio.js') }}"></script>
@endsection