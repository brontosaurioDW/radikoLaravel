<div class="mobile-header d-flex d-lg-none align-items-center justify-content-between">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle easy-sidebar-toggle" aria-expanded="false"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </button>
    </div>

    <h1>
        <a class="navbar-brand" href="{{ url('/') }}">Rádiko</a>
    </h1>

    <ul>
        <li>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Carrito proximamente">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </li>
    </ul>
</div>

<nav class="navbar navbar-inverse easy-sidebar">
    <div class="container">
        <h1 class="d-none d-lg-block">
            <a class="navbar-brand" href="{{ url('/') }}">Rádiko</a>
        </h1>

        <ul class="navbar-nav flex-row flex-wrap">
            <li>
                <a href="{{ url('/huertas') }}">Huertas</a>
            </li>
            @if(Auth::check())
            <li>
                <div class="dropdown show">
                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                        
                        Bienvenido/a {{ Auth::user()->name }}                    
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('perfil.detalle' , Auth::user()->id ) }}">Perfil</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a>
                    </div>
                </div>
            </li>
            @else
            <li>
                <a href="{{ url('/login') }}">Ingresá</a>
            </li>
            <li>
                <a href="{{ url('/registro') }}">Registrate</a>
            </li>
            @endif
            <li class="d-none d-lg-block">
                <a href="#" data-toggle="tooltip" data-placement="right" title="Carrito proximamente">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>