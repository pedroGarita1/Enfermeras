@extends('layouts/main')
@section('style')
    <style>
        .accordion-item {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid white;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .accordion-button {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
        }
        .accordion-button:not(.collapsed) {
            background: white;
            color: #004e92;
        }
        .accordion-body {
            color: white;
        }
    </style>
@endsection
@section('contenido')
<header class="text-center mt-5">
    <h1><i class="fa-solid fa-question-circle"></i> Preguntas Frecuentes</h1>
    <p class="mt-3">Resolvemos las dudas más comunes sobre nuestros servicios</p>
</header>
<hr class="hr-gradient">
<section class="container mb-5">
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    ¿Qué servicios ofrece Shuri Develop?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ofrecemos soluciones y complementos para SAP Business One, optimizando la eficiencia de tu empresa.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    ¿Cómo puedo ponerme en contacto con ustedes?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Puedes escribirnos a contacto@shuridevelop.com o llamarnos al +52 123 456 7890.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    ¿Ofrecen soporte técnico?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Sí, contamos con un equipo especializado en soporte técnico para ayudarte con cualquier problema.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
