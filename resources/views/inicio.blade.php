@extends('layouts.main')
@section('contenido')
<div class="banner-image-inicio w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation-figure">
                <p class="text-white fs-3 animation-content" data-animation="fade">LLEVA TU NEGOCIO AL SIGUIENTE NIVEL...</p>
                <h1 class="text-white fs-inicio">SOMOS TU SOCIO <br> ESTRATEGICO DE NEGOCIOS</h1>
                <a href="{{ route('view-servicios') }}" class="btn btn-outline-light mt-3">DESCUBRE LO QUE PODEMOS HACER POR TI</a>
            </div>
        </div>
    </div>
</div>
<div class="banner-image-contador">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mt-5 mb-5">
                <p class="fs-2 text-white">"En nuestro camino, hemos acumulado un conocimiento profundo y una experiencia inigualable, permítanos guiarlo a través de nuestro legado, demostrando cómo su éxito se convierte en nuestra misión."</p>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <p class="fs-6 text-white">Bienvenidos a nuestro sólido legado de experiencia, forjado a lo largo de </p>
                        <h2 class="fs-contador fw-bold text-white">+16</h2>
                        <p class="fs-5 text-white">Años</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="fs-6 text-white">Nos enorgullece haber trabajado con éxito en más de</p>
                        <h2 class="fs-contador fw-bold text-white">+5</h2>
                        <p class="fs-5 text-white">Industrias</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="fs-6 text-white">Colaborando de la mano y estrecha confianza con</p>
                        <h2 class="fs-contador fw-bold text-white">+10</h2>
                        <p class="fs-5 text-white">Empresas</p>
                    </div>
                    <div class="col-md-12 text-center mt-5 mb-5">
                        <a href="{{ route('view-nosotros') }}" class="btn btn-outline-light">Conoce más</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <p class="fs-3">CASOS DE ÉXITO</p>
            <p class="fs-5">Explore nuestros casos de éxito y obtenga una visión de lo que podemos lograr juntos</p>
        </div>
        <hr>
        <div class="banner">
            <div class="row fullwidth">
                <div class="col-md-12">
                    <ul class="bannerSlider">
              <!--  1. slide  -->
                        <li class="slide">
                            <a href="#">
                                <div class="slide__text">
                                    <h2>Titulo Exito 1</h2>
                                </div>
                                <div class="slide__image">
                                    <img src="{{ asset('img/exito_1.jpg') }}" alt="" />
                                </div>
                            </a>
                        </li>
              <!--  2. slide  -->
                        <li class="slide">
                            <a href="#">
                                <div class="slide__text">
                                    <h2>Titulo Exito 2</h2>
                                </div>
                                <div class="slide__image">
                                    <img src="{{ asset('img/exito_2.jpg') }}" alt="" />
                                </div>
                            </a>
                        </li>
              <!--  3. slide  -->
                        <li class="slide">
                            <a href="#">
                                <div class="slide__text">
                                    <h2>Titulo Exito 3</h2>
                                </div>
                                <div class="slide__image">
                                    <img src="{{ asset('img/exito_4.jpg') }}" alt="" />
                                </div>
                            </a>
                        </li>
              <!--  4. slide  -->
                        <li class="slide">
                            <a href="#">
                                <div class="slide__text">
                                    <h2>Titulo Exito 4</h2>
                                </div>
                                <div class="slide__image">
                                    <img src="{{ asset('img/exito_5.jpg') }}" alt="" />
                                </div>
                            </a>
                        </li>
              
                    </ul>
                </div>
            </div>
        </div>
        <hr>    
        <div class="col-md-12 text-center mb-5 mt-3">
            <p class="fs-5">¿Listo para lograr resultados sobresalientes? <button class="btn btn-meeimex-black btn-lg" data-bs-toggle="modal" data-bs-target="#modal_contactanos"><i class="fa-solid fa-paper-plane"></i> Contáctenos</button></p>
        </div>
    </div>
</div>
<div class="banner-image-articulos w-100 vh-100 justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <p class="fs-3 text-white">ARTICULOS</p>
                <p class="fs-5 text-white">Sumérjase en el conocimiento experto de Meeimex y obtenga una ventaja competitiva</p>
            </div>
            <div class="col-md-12 mb-5">
                <div class="slider">
                    @foreach ($articulos as $item)
                        <div class="wrapper">
                            <div class="card text-white card-login shadow bg-transparent h-100">
                                <img src="{{ Storage::url($item->nom_img) }}" class="card-img-top" style="height: 140px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ Str::limit($item->titulo, 45, '...') }}</h5>
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
            <div class="col-md-12 text-center mb-5">
                <a href="{{ route('view-articulos') }}" class="btn btn-meeimex-black">Descubra más <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-gris-articulos">
    
</div>

@endsection
@section('js')
<script src="{{ asset('js/inicio.js') }}"></script>
@endsection