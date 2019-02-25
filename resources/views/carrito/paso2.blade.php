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

                            @if(Session::has('status'))
                            @component('components.alert', ['tipo' => Session::get('class')])
                            {!! Session::get('status') !!}
                            @endcomponent
                            @endif

                            <!-- Listado de direcciones -->
                            @foreach ($direcciones as $direccion)
                            <div class="card address">
                                <div class="d-flex">
                                    <div class="card-info w-100 no-border">
                                        <h3>{{$direccion->referencia}}</h3>

                                        <ul class="simple-list">
                                            <li>
                                                <span>{{$direccion->calle}} {{$direccion->numero}} {{$direccion->piso}} {{$direccion->departamento}}</span>
                                            </li>
                                            <li>
                                                <span>{{$direccion->telefono}}</span>
                                            </li>
                                            <li>
                                                <span>{{$direccion->aclaracion}}</span>
                                            </li>
                                        </ul>
                                        <button class="btn-terciary btn btn-small"> Usar </button>
                                    </div>                              
                                </div>
                            </div>
                            @endforeach

                            <div class="add-address">
                                <h2>Agregar otra dirección</h2>

                                <div class="form form-bg">

                                    <form method="POST" action="{{ route('carrito.direcciones.store') }}">
                                        @csrf
                                        <div class="row-form">
                                            <label>Nombre / Referencia</label>
                                            <input type="text" name="referencia" value="{{ old('referencia') }}">
                                            @if($errors->has('referencia'))
                                            <small class="text-danger">{{ $errors->first('referencia') }}</small>
                                            @endif
                                        </div>
                                        <div class="row-form split d-flex justify-content-between">
                                            <div class="lg-input">
                                                <label>Calle</label>
                                                <input type="text" name="calle" value="{{ old('calle') }}" placeholder="">
                                                @if($errors->has('calle'))
                                                <small class="text-danger">{{ $errors->first('calle') }}</small>
                                                @endif
                                            </div>
                                            <div class="sm-input">
                                                <label>Número</label>
                                                <input type="text" name="numero" value="{{ old('numero') }}" placeholder="">
                                                @if($errors->has('numero'))
                                                <small class="text-danger">{{ $errors->first('numero') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row-form">
                                            <label>Piso <span>(opcional)</span></label>
                                            <input type="text" name="piso" value="{{ old('piso') }}" placeholder="">
                                        </div>
                                        <div class="row-form">
                                            <label>Departamento <span>(opcional)</span></label>
                                            <input type="text" name="departamento" value="{{ old('departamento') }}" placeholder="">
                                        </div>
                                        <div class="row-form">
                                            <label>Teléfono</label>
                                            <input type="tel" name="telefono" value="{{ old('telefono') }}" value="{{ old('numero') }}" placeholder="(011) 5555-5555">
                                            @if($errors->has('telefono'))
                                            <small class="text-danger">{{ $errors->first('telefono') }}</small>
                                            @endif
                                        </div>
                                        <div class="row-form">
                                            <label>Aclaraciones <span>(opcional)</span></label>
                                            <textarea name="aclaracion" rows="15" cols="15"  placeholder="¿Querés decirnos algo en particular sobre esta dirección?">{{ old('aclaracion') }}</textarea>
                                            @if($errors->has('aclaracion'))
                                            <small class="text-danger">{{ $errors->first('aclaracion') }}</small>
                                            @endif
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
                                    <a class="link" href="{{ url()->previous() }}">
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