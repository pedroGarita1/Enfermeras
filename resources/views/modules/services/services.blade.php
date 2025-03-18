@extends('layouts/main')
@section('contenido')
<header class="text-center py-5">
    <h1><i class="fa-solid fa-briefcase"></i> Nuestros Servicios</h1>
    <p class="mt-3">Soluciones innovadoras para optimizar tu negocio con SAP Business One</p>
</header>

<hr class="hr-gradient">

<section class="container text-center mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4">
                <h3><i class="fa-solid fa-gears"></i> Integración con SAP</h3>
                <p>Mejoramos la funcionalidad de tu sistema ERP mediante complementos personalizados.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <h3><i class="fa-solid fa-chart-line"></i> Análisis y Optimización</h3>
                <p>Implementamos estrategias para aumentar la eficiencia de tus procesos empresariales.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <h3><i class="fa-solid fa-headset"></i> Soporte y Capacitación</h3>
                <p>Brindamos asistencia técnica y formación para el uso óptimo de nuestras soluciones.</p>
            </div>
        </div>
    </div>
</section>
@endsection
