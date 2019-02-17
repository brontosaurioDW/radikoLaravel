@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('content')
    <section class="huerta-title-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div>
                    <h2 class="huerta-title">¡Compra realizada con éxito!</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout-step last-step">
        <div class="container">
            <div class="tab-content m-5">
                <p class="ok">
                    ¡Listo! Ya recibimos tu pedido y le avisamos a la huerta. Sólo queda relajarse y esperar el pedido.
                    Acá vas a encontrar la información de tu compra, pero no te preocupes que también te la mandamos por mail.
                    Por cualquier duda que tengas podés chatear directamente con la huerta haciendo click en <span class="bold">contactar</span>.
                </p>
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="grey-box">
                            <div class="title text-left">
                                <h2>Orden</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="m-0">
                                        <li class=" d-flex justify-content-between align-items-center">
                                            <span>Pedido número:</span>
                                            <span class="price-black bold">487</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="grey-box">
                            <div class="title text-left small">
                                <h2>Pedido</h2>
                            </div>
                            <ul>
                                // @TO DO: aca la info ya no se levanta del carrito si no del pedido en la base!!!
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>2 kg.  Tomate</span>
                                    <span class="price-black">$80</span>
                                </li>
                            </ul>
                            <ul>
                                <li class="bold d-flex justify-content-between align-items-center">
                                    <span>Subtotal:</span>
                                    <span class="price-black bold">$80</span>
                                </li>
                                <li class="bold d-flex justify-content-between align-items-center">
                                    <span>Costo de envío:</span>
                                    <span class="price-black bold">$50</span>
                                </li>
                            </ul>
                        </div>
                        <div class="grey-box">
                            <div class="total m-0">
                                <div class="title d-flex align-items-center justify-content-between m-0">
                                    <h2 class="uppercase">Total</h2>
                                    <div class="price">$130</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="grey-box">
                            <div class="title text-left">
                                <h2>Huerta</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="bold">Tallo Verde</h3>
                                    <ul class="m-0">
                                        <li>Ruta 192 Km. 8 - Open Door - Luján</li>
                                        <li>0-800-88-TALLO (82556)</li>
                                        <li>huerta@talloverde.com</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-small btn-primary">Contactar</a>
                        </div>
                        <div class="grey-box">
                            <div class="title text-left small">
                                <h2>Entrega</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul>
                                        <li>Lunes 23 de Julio</li>
                                        <li>12hs - 14hs</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-small btn-primary">Cambiar</a>
                        </div>
                        <div class="grey-box">
                            <div class="title text-left">
                                <h2>Dirección</h2>
                            </div>
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
                            <a href="#" class="btn btn-small btn-primary">Cambiar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection