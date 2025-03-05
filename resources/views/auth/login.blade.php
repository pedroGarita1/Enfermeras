@extends('layouts/main')
@section('contenido')
<div class="banner-image-login w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container ps-md-0 text-center">
        <div class="row justify-content-end">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-6">
                <div class="card card-login shadow-login bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title fs-3 fw-bold text-white">Bienvenido!</h5>
                        <p class="card-text">
                            <form method="POST" action="{{ route('Auth-lognIn') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control bg-transparent text-white" id="floatingInput" name="email" placeholder="name@example.com">
                                    <label for="floatingInput" class="text-white">Correo electronico</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control bg-transparent text-white" id="floatingPassword" name="password" placeholder="Password">
                                    <label for="floatingPassword" class="text-white">contraseña</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-success btn-login text-uppercase fw-bold mb-2" type="submit">Iniciar sesion</button>
                                    <div class="text-center">
                                        <a class="text-white" href="{{ route('view-signIn') }}">¿No tienes una cuenta?</a>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="col-md-12 mt-3">
                                <span class="fw-bold fs-5 text-muted">Otras opciones</span>
                                <div class="row justify-content-center mt-3">
                                    {{-- <div class="col-md-3 text-center">
                                        <a href="#" class="btn btn-primary rounded-circle fs-4"><i class="fa-brands fa-facebook"></i></a>
                                    </div> --}}
                                    <div class="col-md-3 text-center">
                                        <a href="{{ route('Auth-google') }}" class="btn btn-danger rounded-circle fs-4"><i class="fa-brands fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection