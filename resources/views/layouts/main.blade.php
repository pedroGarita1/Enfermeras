<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-meeimex.png') }}">
    <title>Meeimex || {{ $titulo }}</title>
</head>
<body>
    @if ($titulo == 'inicio' || $titulo == 'Inicio de sesion' || $titulo == 'Registro de usuario' || $titulo == 'Articulo' || $titulo == 'General servicios' || $titulo == 'Servicio 1' || $titulo == 'Servicio 2' || $titulo == 'Servicio 3' )
    @include('shared/nav_float')
    @else
    @include('shared/nav_static')
    @endif
    @yield('contenido')
    @include('modules/contactanos/modal_contactanos')
    @if ($titulo == 'inicio')
    @include('modules/sociales/icons_social')
    @auth
        @if (Auth::user()->rol_user == 1)
            @include('modules/articulos/float_icon')
        @endif
    @endauth
    @endif
    @auth
        @if ($titulo == 'General productos' && Auth::user()->rol_user == 1)
            @include('modules/productos/icon_productos');
        @endif
    @endauth
    @include('shared/footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('lib/slick/slick.js') }}"></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    @yield('js')
    <script type="text/javascript">
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>
</html>