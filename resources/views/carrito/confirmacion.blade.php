@extends ('layouts.master')

@section ('title', 'Confirmación del pedido')

@if (count(Cart::content()) != 0)
    @section ('bodyClass', 'transparent')
    @section ('header-class', 'is-home')
@endif

@section ('content')
    <div class="main-wrapper relative cart">
    {{-- @if (count(Cart::content()) != 0) --}}
            <div class="container-fluid">
                <div class="header-huerta bg-trama-b rdk-grape">
                    <div class="diagonal">
                        <h2 class="huerta-title ">
                            <span class="d-block">
                                Nombre Huerta
                            </span>  
                            <span>¡Compra realizada con éxito!</span>
                        </h2>
                    </div>
                </div>
            </div>  

            <section class="checkout-step last-step">
                <div class="container">
                    <div class="tab-content m-5">
                        <p class="ok text-center">
                            ¡Listo! Ya recibimos tu pedido y le avisamos a la huerta. Sólo queda que coordines el envío con ellos.
                            Acá vas a encontrar la información de tu compra, pero no te preocupes que también te la mandamos por mail.
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">     
                                            <div class="d-flex align-items-center justify-content-between m-0">
                                                <span>Total</span>
                                                <span class="price-black bold">487</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card listado">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">                                 
                                            <ul class="simple-list">
                                                <li class="d-flex justify-content-between">
                                                    <span>4 kg.  Tomate - Perita</span>
                                                    <span class="semi-bold">$160</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span>1 kg.  Lechuga - Criolla</span>
                                                    <span class="semi-bold">$40</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span>2 kg.  Morrón - Rojo</span>
                                                    <span class="semi-bold">$90</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span>10 kg.  Naranja - Jugo</span>
                                                    <span class="semi-bold">$500</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span>2 kg.  Morrón - Rojo</span>
                                                    <span class="semi-bold">$40</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span>1 kg.  Lechuga - Criolla</span>
                                                    <span class="semi-bold">$500</span>
                                                </li>
                                            </ul>

                                            <div class="sub-total bold d-flex justify-content-between">
                                                <span>Subtotal:</span>
                                                <span>$790</span>
                                            </div>
                                        </div>                              
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">      
                                            <div class="d-flex align-items-center justify-content-between m-0">
                                                <h2 class="uppercase">Total</h2>
                                                <div class="price">$130</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">  
                                            <h2>Tallo Verde</h2>
                                            <ul class="m-0">
                                                <li>Ruta 192 Km. 8 - Open Door - Luján</li>
                                                <li>0-800-88-TALLO (82556)</li>
                                                <li>huerta@talloverde.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="d-flex">
                                        <div class="card-info w-100 no-border">  
                                            <h2>Casa</h2>
                                            <ul class="m-0">
                                                <li>Salguero 900</li>
                                                <li>Almagro</li>
                                                <li>(011) 11 5533 6665</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
       {{--  @else
            <div class="container">
                <div class="empty-cart">
                    <h2 class="sr-only">No tenés productos</h2>
                    <img src="../images/empty-cart.svg" alt="No hay productos agregados">
                </div>
            </div>
        @endif   --}}
    </div>
@endsection