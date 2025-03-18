<div class="container-fluid">
    <nav class="navbar navbar-expand-sm navbar-dark bg-transparent sticky-top">
        <a class="navbar-brand fs-2" href="{{ route('view-inicio') }}">Empresa</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav m-auto fs-4">
                <li class="nav-item">
                    <a class="nav-link @if($titulo == 'General servicios') active @endif" href="{{ route('view-servicios') }}"><i class="fa-solid fa-square-poll-horizontal"></i> Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($titulo == 'Sobre nosotros') active @endif" href="{{ route('view-nosotros') }}"><i class="fa-solid fa-circle-info"></i> ¿Quienes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($titulo == 'Articulos') active @endif" href="{{ route('view-articulos') }}"><i class="fa-solid fa-newspaper"></i> Articulos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($titulo == 'Contacto') active @endif" href="{{ route('view-contacto') }}"><i class="fa-solid fa-address-book"></i> Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($titulo == 'Preguntas Frecuentes') active @endif" href="{{ route('view-preguntas') }}"><i class="fa-solid fa-circle-question"></i> Preguntas Frecuentes</a>
                </li>
            </ul>
            <ul class="navbar-nav fs-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i> Usuario</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-person"></i> Perfil</a>
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-cart-shopping"></i> Carrito</a>
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
