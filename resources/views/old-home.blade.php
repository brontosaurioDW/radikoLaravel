<!DOCTYPE html>
<html lang="es">
<head>
    <title>Radiko</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="dist/css/main.css">
     
</head>
<body>
<header class="is-home">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <h1><a class="navbar-brand" href="index.html">Rádiko</a></h1>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#radiko-navbar" aria-controls="radiko-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="radiko-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Huertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Mi cuenta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="tooltip" data-placement="right" title="Tooltip on top">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="hero search">
        <div class="container">
            <div class="form">
                <h2>
                    <span class="sr-only">Bienvenidos a Rádiko</span>
                </h2>
                <form>
                    <div class="row-search form-row justify-content-center relative">
                        <input type="text" name="search" placeholder="¿Qué estás buscando?">
                        <a href="resultado-de-busqueda.html" class="btn-search">
                            <span class="sr-only">Search</span>
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="grid-masonry">
        <div class="container">
            <div class="title">
                <h2>Huertas destacadas</h2>
            </div>
            <div class="grid flex-wrap">
                <div class="single-item half title-top-left plus-bottom-right red">
                    <a href="detalle-huerta.html" class="cta-link">
                        <img src="dist/images/red-1.png" alt="Huerta 1">
                        <div class="item-info">
                            <h3>Tallo Verde</h3>
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
                <div class="single-item half title-bottom-right plus-top-left orange">
                    <a href="detalle-huerta.html" class="cta-link">
                        <img src="dist/images/orange.png" alt="Huerta 1">
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
                <div class="single-item third title-top-left plus-bottom-right violet">
                    <a href="detalle-huerta.html" class="cta-link block">
                        <img src="dist/images/violet.png" alt="Huerta 1">
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
                <div class="single-item third title-center-bottom plus-top-right green">
                    <a href="detalle-huerta.html" class="cta-link">
                        <img src="dist/images/green.png" alt="Huerta 1">
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
                <div class="single-item third title-bottom-right plus-top-left red">
                    <a href="detalle-huerta.html" class="cta-link">
                        <img src="dist/images/red-2.png" alt="Huerta 1">
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
                </div>
            </div>
            <div class="text-center btn-load">
                <a href="resultado-de-busqueda.html" class="btn btn-medium btn-primary">Ver todas</a>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="logo-foo"> Rádiko </a>
                <p> Tu nuevo super </p>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>
                        <a href="#">Preguntas frecuentes</a>
                    </li>
                    <li>
                        <a href="#">Legales</a>
                    </li>
                    <li>
                        <a href="#">Términos y condiciones</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                    <li>
                        <a href="#">Tengo una huerta</a>
                    </li>
                    <li>
                        <a href="#">Otro link</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="download-btn">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="dist/images/google-play-btn.png" alt="Download in Google Play" class="img-fluid">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="dist/images/app-store-btn.png" alt="Download in App Store" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="dist/js/vendor.js"></script>
<script src="dist/js/main.js"></script>
</body>
</html>