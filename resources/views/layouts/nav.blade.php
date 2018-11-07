<h1><a class="navbar-brand" href="{{ url('/') }}">Rádiko</a></h1>

<div class="navbar-header">
    <button type="button" class="navbar-toggle easy-sidebar-toggle d-block d-lg-none" aria-expanded="false"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
    </button>
</div>

<nav class="navbar navbar-inverse easy-sidebar">
    <div class="container-fluid">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/huertas') }}">Huertas</a>
            </li>
            @if(Auth::check())
            <li>
                <div class="dropdown show">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                        
                        Bienvenido/a {{ Auth::user()->name }}                    
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Configuración</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a>
                    </div>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">Ingresá</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/registro') }}">Registrate</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="confirmacion-paso-1.html" data-toggle="tooltip" data-placement="right" title="Carrito proximamente">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>