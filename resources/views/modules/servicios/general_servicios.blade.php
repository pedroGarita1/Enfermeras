@extends('layouts/main')
@section('contenido')
<div class="banner-image-servicios vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-5 mt-5">
                <h1 class="fw-bold text-white">Servicios a ofrecer</h1>
            </div>
        </div>
    </div>
</div>
    <!-- Page Content -->
<div class="container mt-5 mb-5">
    <!-- Page Heading -->
    <h1 class="my-4 mt-5">Todos los servicios
    </h1>

    <!-- Project One -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/servicios/3.png') }}" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Logística Meeimex: Haciendo realidad la movilidad de equipos excepcionales</h3>
            <p>
                Meeimex es tu socio confiable en logística, especializado en transportar equipos excepcionales de dimensiones extraordinarias. A través de una red de proveedores de confianza, gestionamos todo el proceso, desde la planificación hasta la resolución de desafíos logísticos. Eliminamos las preocupaciones para que puedas enfocarte en tu negocio. Contáctanos y descubre cómo Meeimex te brinda tranquilidad y éxito en cada envío.
            </p>
            <a class="btn btn-meeimex-blue" href="{{ route('view-servicio', ['name'=>1]) }}">Ver servicio</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/servicios/4.png') }}" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Servicio de Desmonte: Eficiencia, Seguridad y Conocimiento</h3>
            <p>Nuestro servicio de desmonte ofrece un enfoque integral que combina análisis de operación y riesgos con personal altamente capacitado y equipos especializados, como grúas y montacargas. Nuestra solución se centra en satisfacer la necesidad de contar con personal y equipos calificados para realizar desmontajes de equipos de manera segura y eficiente. Confía en nosotros para ejecutar tus proyectos de desmonte con profesionalismo y eficiencia, permitiéndote concentrarte en lo que realmente importa.</p>
            <a class="btn btn-meeimex-blue" href="{{ route('view-servicio', ['name'=>2]) }}">Ver servicio</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/servicios/5.png') }}" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Mantenimiento: Asegurando la Longevidad y Eficiencia de tus Equipos</h3>
            <p>Nuestro servicio de mantenimiento es la clave para asegurar la longevidad y eficiencia de tus equipos. Ofrecemos renovación, ajuste, modificación y ampliación, además de evaluaciones para determinar el reemplazo de equipos al final de su vida útil. En Meeimex, nos comprometemos a mantener tus activos en su mejor estado y a extender su durabilidad. Tu eficiencia es nuestra prioridad.</p>
            <a class="btn btn-meeimex-blue" href="{{ route('view-servicio', ['name'=>3]) }}">Ver servicio</a>
        </div>
    </div>
    <!-- /.row -->
</div>

@endsection