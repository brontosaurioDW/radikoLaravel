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
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="true">Dirección</a>
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
      
      <div class="row justify-content-between">
        <div class="col-md-7">
          <div class="title text-left">
            <h2>Dirección</h2>
          </div>
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

          <div class="title text-left">
            <h2>Direcciones guardadas</h2>
          </div>
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
                <a href="#" class="btn btn-terciary btn-small w-100">Usar</a>   
              </div>
            </div>
          </div>

          <div class="grey-box">
            <div class="row">
              <div class="col-md-8">
                <h3 class="bold">Casa Susana</h3>
                <ul>
                  <li>Av. Cordoba 1234</li>
                  <li>Palermo</li>
                  <li>(011) 15 5588 7758</li>
                </ul>
              </div>
              <div class="col-md-4">
                <a href="#" class="btn btn-terciary btn-small w-100">Usar</a>   
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
          </div>
        </div>
      </div>

      

      <div class="row justify-content-between">
        <div class="col-md-7">

          <div class="add-address">
            <div class="title text-left">
              <h2>Agregar otra dirección</h2>
            </div>

            <form class="form-boxed" action="" method="POST">
              <div class="row-form">
                <label>Nombre / Referencia</label>
                <input type="text" name="nombre-referencia" placeholder="Ej: Lo de Mamá">
              </div>

              <div class="row-form">
                <div class="row">
                  <div class="col-md-7">
                    <label>Calle</label>
                    <input type="text" name="calle">
                  </div>

                  <div class="col-md-5">
                    <label>Número</label>
                    <input type="text" name="numero">
                  </div>
                </div>
              </div>

              <div class="row-form">
                <label>Piso + Departamento <span>(opcional)</span></label>
                <div class="row">
                  <div class="col-md-7">
                    <input type="text" name="dpto">
                  </div>
                </div>                    
              </div>  

              <div class="row-form">
                <label>Teléfono</label>
                <input type="phone" name="tel">                 
              </div>  

              <div class="row-form">
                <label>Aclaraciones <span>(opcional)</span></label>
                <textarea cols="20" rows="3"></textarea>                
              </div>  

              <div class="row-form">
                <label for="usar-dire">
                  <span class="checkbox">
                    <input type="checkbox" name="usar-dire" id="usar-dire">
                    <span>Usar esta dirección</span>
                  </span>
                </label>
              </div>    

              <div class="row-form">
                <a href="#" class="btn btn-terciary btn-small">Guardar</a>                    
              </div>              
            </form>                 
          </div>
        </div>
      </div>

      <div class="continue">
        <div class="d-flex justify-content-between align-items-center">
          <a class="back btn btn-link" href="confirmacion-paso-1.html">
            <i class="fas fa-chevron-left"></i>
            Volver
          </a>
          <div class="text-right">
            <a href='{{url("carrito/paso3")}}' class="btn btn-primary">Siguiente</a>                  
          </div>
        </div>
      </div>
    </div>
  </div>        
</section>


<!--esto no va pero lo dejo aca para no perderlo -->

@endsection