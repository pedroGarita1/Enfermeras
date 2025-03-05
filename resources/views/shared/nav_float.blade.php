<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('view-inicio') }}"><img src="{{ asset('img/logo-meeimex.png') }}" style="height: 60px; width: 60px;" alt=""></a>
        <button class="navbar-toggler"type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link cta fs-5" href="{{ route('view-servicios') }}"><span class="hover-underline-animation text-white">SERVICIOS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cta fs-5" href="{{ route('view-productos') }}"><span class="hover-underline-animation text-white">PRODUCTOS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cta fs-5" href="{{ route('view-nosotros') }}"><span class="hover-underline-animation text-white">SOBRE NOSOTROS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cta fs-5" data-bs-toggle="modal" data-bs-target="#modal_contactanos"><span class="hover-underline-animation text-white">CONTACTANOS</span></a>
                </li>
                @guest
                <li class="nav-item fs-5 fw-bold">
                    <a class="nav-link cta" href="{{ route('view-login') }}"><span class="hover-underline-animation text-white">ACCEDER <i class="fa-solid fa-right-to-bracket"></i></span></a>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown fs-5 fw-bold me-3">
                    <a class="nav-link dropdown-toggle cta" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="hover-underline-animation">{{ Str::limit(Auth::user()->name, 20, '.') }}</span>
                    </a>
                    <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdown">
                        {{-- <li><hr class="dropdown-divider"></li> --}}
                        <li><a class="dropdown-item text-white" href="{{ route('Auth-lognOut') }}">Cerrar sesion</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>