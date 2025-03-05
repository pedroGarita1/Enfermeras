@extends('layouts/main')
@section('contenido')
<div class="banner-image-login w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card card-login shadow-login bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title text-center fs-4 text-white fw-bold">Registro de usuarios</h5>
                        <p class="card-text">
                            <form action="{{ route('Auth-signIn') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 text-center fs-6 text-white fw-bold">
                                        Informacion empresarial
                                        <hr>
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent @error('nom_empresa') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="nom_empresa">
                                            <label for="id_nom_usuario" class="text-white">Nombre de la empresa</label>
                                            @error('nom_empresa')
                                                <div id="basic-addon2" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control bg-transparent @error('tipo_empresa') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="tipo_empresa">
                                            <label for="id_nom_usuario" class="text-white">Tipo de empresa</label>
                                            @error('tipo_empresa')
                                                <div id="basic-addon2" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control bg-transparent @error('industria') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="industria">
                                            <label for="id_nom_usuario" class="text-white">Industria</label>
                                            @error('industria')
                                                <div id="basic-addon2" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 text-center fs-6 text-white fw-bold">
                                        Informacion de usuario
                                        <hr>
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control bg-transparent @error('email') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="email">
                                            <label for="id_nom_usuario" class="text-white">Correo electronico</label>
                                            @error('email')
                                                <div id="basic-addon2" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="password" class="form-control bg-transparent @error('password') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="password">
                                            <label for="id_nom_usuario" class="text-white">Contraseña</label>
                                            @error('password')
                                                <div id="basic-addon2" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                        <button class="btn btn-success">Registrar usuario</button>
                                    </div>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection