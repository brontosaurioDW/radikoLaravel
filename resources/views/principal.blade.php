@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('header-class', 'is-home')

@section ('content')

<section class="hero search">
  <div class="container">
    <div class="form">
      <h2>
        <span class="sr-only">Bienvenidos a Rádiko</span>
      </h2>
      <form action="resultado-de-busqueda.html" id="form-index">
        <div class="row-search form-row justify-content-center relative">
          <input type="text" name="search" placeholder="¿Qué estás buscando?">
          <a href="resultado-de-busqueda.html" class="btn-search">
            <span class="sr-only">Search 2</span>
            <i class="fas fa-search"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="categories">

  <div class="container">
    <div class="title">
      <h2>Ver todas las huertas que ofrecen:</h2>
    </div>

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




<section class="grid-masonry">
  <div class="container">
    <div class="title">
      <h2>Huertas destacadas asd</h2>
    </div>


    <div class="grid flex-wrap">

      @foreach ($huertas as $huerta)

      @switch($loop->index)
      @case(0)
      <?php $class="half title-top-left plus-bottom-right red"; ?>
      @break

      @case(1)
      <?php $class="half title-bottom-right plus-top-left orange"; ?>
      @break

      @case(2)
      <?php $class="third title-top-left plus-bottom-right violet"; ?>
      @break

      @case(3)
      <?php $class="third title-center-bottom plus-top-right green"; ?>
      @break

      @case(4)
      <?php $class="third title-bottom-right plus-top-left red"; ?>
      @break
      @endswitch     

      <div class="single-item <?php echo $class ?>">
        <a href="{{ url('/huertas/1') }}" class="cta-link">
          <img src="{{ url('storage/images/red-1.png') }}" alt="Huerta 1">
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

    </div>

    <div class="text-center btn-load">
      <a href="{{ url('/huertas') }}" class="btn btn-medium btn-primary">Ver todas</a>
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
        <a href="{{ url('/huertas/1') }}" class="cta-link">
          <img src="{{ url('storage/images/red-1.png') }}" alt="Huerta 1">
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
        <a href="{{ url('/huertas/1') }}" class="cta-link">
          <img src="{{ url('storage/images/orange.png') }}" alt="Huerta 1">
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
        <a href="{{ url('/huertas/1') }}" class="cta-link block">
          <img src="{{ url('storage/images/violet.png') }}" alt="Huerta 1">
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
        <a href="{{ url('/huertas/1') }}" class="cta-link">
          <img src="{{ url('storage/images/green.png') }}" alt="Huerta 1">
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
        <a href="{{ url('/huertas/1') }}" class="cta-link">
          <img src="{{ url('storage/images/red-2.png') }}" alt="Huerta 1">
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
      <a href="{{ url('/huertas') }}" class="btn btn-medium btn-primary">Ver todas</a>
    </div>
  </div>
</section>

<section class="why-radiko">
  <div class="title">
    <h2>¿Por qué Rádiko?</h2>
  </div>

  <div class="container">
    <ul class="simple-feature text-center row">
      <li class="col-md-4">
        <img src="{{ url('storage/images/icons/heart.png') }}" alt="Sano">
        <h3>Sano</h3>
        <p>
          Comer bien ahora es mucho más facil. Elegí entre cientos de productos orgánicos y empezá a sentirte mejor.
        </p>
      </li>
      <li class="col-md-4">
        <img src="{{ url('storage/images/icons/flash.png') }}" alt="Fácil y rápido">
        <h3>Fácil y rápido</h3>
        <p>
          Con tan sólo algunos clicks vas a poder armar tu pedido y programar los envíos.
        </p>
      </li>
      <li class="col-md-4">
        <img src="{{ url('storage/images/icons/plane.png') }}" alt="Cómodo">
        <h3>Cómodo</h3>
        <p>
          Recibilo en la puerta de tu casa y realizá el pago de la forma que te sea más cómoda.
        </p>
      </li>
    </ul>
  </div>
</section>

<section class="features">

  <div class="container">
    <div class="block-feature row">
      <div class="col-md-4">
        <img src="{{ url('storage/images/feature-1.png') }}" class="img-fluid" alt="">
        <div class="text-block">
          <h2>Tengo una huerta</h2>
          <p>
            ¿Tenés una huerta y querés vender tus productos a través de Rádiko?
            <br>
            Escribinos y te explicamos que necesitás. ¡Es súper simple!
          </p>
          <a class="btn btn-xsmall btn-secondary" href="#">Contactate</a>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ url('storage/images/feature-2.png') }}" class="img-fluid" alt="">
        <div class="text-block">
          <h2>Tengo un restaurante</h2>
          <p>
            Si tenés un restaurante y querés comprar productos por mayor para tu cocina escribinos y te ponemos en contacto con una huerta.
          </p>
          <a class="btn btn-xsmall btn-secondary" href="#">Contactate</a>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ url('storage/images/feature-3.png') }}" class="img-fluid" alt="">
        <div class="text-block">
          <h2>Tené tu huerta</h2>
          <p>
            Si querés empezar a armar tu huerta pero no sabés como, ponete en contacto con nosotros que te vamos a ayudar en todo lo que necesites.
          </p>
          <a class="btn btn-xsmall btn-secondary" href="#">Contactate</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="download-app">
  <div class="container relative">
    <div class="row">
      <div class="col-md-6">
        <h2>Descargá la app de Rádiko</h2>
        <p>Descargate la aplicación  de Rádiko y hacé tu pedido dónde y cuándo quieras.</p>
        <div class="download-btn">
          <ul>
            <li>
              <a href="#">
                <img src="{{ url('storage/images/google-play-btn.png') }}" alt="Download in Google Play" class="img-fluid">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ url('storage/images/app-store-btn.png') }}" alt="Download in App Store" class="img-fluid">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection