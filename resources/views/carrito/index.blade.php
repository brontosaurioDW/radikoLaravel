@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('content')



<!--Add some items in your Controller.
Cart::add('2', 'Naranja', 1, 45.00);
Cart::add('17', 'Tofu', 3, 138.90);


tambien se puede hacer como array:

Cart::add([
	['id' => '18', 'name' => 'Colita de cuadril', 'qty' => 1, 'price' => 595.50],
	['id' => '44', 'name' => 'Pera', 'qty' => 1, 'price' => 150.00]
]);-->

<div class="main-wrapper relative">
	<section class="pedido">
		<div class="container-fluid">
			<div class="header-huerta rdk-charcoal d-flex justify-content-end" style="background-image: url('../images/header-huerta.jpg');">
				<div class="diagonal bg-trama">
					<h2 class="huerta-title"><span>Tu compra con</span>Nombre Huerta</h2>
				</div>
			</div>
		</div>
	
		<div class="container">
			<a href="{{ url()->previous() }}" class="link">
				<i class="fas fa-chevron-left"></i>
				<span>volver</span>
			</a>
		</div>
		
		<div class="tabs-outline">
			<div class="container">
				<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link @if(!Session::has('status') and $errors->isEmpty()) active @endif" id="home-tab" data-toggle="tab" href="#pedido-revisar" role="tab" aria-controls="pedido-revisar" aria-selected="true">
							<span class="d-none d-sm-block">Revisar pedido</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#pedido-direccion" role="tab" aria-controls="pedido-direccion" aria-selected="false">
							<span class="d-none d-sm-block">Dirección</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(Session::has('status') or !$errors->isEmpty()) active @endif" id="contact-tab" data-toggle="tab" href="#pedido-horario" role="tab" aria-controls="pedido-horario" aria-selected="false">
							<span class="d-none d-sm-block">Horario</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(Session::has('status') or !$errors->isEmpty()) active @endif" id="contact-tab" data-toggle="tab" href="#pedido-pago" role="tab" aria-controls="pedido-pago" aria-selected="false">
							<span class="d-none d-sm-block">Pago</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(Session::has('status') or !$errors->isEmpty()) active @endif" id="contact-tab" data-toggle="tab" href="#pedido-confirmacion" role="tab" aria-controls="pedido-confirmacion" aria-selected="false">
							<span class="d-none d-sm-block">Confirmación</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="container">
			<div class="tab-content">
				<div class="row">
					<div class="col-xs-12 col-lg-7">
						<div class="tab-pane fade @if(!Session::has('status') and $errors->isEmpty()) show active @endif" id="pedido-revisar" role="tabpanel" aria-labelledby="pedido-revisar">
						
							<h4>Productos</h4>
								
							<?php foreach(Cart::content() as $row) :?>
								
							<div class="pedido-productos">
								<div class="card no-border">
									<div class="d-flex">
										<div class="img-wrapper">
											<img class="card-img-top" src="{{ url('storage/images/productos/ajo01.jpg') }}" alt="Card image cap">
										</div>
										<div class="card-info dark-border">
											<div class="card-title d-flex">
												<h3><?php echo $row->name; ?></h3>
												<a href='{{url("carrito?product_id=$row->id&borrar=1")}}' class="rdk-tomato text">
													<i class="far fa-trash-alt"></i>
												</a>	
											</div>
											<div>
												<span class="precio d-block">
													<span class="bold">$<?php echo $row->price; ?></span> x <?php echo $row->options->unidad; ?>.
												</span>
												<form method="GET" action="{{route('carrito.updetear')}}">
													<input type="hidden" name="product_id" value="{{$row->id}}">
													<div class="d-flex modificar-cantidad">
														<label for="cantidad">Cantidad</label>
														<div class="d-flex">
															<a class="cart_quantity_down" href='{{url("carrito?product_id=$row->id&decrease=1")}}'><i class="fas fa-minus"></i></a>
															<input type="text" class="form-control cart_quantity_input" id="cantidad" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">
															<a class="cart_quantity_up" href='{{url("carrito?product_id=$row->id&increment=1")}}'><i class="fas fa-plus"></i></a>
														</div>
														<div>
															<button type="submit">Actualizar precio</button>
														</div>
													</div>
												</form>	
											</div>
										</div>								
									</div>
								</div>
							</div>
							<?php endforeach;?>
						</div>
					</div>	

					<div class="col-xs-12 col-lg-5">
						<h4>Tu carrito</h4>
						<div class="detalle-carrito">	
							<table class="table table-borderless">
								<?php foreach(Cart::content() as $row) :?>
									<tr>
										<td><?php echo $row->options->unidad; ?></td>
										<td><?php echo $row->name; ?><td>
										<td class="bold">$<?php echo $row->total; ?><td>
									</tr>
								<?php endforeach;?>	
									<tr class="bold importe">
										<td colspan="2">Subtotal:</td>
										<td>&nbsp;</td>
										<td>$<?php echo Cart::subtotal(); ?></td>
									</tr>
									<tr class="bold importe">
										<td colspan="2">Costo de envío</td>
										<td>&nbsp;</td>
										<td>$130</td>
									</tr>
									<tr class="bold importe rdk-pepper text">
										<td colspan="2">Total</td>
										<td>&nbsp;</td>
										<td><?php echo Cart::total(); ?></td>
									</tr>
							</table>
						</div>
						<a class="btn btn-primary btn-medium" href="#">Iniciar pago</a>	
					</div>	
				</div>
			</div>
		</div>	
	

<table style="margin-top: 200px">
   	<thead>
       	<tr>
           	<th>Product</th>
           	<th>Qty</th>
           	<th>Unidad</th>
           	<th>Price</th>
           	<th>Subtotal</th>
       	</tr>
   	</thead>

   	<tbody>

   		<?php foreach(Cart::content() as $row) :?>

       		<tr>
           		<td>
               		<p><strong><?php echo $row->name; ?></strong></p>
               		<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
           		</td>
           		<td>
           			<form method="GET" action="{{route('carrito.updetear')}}">
           				<input type="hidden" name="product_id" value="{{$row->id}}">
           				<a class="cart_quantity_down" href='{{url("carrito?product_id=$row->id&decrease=1")}}'> - </a>
           				<input class="cart_quantity_input" type="text" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">
           				<a class="cart_quantity_up" href='{{url("carrito?product_id=$row->id&increment=1")}}'> + </a>
						<button type="submit">UPDETEAR</button>
           			</form>
           		</td>	
				<td><?php echo $row->options->unidad; ?></td>
           		<td>$<?php echo $row->price; ?></td>
           		<td>$<?php echo $row->total; ?></td>
           		<td><a href='{{url("carrito?product_id=$row->id&borrar=1")}}'> Borrar </a></td>
       		</tr>

	   	<?php endforeach;?>



   	</tbody>
   	
   	<tfoot>
   		<tr>
   			<td><a href='{{url("carrito?vaciar=1")}}'> Vaciar chango</a></td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Subtotal</td>
   			<td><?php echo Cart::subtotal(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Costo de envío</td>
   			<td>$130</td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Total</td>
   			<td><?php echo Cart::total(); ?></td>
   		</tr>

   	</tfoot>
</table>
	
	
	
	
	
	
	
	
	
	
	</section>
</div>	







@endsection