@extends('layouts/main')
@section('contenido')

<!-- Page Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="fw-bold">PRODUCTOS MEEIMEX</h1>
        </div>
        <hr class="mt-3 mb-3">
        <h3 class="mb-3">Todos los productos</h3>
        @foreach ($productos as $item)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow h-100">
                <img src="{{ Storage::url($item->nom_imagen) }}" class="card-img-top" style="height: 150px" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">{{ $item->nom_producto }}</h5>
                    @if ($item->estado == 1)
                    <div class="card-text text-success mt-3 mb-3">Disponible</div>
                    @else
                    <div class="card-text text-danger mt-3 mb-3">No disponible</div>
                    @endif
                </div>
                <div class="card-footer text-muted text-center">
                    <a href="{{ route('view-producto', ['name' =>$item->nom_producto,'id'=>$item->id]) }}" class="btn btn-meeimex-blue mt-2">Ver</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection