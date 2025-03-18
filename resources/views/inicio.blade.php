@extends('layouts.main')
@section('contenido')
<header class="full-screen">
    <h1 style="font-size: 4rem;"><i class="fa-solid fa-building"></i> Bienvenidos a Nuestra Empresa</h1>
    <p class="mt-3">Ofrecemos soluciones innovadoras para tu negocio</p>
    <a href="#mas-info" class="btn btn-custom mt-3"><i class="fa-solid fa-arrow-right"></i> Más Información</a>
</header>

<hr class="hr-gradient">

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h2>¿Quiénes Somos?</h2>
        </div>
        <div class="col-md-12">
            <p class="mt-3">Somos una empresa dedicada a ofrecer soluciones empresariales innovadoras. Nuestro equipo está compuesto por profesionales altamente capacitados que trabajan día a día para garantizar la mejor calidad en nuestros servicios.</p>
        </div>
    </div>
    <div class="row text-center mt-4">
        <div class="col-md-12 mb-5"><h2>¿Qué Hacemos?</h2></div>
        <div class="col-md-3">
            <div class="card p-3">
                <div class="card-header">
                    <h5><i class="fa-solid fa-laptop-code"></i> Desarrollo Web</h5>
                </div>
                <p class="card-body">Creación de sitios web modernos y funcionales.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <div class="card-header">
                    <h5><i class="fa-solid fa-chart-line"></i> Marketing Digital</h5>
                </div>
                <p class="card-body">Estrategias para aumentar la visibilidad online.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <div class="card-header">
                    <h5><i class="fa-solid fa-bullhorn"></i> Publicidad</h5>
                </div>
                <p class="card-body">Campañas personalizadas para tu empresa.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <div class="card-header">
                    <h5><i class="fa-solid fa-users"></i> Consultoría</h5>
                </div>
                <p class="card-body">Asesoría para optimizar tus procesos de negocio.</p>
            </div>
        </div>
    </div>

    <hr class="hr-gradient">

    <h2 class="text-center">Trabajos Disponibles</h2>
    <ul class="list-group mt-4">
        <li class="list-group-item bg-transparent text-white"><i class="fa-solid fa-briefcase"></i> Desarrollador Web - Creación y mantenimiento de sitios web.</li>
        <li class="list-group-item bg-transparent text-white"><i class="fa-solid fa-briefcase"></i> Especialista en Marketing - Estrategias de crecimiento digital.</li>
        <li class="list-group-item bg-transparent text-white"><i class="fa-solid fa-briefcase"></i> Diseñador Gráfico - Creación de contenido visual atractivo.</li>
        <li class="list-group-item bg-transparent text-white"><i class="fa-solid fa-briefcase"></i> Consultor Empresarial - Optimización de procesos.</li>
    </ul>

    <hr class="hr-gradient">

    <div class="row text-center">
        <div class="col-md-12 text-center mb-5">
            <h2 class="text-center">Nuestro equipo</h2>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top img-thumbnail img-fluid rounded-circle" style=" width: 100px; height: 100px;" alt="...">
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2"><i class="fa-solid fa-user-tag"></i> Nombre persona</h6>
                    <p class="card-text"><i class="fa-solid fa-circle-info"></i> Informacion de la persona, que realiza en la empresa</p>
                </div>
                <div class="card-footer">
                    <i class="fa-solid fa-briefcase"></i> Cargo que ejerce
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top img-thumbnail img-fluid rounded-circle" style=" width: 100px; height: 100px;" alt="...">
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2"><i class="fa-solid fa-user-tag"></i> Nombre persona</h6>
                    <p class="card-text"><i class="fa-solid fa-circle-info"></i> Informacion de la persona, que realiza en la empresa</p>
                </div>
                <div class="card-footer">
                    <i class="fa-solid fa-briefcase"></i> Cargo que ejerce
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top img-thumbnail img-fluid rounded-circle" style=" width: 100px; height: 100px;" alt="...">
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2"><i class="fa-solid fa-user-tag"></i> Nombre persona</h6>
                    <p class="card-text"><i class="fa-solid fa-circle-info"></i> Informacion de la persona, que realiza en la empresa</p>
                </div>
                <div class="card-footer">
                    <i class="fa-solid fa-briefcase"></i> Cargo que ejerce
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/inicio.js') }}"></script>
@endsection
