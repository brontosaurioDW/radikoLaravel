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
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="true">Horario</a>
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
              <h2>Dirección</h2>
            </div>

            <div class="row justify-content-between">
              <div class="col-md-7">
                <div class="grey-box">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="bold">Casa</h3>
                      <ul>
                        <li>Salguero 900</li>
                        <li>Almagro</li>
                        <li>(011) 11 5533 6665</li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <a href="confirmacion-paso-2.html" class="btn btn-terciary btn-small w-100">Cambiar</a>   
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="title text-left dias">
              <h2>Días y horarios disponibles</h2>

              <div class="row">
                <div class="col-md-6">
                  <div class="grey-box">
                    <div class="title text-left x-small">
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

                  <div class="grey-box">
                    <div class="title text-left x-small">
                      <h3>Viernes 21 de Julio</h3>

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
                          <a href="#" class="js-time">16hs - 18hs</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  

                  <div class="grey-box">
                    <div class="title text-left x-small">
                      <h3>Viernes 22 de Julio</h3>

                      <ul class="d-flex flex-wrap times">
                        <li>
                          <a href="#" class="js-time disabled">08hs - 10hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time disabled">10hs - 12hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time disabled">12hs - 14hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time">14hs - 16hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time">16hs - 18hs</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="grey-box">
                    <div class="title text-left x-small">
                      <h3>Viernes 23 de Julio</h3>

                      <ul class="d-flex flex-wrap times">
                        <li>
                          <a href="#" class="js-time">08hs - 10hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time">10hs - 12hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time">12hs - 14hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time">14hs - 16hs</a>
                        </li>
                        <li>
                          <a href="#" class="js-time">16hs - 18hs</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="continue">
              <div class="d-flex justify-content-between align-items-center">
                <a class="back btn btn-link" href="confirmacion-paso-2.html">
                  <i class="fas fa-chevron-left"></i>
                  Volver
                </a>
                <div class="text-right">
                  <a href='{{url("carrito/paso4")}}' class="btn btn-primary">Siguiente</a>                  
                </div>
              </div>
            </div>
          </div>
        </div>        
      </section>


<!--esto no va pero lo dejo aca para no perderlo -->

@endsection