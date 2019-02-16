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
                <li class="nav-item disabledTab">
                  <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Revisar Pedido</a>
                </li>
                <li class="nav-item disabledTab">
                  <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Dirección</a>
                </li>
                <li class="nav-item disabledTab">
                  <a class="nav-link" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="true">Horario</a>
                </li>
                <li class="nav-item disabledTab">
                  <a class="nav-link active" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Pago</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <section class="checkout-step last-step">
        <div class="container">
          <div class="tab-content m-5">       

            <div class="row justify-content-between">
              <div class="col-md-6">
                <div class="title text-left">
                  <h2>Dirección</h2>
                </div>

                <div class="grey-box no-bg">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="bold">Casa</h3>
                      <ul class="m-0">
                        <li>Salguero 900</li>
                        <li>Almagro</li>
                        <li>(011) 11 5533 6665</li>
                      </ul>
                    </div>
                  </div>
                </div>
                
                <div class="title text-left">
                  <h2>Entrega</h2>
                </div>

                <div class="grey-box no-bg">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="m-0">
                        <li>Lunes 23 de Julio</li>
                        <li>12hs - 14hs</li>
                      </ul>
                    </div>
                  </div>
                </div>


                <div class="title text-left">
                  <h2>Medio de pago</h2>
                </div>

                <div class="grey-box no-bg">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="m-0">
                        <li>
                          <label class="radio d-flex align-items-center">
                            <input type="radio" value="0" name="pago">
                            <span></span>
                            <span>Efectivo en la entrega</span>
                          </label>
                        </li>
                        <li>
                          <label class="radio d-flex align-items-center">
                            <input type="radio" value="1" name="pago">
                            <span></span>
                            <span>Tarjeta de débito, crédito o efectivo a través de <span class="bold">Mercado Pago</span></span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

                      <div class="col-md-5">
          <div class="grey-box">
            <div class="title text-left small">
              <h2>Tu carrito</h2>
            </div>

            <ul>
              <?php foreach(Cart::content() as $row) :?>
              <li class="d-flex justify-content-between align-items-center">
                <span>2 kg.</span>
                <span><?php echo $row->name; ?></span>
                <span class="price-black">$80</span>
              </li>
              <?php endforeach;?>
            </ul>

            <ul>                    
              <li class="bold d-flex justify-content-between align-items-center">
                <span>Subtotal:</span>
                <span class="price-black bold">$<?php echo Cart::subtotal(); ?></span>
              </li>
              <li class="bold d-flex justify-content-between align-items-center">
                <span>Costo de envío:</span>
                <span class="price-black bold">$130</span>
              </li>
            </ul>

            <div class="total text-right">
              <div class="title d-flex align-items-center justify-content-end m-0">
                <h2 class="uppercase">Total</h2>
                <div class="price">$<?php 

  $costodeenvio = 130;
  echo str_replace(",","",Cart::total()) + $costodeenvio;

   ?></div>
              </div>
            </div>

            <div class="continue">
              <div class="d-flex justify-content-between align-items-center">
                <a class="back btn btn-link" href="confirmacion-paso-3.html">
                  <i class="fas fa-chevron-left"></i>
                  Volver
                </a>
                <div class="text-right">
                  <a href='{{url("carrito/confirmacion")}}' class="btn btn-terciary">Finalizar</a>                 
                </div>
              </div>
            </div>
          </div>
        </div>        
      </section>


<!--esto no va pero lo dejo aca para no perderlo -->

@endsection