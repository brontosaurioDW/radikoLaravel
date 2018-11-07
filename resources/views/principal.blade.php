@extends ('layouts.master')
@section ('title', 'Radiko')
@section ('header-class', 'is-home')
@section ('content')

<section class="hero search d-flex align-items-center">
    <div class="container">
        <h2 class="logo">
            <span class="sr-only">Bienvenidos a Rádiko</span>
        </h2>
        <div class="form">
            <form action="resultado-de-busqueda.html" id="form-index">
                <div class="row-search form-row justify-content-center relative">
                    <input type="text" name="search" placeholder="¿Qué estás buscando?">
                    <a href="resultado-de-busqueda.html" class="btn-search">
                        <span class="sr-only">Search</span>
                        <i class="far fa-search"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="categories">
    <div class="container">
        <div class="title text-center">
            <h2 class="bold">Ver todas las huertas que ofrecen:</h2>
        </div>
        <ul class="d-flex justify-content-between">
            @foreach ($categorias as $categoria)
            <li class="frutas">
                <a href="{{ url('/huertas') }}" style="background-image: url(storage/images/categories/{{ $categoria->icono }})">
                    <span>{{ $categoria->categoria }}</span>
                </a>
            </li>
            @endforeach
        </ul>

        <ul class="d-flex justify-content-between">
            <li class="frutas">
                <a href="{{ url('/huertas') }}">
                    <span>Frutas</span>
                </a>
            </li>
            <li class="verduras">
                <a href="{{ url('/huertas') }}">
                    <span>Verduras</span>
                </a>
            </li>
            <li class="harinas">
                <a href="{{ url('/huertas') }}">
                    <span>Harinas</span>
                </a>
            </li>
            <li class="granjas">
                <a href="{{ url('/huertas') }}">
                    <span>Granja</span>
                </a>
            </li>
            <li class="lacteos">
                <a href="{{ url('/huertas') }}">
                    <span>Lácteos</span>
                </a>
            </li>
            <li class="carnes">
                <a href="{{ url('/huertas') }}">
                    <span>Carnes</span>
                </a>
            </li>
            <li class="especias">
                <a href="{{ url('/huertas') }}">
                    <span>Especias</span>
                </a>
            </li>
            <li class="semillas">
                <a href="{{ url('/huertas') }}">
                    <span>Semillas</span>
                </a>
            </li>
            <li class="envasados">
                <a href="{{ url('/huertas') }}">
                    <span>Envasados</span>
                </a>
            </li>
        </ul>

    </div>
</section>

