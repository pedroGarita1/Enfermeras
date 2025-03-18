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
    @yield('styles')
    <title>Empresa || {{ $titulo }}</title>
</head>
<body>
    @include('shared/nav_float')
    @yield('contenido')
    @include('shared/footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('lib/slick/slick.js') }}"></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    @yield('js')
</body>
</html>
