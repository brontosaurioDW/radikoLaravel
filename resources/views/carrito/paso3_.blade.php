@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('content')
    <div class="main-wrapper relative cart">
        @if (count(Cart::content()) != 0)
            <div class="container-fluid">
                <div class="header-huerta rdk-charcoal d-flex justify-content-end" >
                    <div class="diagonal bg-trama">
                        <h2 class="huerta-title">
                            <span class="d-block">Tu compra con</span>
                            Jardín Orgánico
                        </h2>
                    </div>
                </div>
            </div>

            <section class="checkout-step">
                <div class="container">

                    <!-- TABS -->
                    <div class="tabs-outline">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Revisar Pedido</a>
                            </li> 
                             <li class="nav-item">
                                <a class="nav-link" href="#">Dirección</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link active" href="#">Horario</a>
                            </li> --}}
                            {{--  <li class="nav-item disabledTab">
                                <a class="nav-link" href="#">Pago</a>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="tab-content">

                        <div class="row">
                            <div class="col-md-7">

                                <div class="dias">
                                    <h2>Días y horarios disponibles</h2>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card select-time">
                                                <div class="card-info w-100 no-border">
                                                    <h3>Viernes 20 de Julio</h3>

                                                    <ul class="d-flex flex-wrap times">
                                                        <li>
                                                            <a href="#" class="js-time">08hs - 10hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">10hs - 12hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">12hs - 14hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">14hs - 16hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">16hs - 18hs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card select-time">
                                                <div class="card-info w-100 no-border">
                                                    <h3>Viernes 20 de Julio</h3>

                                                    <ul class="d-flex flex-wrap times">
                                                        <li>
                                                            <a href="#" class="js-time">08hs - 10hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">10hs - 12hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">12hs - 14hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">14hs - 16hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">16hs - 18hs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="card select-time">
                                                <div class="card-info w-100 no-border">
                                                    <h3>Viernes 20 de Julio</h3>

                                                    <ul class="d-flex flex-wrap times">
                                                        <li>
                                                            <a href="#" class="js-time">08hs - 10hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">10hs - 12hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">12hs - 14hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">14hs - 16hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">16hs - 18hs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card select-time">
                                                <div class="card-info w-100 no-border">
                                                    <h3>Viernes 20 de Julio</h3>

                                                    <ul class="d-flex flex-wrap times">
                                                        <li>
                                                            <a href="#" class="js-time">08hs - 10hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">10hs - 12hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">12hs - 14hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time">14hs - 16hs</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="js-time disabled">16hs - 18hs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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
                                        <a class="link" href="{{url("carrito?vaciar=1")}}">
                                            <i class="fas fa-chevron-left"></i>
                                            <span>Volver a tus direcciones</span>
                                        </a>

                                        <a href="{{url("carrito/paso4")}}" class="btn btn-medium btn-primary">Continuar</a>
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