<div class="grid-masonry">
    <div class="container">
        <div class="title text-center">
            <h2 class="bold">Huertas destacadas</h2>
        </div>
        
        <div class="grid flex-wrap d-flex justify-content-between">
            @foreach ($huertasDestacadas as $huerta)
                @switch($loop->index)
                    @case(0)
                        <?php $class="single-item half title-top-left plus-bottom-right rdk-tomato"; ?>
                    @break
                    @case(1)
                        <?php $class="single-item half title-top-right plus-bottom-left rdk-corn"; ?>
                    @break
                    @case(2)
                        <?php $class="single-item third title-top-left plus-bottom-right rdk-grape"; ?>
                    @break
                    @case(3)
                        <?php $class="single-item third title-bottom-left plus-top-right rdk-pepper"; ?>
                    @break
                    @case(4)
                        <?php $class="single-item third title-top-right plus-bottom-left rdk-tomato"; ?>
                    @break
                @endswitch

                <div class="<?php echo $class ?>">
                    <a href="{{ url('/huertas/1') }}" class="cta-link">
                        <div class="img-wrapper">
                            <img src="{{ url('storage/images/red-1.png') }}" alt="Huerta 1" class="img-fluid">
                        </div>
                        <div class="item-info">
                            <h3>{{ $huerta->huerta }}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            @endforeach

            {{-- <div class="single-item half title-top-left plus-bottom-right rdk-tomato">
                <a href="#" class="cta-link">
                    <div class="img-wrapper">
                        <img src="../public/images/destacados/red-1.png" alt="Huerta 1" class="img-fluid">
                    </div>
                    <div class="item-info">
                        <h3>La huerta orgánica</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <div class="single-item half title-top-right plus-bottom-left rdk-corn">
                <a href="#" class="cta-link">
                    <div class="img-wrapper">
                        <img src="../public/images/destacados/orange.png" alt="Huerta 1" class="img-fluid">
                    </div>
                    <div class="item-info">
                        <h3>El jardín orgánico</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <div class="single-item third title-top-left plus-bottom-right rdk-grape">
                <a href="#" class="cta-link">
                    <div class="img-wrapper">
                        <img src="../public/images/destacados/violet.png" alt="Huerta 1" class="img-fluid">
                    </div>
                    <div class="item-info">
                        <h3>La orgánica</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <div class="single-item third title-bottom-left plus-top-right rdk-pepper">
                <a href="#" class="cta-link">
                    <div class="img-wrapper">
                        <img src="../public/images/destacados/green.png" alt="Huerta 1" class="img-fluid">
                    </div>
                    <div class="item-info">
                        <h3>El brote urbano</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <div class="single-item third title-top-right plus-bottom-left rdk-tomato">
                <a href="#" class="cta-link">
                    <div class="img-wrapper">
                        <img src="../public/images/destacados/red-2.png" alt="Huerta 1" class="img-fluid">
                    </div>
                    <div class="item-info">
                        <h3>Ital</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    
                    <i class="fas fa-plus"></i>
                </a>
            </div>  --}}
        </div>

        <div class="text-center btn-load">
            <a href="{{ url('/huertas') }}" class="btn btn-medium btn-primary">Ver más</a>
        </div>
    </div>
</div>      

<section class="why-radiko d-flex align-items-center">
    <div class="container text-center">
        <div class="title">
            <h2>Unite a Radiko y sumate a una vida más sana</h2>
        </div>
        <a href="{{ route('registro') }}" class="btn-secondary btn btn-medium"> Registrate </a>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="block-feature row">
            <div class="col-lg-4">    
                <div class="destacado">
                    <div class="img-wrapper">
                        <img src="{{ url('storage/images/feature-1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="text-block">
                        <h2>Tengo una huerta</h2>
                        <p>
                            ¿Tenés una huerta y querés vender tus productos a través de Rádiko?
                            <br>
                            Escribinos y te explicamos que necesitás. ¡Es súper simple!
                        </p>
                        <a class="btn-secondary btn btn-small" href="#">Contactate</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">    
                <div class="destacado">
                    <div class="img-wrapper">
                        <img src="{{ url('storage/images/feature-2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="text-block">
                        <h2>Tengo un restaurante</h2>
                        <p>
                            Si tenés un restaurante y querés comprar productos por mayor para tu cocina escribinos y te ponemos en contacto con una huerta.
                        </p>
                        <a class="btn-secondary btn btn-small" href="#">Contactate</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">    
                <div class="destacado">
                    <div class="img-wrapper">
                        <img src="{{ url('storage/images/feature-3.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="text-block">
                        <h2>Tené tu huerta</h2>
                        <p>
                            Si querés empezar a armar tu huerta pero no sabés como, ponete en contacto con nosotros que te vamos a ayudar en todo lo que necesites.
                        </p>
                        <a class="btn-secondary btn btn-small" href="#">Contactate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="download-app">
    <div class="container relative">
        <div class="row">
            <div class="col-md-7 text-center">
                <h2>Descargá la app</h2>
                <p>Descargate la aplicación  de Rádiko y hacé tu pedido dónde y cuándo quieras.</p>
                <div class="download-btn">
                    <ul class="no-bullets">
                        <li>
                            <a href="#">
                                <img src="{{ url('storage/images/app-store-btn.png') }}" alt="Download in App Store" class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ url('storage/images/google-play-btn.png') }}" alt="Download in Google Play" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection