@extends ('layouts.master')

@section ('title', 'Radiko')

@if (count(Cart::content()) != 0)
    @section ('bodyClass', 'transparent')
    @section ('header-class', 'is-home')
@endif

@section ('content')
    <div class="main-wrapper relative cart">
        @if (count(Cart::content()) != 0)

            <div class="container-fluid">
                <div class="header-huerta bg-trama-b rdk-grape">
                    <div class="diagonal">
                        <h2 class="huerta-title ">
                            <span class="d-block">Tu compra con</span>
                            <span id="nombreHuertaActual"></span>
                        </h2>
                    </div>
                </div>
            </div>  

            <meta name="csrf-token" content="{{ csrf_token() }}">

            <section class="checkout-step">
                <div class="container">

                    <!-- TABS -->
                    <div class="tabs-outline">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url("carrito")}}">Revisar Pedido</a>
                            </li> 
                             <li class="nav-item">
                                <a class="nav-link" href="{{url("carrito/paso2")}}">Dirección</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link " href="#">Horario</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Pago</a>
                            </li> 
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-7">

                                <div class="title text-left">
                                    <h2>Medio de pago</h2>
                                </div>

                               <div class="card payment">
                                    <div class="card-info w-100 no-border">
                                        <ul class="m-0">
                                            <li>
                                                <label class="radio d-flex align-items-center">
                                                    <input type="radio" value="0" name="pago" checked>
                                                    <span></span>
                                                    <span>Efectivo en la entrega</span>
                                                </label>
                                            </li>
                                            {{-- <li>
                                                <label class="radio d-flex align-items-center">
                                                    <input type="radio" value="1" name="pago">
                                                    <span></span>
                                                    <span>Tarjeta de débito, crédito o efectivo a través de 
                                                        <span class="bold">Mercado Pago</span>
                                                    </span>
                                                </label>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <h2>Tu canasta</h2>

                                <div class="card listado">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">   
                                            <ul class="simple-list">
                                                <?php foreach(Cart::content() as $row) :?>                                            
                                                    <li class="d-flex justify-content-between">
                                                        <span>{{$row->qty}} <?php echo $row->options->unidad; ?>.  <?php echo $row->name; ?> </span>
                                                        <span class="semi-bold">$<?php echo $row->total; ?></span>
                                                    </li>
                                                <?php endforeach;?>
                                            </ul>

                                            <div class="sub-total bold d-flex justify-content-between">
                                                <span>Subtotal:</span>
                                                <span>$<?php echo Cart::subtotal(); ?></span>
                                            </div>
                                        </div>                              
                                    </div>
                                </div>

                                <div class="continue">

                                    <div class="d-flex justify-content-between align-items-center">         
                                        <a class="link" href="{{ url()->previous() }}">
                                            <i class="fas fa-chevron-left"></i>
                                            <span>Cambiar dirección</span>
                                        </a>

                                        <a href="{{url("carrito/confirmacion")}}" class="btn btn-medium btn-primary js-confirmar-compra">Finalizar compra</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        @else
            <div class="container">
                <div class="empty-cart">
                    <h2 class="sr-only">No tenés productos</h2>
                    <img src="../images/empty-cart.svg" alt="No hay productos agregados">
                </div>
            </div>
        @endif        
    </div>
@endsection