@extends('layouts/main')
@section('styles')
<style>
    body {
        background: linear-gradient(to bottom, #000428, #004e92);
        color: white;
    }
    .timeline {
        position: relative;
        padding: 20px 0;
    }
    .timeline::before {
        content: '';
        position: absolute;
        width: 4px;
        background: white;
        top: 0;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    .timeline-item {
        position: relative;
        margin-bottom: 40px;
    }
    .timeline-item .timeline-content {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid white;
        border-radius: 10px;
        padding: 20px;
        width: 45%;
        color: white;
    }
    .timeline-item:nth-child(even) .timeline-content {
        margin-left: auto;
    }
    .timeline-item .timeline-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        color: #004e92;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection
@section('contenido')
<header class="text-center py-5">
    <h1><i class="fa-solid fa-users"></i> Quiénes Somos</h1>
    <p class="mt-3">Nuestra historia y misión en el mundo de SAP Business One</p>
</header>
<hr class="hr-gradient">

<section class="container mt-5 mb-5">
    <div class="timeline">
        <div class="timeline-item d-flex">
            <div class="timeline-icon"><i class="fa-solid fa-flag"></i></div>
            <div class="timeline-content">
                <h4>Fundación (2015)</h4>
                <p>Shuri Develop nace con la visión de transformar la integración con SAP Business One.</p>
            </div>
        </div>
        <div class="timeline-item d-flex">
            <div class="timeline-icon"><i class="fa-solid fa-rocket"></i></div>
            <div class="timeline-content">
                <h4>Expansión (2018)</h4>
                <p>Ampliamos nuestro equipo y servicios para ofrecer soluciones empresariales innovadoras.</p>
            </div>
        </div>
        <div class="timeline-item d-flex">
            <div class="timeline-icon"><i class="fa-solid fa-trophy"></i></div>
            <div class="timeline-content">
                <h4>Reconocimiento (2021)</h4>
                <p>Fuimos reconocidos por nuestra eficiencia y calidad en complementos para SAP.</p>
            </div>
        </div>
        <div class="timeline-item d-flex">
            <div class="timeline-icon"><i class="fa-solid fa-chart-line"></i></div>
            <div class="timeline-content">
                <h4>Presente y Futuro</h4>
                <p>Seguimos evolucionando para optimizar el éxito de nuestros clientes.</p>
            </div>
        </div>
    </div>
</section>
@endsection
