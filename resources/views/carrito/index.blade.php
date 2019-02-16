@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('content')

<section class="huerta-title-wrapper">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div>
        <span>Tu compra con:</span>
        <h2 class="huerta-title ">Tallo Verde</h2>
      </div>
    </div>
  </div>
</section>
<div class="huerta-nav">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="true">Revisar Pedido</a>
          </li>
          <li class="nav-item disabledTab">
            <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Dirección</a>
          </li>
          <li class="nav-item disabledTab">
            <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Horario</a>
          </li>
          <li class="nav-item disabledTab">
            <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Pago</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<section class="checkout-step">
  <div class="container">
    <div class="tab-content m-5">
      <div class="title text-left">
        <h2>Estos son los próductos en tu carrito</h2>
      </div>

      <ul class="product-list">
        <?php foreach(Cart::content() as $row) :?>
        <li>
          <div class="row align-items-center">
            <div class="col-md-2">
              <img src="/images/productos/<?php echo $row->options->foto; ?>" alt="Tomates" class="img-fluid">
            </div>
            <div class="col-md-3">
              <div class="title text-left small">
                <h3><?php echo $row->name; ?></h3>
              </div>
            </div>

            <div class="col-md-3">
              <form method="GET" action="{{route('carrito.updetear')}}">
                <input type="hidden" name="product_id" value="{{$row->id}}">
                <a class="cart_quantity_down" href='{{url("carrito?product_id=$row->id&decrease=1")}}'> - </a>
                <input class="cart_quantity_input" type="text" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">
                <a class="cart_quantity_up" href='{{url("carrito?product_id=$row->id&increment=1")}}'> + </a>
                <span><?php echo $row->options->unidad; ?></span>
                <button type="submit">UPDETEAR</button>
              </form>
            </div>

            <div class="col-md-2 price text-center">
              <span>$<?php echo $row->price; ?></span>
              <span>$<?php echo $row->total; ?></span>
            </div>

            <div class="col-md-2 text-center">
              <a href='{{url("carrito?product_id=$row->id&borrar=1")}}'> Borrar </a>
            </div>

          </div>
        </li>
        <?php endforeach;?>
      </ul>


      <div class="d-flex justify-content-end">
        <div class="total">
          <div class="title d-flex align-items-center">
            <h2>Subtotal:</h2>
            <div class="price">$<?php echo Cart::subtotal(); ?></div>
          </div>
        </div>
      </div>

      <div class="continue">
        <div class="d-flex justify-content-between align-items-center">
          <a class="back btn btn-link" href="resultado-de-busqueda.html">
            <i class="fas fa-chevron-left"></i>
            Volver
          </a>
          <div class="text-right">
            <a href='{{url("carrito?vaciar=1")}}' class="js-vaciar-chango"> Vaciar chango</a>
            <a href='{{url("carrito/paso2")}}' class="btn btn-primary">Siguiente</a>                  
          </div>
        </div>
      </div>
    </div>
  </div>        
</section>
@endsection
