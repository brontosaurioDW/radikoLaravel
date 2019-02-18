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

                            @if(Session::has('huerta')) 
                                <?php echo Session::get('huerta') ?>
                            @endif
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
                                <a class="nav-link active" href="#">Dirección</a>
                            </li>
                            {{-- <li class="nav-item disabledTab">
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
                                <h2>Direcciones guardadas</h2>
                                
                                <!-- Listado de direcciones -->
                                <div class="card address">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">
                                            <h3>CASA</h3>
                                            
                                            <ul class="simple-list">
                                                <li>Cabrera 3956 - 4B</li>
                                                <li>Palermo</li>
                                                <li>(011) 25349897</li>
                                            </ul>
                                        </div>                              
                                    </div>
                                </div>

                                <div class="card address">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">
                                            <h3>LA CASA DE PEDRO</h3>
                                            
                                            <ul class="simple-list">
                                                <li>Nogoyá 2566</li>
                                                <li>Villa del Parque</li>
                                                <li>(011) 5 123 4567</li>
                                            </ul>
                                        </div>                              
                                    </div>

                                    <button class="btn-terciary btn btn-small"> Usar </button>
                                </div>
                                <!-- -->

                                <div class="add-address">
                                    <h2>Agregar otra dirección</h2>

                                    <div class="form form-bg">
                                        <form method="" action="">
                                            <div class="row-form">
                                                <label>Nombre / Referencia</label>
                                                <input type="text" name="nombre-referencia" value="" placeholder="">
                                            </div>
                                            <div class="row-form split d-flex justify-content-between">
                                                <div class="lg-input">
                                                    <label>Calle</label>
                                                    <input type="text" name="calle" value="" placeholder="">
                                                </div>
                                                <div class="sm-input">
                                                    <label>Número</label>
                                                    <input type="text" name="numero-direccion" value="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row-form">
                                                <label>Piso + Departamento <span>(opcional)</span></label>
                                                <input type="text" name="piso-dpto" value="" placeholder="">
                                            </div>
                                            <div class="row-form split d-flex justify-content-between">
                                                <div class="sm-input">
                                                    <label>Teléfono</label>
                                                    <input type="text" name="cod-area" value="" placeholder="">
                                                </div>
                                                <div class="lg-input">
                                                    <label></label>
                                                    <input type="text" name="telefono" value="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row-form">
                                                <label>Aclaraciones <span>(opcional)</span></label>
                                                <textarea name="aclaraciones" rows="15" cols="15" placeholder="¿Querés decirnos algo en particular sobre esta dirección?"></textarea>
                                            </div>
                                            <div class="row-form">
                                                <label class="checkbox">
                                                    Usar esta dirección
                                                    <input type="checkbox" name="usar-direccion-1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="row-form submit">
                                                <button class="btn-primary btn btn-medium"> Agregar </button>
                                            </div>
                                        </form>
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
                                            <span>Volver a revisar el pedido</span>
                                        </a>

                                        <a href="{{url("carrito/paso3")}}" class="btn btn-medium btn-primary">Continuar</a>
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