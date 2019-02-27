<meta name="csrf-token" content="{{ csrf_token() }}">
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
    	@if(Auth::check() AND Auth::user()->tipo == 'huerta')
            <a class="navbar-brand" href="{{ route('cpanel.productos.index') }}">Rádiko</a>
        @else
            <a class="navbar-brand" href="{{ url('/') }}">Rádiko</a>
        @endif  
	</h1>	

   <ul>
    <li>
        <a href="{{ route('carrito.index') }}">
            <i class="fal fa-shopping-basket"></i>
            <span class="cart-yes js-cart-content"></span>
        </a>
        <div class="mensajitoTooltip js-tooltip"> El producto se agregó a la canasta </div>
    </li>
</ul>
</div>

<nav class="navbar navbar-inverse easy-sidebar">
    <div class="container">
        <h1 class="d-none d-lg-block">
            @if(Auth::check() AND Auth::user()->tipo == 'huerta')
                <a class="navbar-brand" href="{{ route('cpanel.productos.index') }}">Rádiko</a>
            @else
                <a class="navbar-brand" href="{{ url('/') }}">Rádiko</a>
            @endif  

        </h1>

        <ul class="navbar-nav flex-row flex-wrap relative">
        @if(Auth::check())
            @if(Auth::user()->tipo == 'cliente')
                <li>
                    <a href="{{ url('/huertas') }}">Huertas</a>
                </li>

                <li>
                    <div class="dropdown show">
                        <a href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                        
                            Bienvenido/a {{ Auth::user()->name }}                 
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">    
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="{{ route('perfil.detalle') }}">
                                        <i class="fas fa-user"></i>
                                        <span>Perfil</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('perfil.direcciones') }}">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Mis direcciones</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item js-logout" href="{{ route('logout') }}">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Cerrar sesión</span>
                                    </a>
                                </li>
                            </ul>    
                        </div>
                    </div>
                </li>

    			<li class="d-none d-lg-block">
                    <a href="{{ route('carrito.index') }}">
                        <i class="fal fa-shopping-basket"></i>
                        <span class="cart-yes js-cart-content"></span>
                    </a>  
                    <div class="mensajitoTooltip js-tooltip"> El producto se agregó a la canasta </div>
                </li>
            @else
                <li>
                    <div class="dropdown show">
                        <a href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                        
                            Bienvenido/a {{ Auth::user()->name }}                 
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <ul>                                    
                                <li>
                                    <a class="dropdown-item js-logout" href="{{ route('cpanel.perfil.index') }}">
                                        <i class="fas fa-user"></i>
                                        <span>Perfil</span>
                                    </a> 
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Cerrar sesión</span>
                                    </a>                                
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            @endif
        @else			
            <li>
                <a href="{{ url('/huertas') }}">Huertas</a>
            </li>
            <li>
                <a href="{{ url('/login') }}">Ingresá</a>
            </li>
            <li>
                <a href="{{ url('/registro') }}">Registrate</a>
            </li>
            <li class="d-none d-lg-block">
                <a href="{{ route('carrito.index') }}">
                    <i class="fal fa-shopping-basket"></i>
                    <span class="cart-yes js-cart-content"></span>
                </a>
                <div class="mensajitoTooltip js-tooltip"> El producto se agregó a la canasta </div>
            </li>
        @endif	
    </ul>
</div>
</nav>