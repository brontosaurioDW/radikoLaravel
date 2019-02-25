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

            <section class="checkout-step">
                <div class="container">

                    <!-- TABS -->
                    <div class="tabs-outline">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Revisar Pedido</a>
                            </li>
                            {{-- <li class="nav-item disabledTab">
                                <a class="nav-link" href="#">Dirección</a>
                            </li>
                            <li class="nav-item disabledTab">
                                <a class="nav-link" href="#">Horario</a>
                            </li>
                            <li class="nav-item disabledTab">
                                <a class="nav-link" href="#">Pago</a>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>Productos</h2>

                                <ul class="m-0 p-0">
                                    <?php foreach(Cart::content() as $row) :?>
                                        <li class="card">

                                            <div class="d-flex">
                                                <div class="img-wrapper">
                                                    <img src="/images/productos/<?php echo $row->options->foto; ?>" alt="Tomates" class="img-fluid">
                                                </div>

                                                <div class="card-info dark-border">
                                                    <h3> <?php echo $row->name; ?> </h3>

                                                    <span class="precio d-block">
                                                        <span class="bold"> $ <?php echo $row->price; ?> </span>
                                                        x <?php echo $row->options->unidad; ?>
                                                    </span>
                                                    
                                                    <form method="GET" action="{{route('carrito.updetear')}}" class="more-info form-bg form p-0">
                                                        <input type="hidden" name="product_id" value="{{$row->id}}">

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="qnt d-flex align-items-center">                                                        
                                                                <a class="cart_quantity_down link" href='{{url("carrito?product_id=$row->id&decrease=1")}}'> - </a>                                                        
                                                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">

                                                                <a class="cart_quantity_up link" href='{{url("carrito?product_id=$row->id&increment=1")}}'> + </a>

                                                                <button type="submit" class="relative update">
                                                                    <i class="fas fa-sync-alt"></i>
                                                                </button>
                                                            </div>

                                                            <span class="bold">
                                                                $ <?php echo $row->total; ?>
                                                            </span>                                                       
                                                        </div>


                                                        <!-- <span> <?php echo $row->options->unidad; ?>  </span> -->
                                                    </form>

                                                    <a href="{{url("carrito?product_id=$row->id&borrar=1")}}" onclick="return ConfirmarBorrado();" class="remove rdk-tomato text">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach;?>
                                </ul>

                                <a href="{{ url()->previous() }}" class="link">
                                    <i class="fas fa-chevron-left"></i>
                                    <span>Seguir comprando</span>
                                </a>

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
                                        <a class="link js-vaciar-carrito" href="{{url("carrito?vaciar=1")}}" onclick="return ConfirmarBorrado();">Vaciar canasta</a>
                                        
                                        @if( Auth::check() AND Auth::user()->tipo == 'cliente' )                                           
                                            <a href="{{url("carrito/paso2")}}" class="btn btn-medium btn-primary">Continuar</a>
                                        @else
                                            <div class="not-logged-in">
                                                <a href="{{ url('/login') }}" class="link">Iniciá sesión</a>
                                                <span> o </span> 
                                                <a href="{{ url('/registro') }}" class="link">Registrate</a>
                                            </div>
                                        @endif
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
                    <img src="images/empty-cart.svg" alt="No hay productos agregados">
                </div>
            </div>
        @endif        
    </div>

@endsection