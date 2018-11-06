<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <h1><a class="navbar-brand" href="{{ url('/') }}">Rádiko</a></h1>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#radiko-navbar" aria-controls="radiko-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="radiko-navbar">
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
    </div>
</nav>