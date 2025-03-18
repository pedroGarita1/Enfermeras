@extends('layouts/main')
@section('contenido')
<header class="text-center mt-5">
    <h1><i class="fa-solid fa-envelope"></i> Contacto</h1>
    <p class="mt-3">Ponte en contacto con nosotros para más información</p>
</header>
<hr class="hr-gradient">
<section class="container mb-5">
    <form class="contact-form">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Tu Nombre">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Escribe tu mensaje"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-custom">Enviar Mensaje</button>
        </div>
    </form>

    <div class="contact-info mt-4">
        <p><i class="fa-solid fa-phone"></i> +52 123 456 7890</p>
        <p><i class="fa-solid fa-envelope"></i> contacto@shuridevelop.com</p>
        <p><i class="fa-solid fa-map-marker-alt"></i> Ciudad de México, México</p>
    </div>
</section>
@endsection
