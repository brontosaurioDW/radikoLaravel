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
            <!--
            <li class="nav-item">
                <a class="nav-link" href="listado-productos.html">Productos</a>
            </li>
            -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">Ingresá</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/registro') }}">Registrate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="confirmacion-paso-1.html" data-toggle="tooltip" data-placement="right" title="Tooltip on top">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>