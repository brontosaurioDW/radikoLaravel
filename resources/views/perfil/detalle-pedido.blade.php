	@extends ('layouts.master')

	@section ('title', 'Radiko - Información usuario')

	@section ('content')

	<div class="main-wrapper relative small-height">
		<section class="container detalle-pedido">

			<a href="{{url()->previous()}}" class="link-back">volver a Perfil</a>

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
										<span class="price-black bold">{{$pedido->id}}</span>
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
							@foreach ($productos as $producto)
							@foreach ($productos_pedido as $producto_pedido)
							@if ($producto->id == $producto_pedido->producto_id)
							<li class="d-flex justify-content-between align-items-center">
								<span style="color:red">
									{{$producto_pedido->cantidad}} 
									{{$producto->unidadDeMedida->unidad}}.  
									{{$producto->producto}}
								</span>
								<span class="price-black" style="color:red">
									${{$producto_pedido->cantidad * $producto->precio}}
								</span>
							</li>
							@endif
							@endforeach
							@endforeach
						</ul>
						<ul>
							<li class="bold d-flex justify-content-between align-items-center">
								<span>Subtotal:</span>
								<span class="price-black bold">${{$pedido->subtotal}}</span>
							</li>
							<li class="bold d-flex justify-content-between align-items-center">
								<span>Costo de envío:</span>
								<span class="price-black bold">${{$pedido->costo_envio}}</span>
							</li>
						</ul>
					</div>
					<div class="grey-box">
						<div class="total m-0">
							<div class="title d-flex align-items-center justify-content-between m-0">
								<h2 class="uppercase">Total</h2>
								<div class="price">${{$pedido->total}}</div>
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
								<h3 class="bold">{{$pedido->huerta->huerta}}</h3>
								<ul class="mb-4">
									<li>{{$pedido->huerta->direccion}}</li>
									<li>{{$pedido->huerta->telefono}}</li>
									<li>{{$pedido->huerta->email}}</li>
								</ul>
							</div>
						</div>
						<a href="#" class="btn btn-small btn-primary">Contactar</a>
					</div>
					<div class="grey-box">
						<div class="title text-left small">
							<h2>Entrega</h2>
						</div>
						<div class="row" style="color:red">
							<div class="col-md-12">
								<ul class="mb-4">
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
								<h3>{{ $pedido->direccion->referencia }}</h3>
								<ul class="mb-4">
									<li>{{ $pedido->direccion->calle }} {{ $pedido->direccion->numero }} {{ $pedido->direccion->piso }}</li>
									<li>{{ $pedido->direccion->telefono }}</li>
									<li>{{ $pedido->direccion->aclaracion }}</li>
								</ul>
							</div>
						</div>
						<a href="#" class="btn btn-small btn-primary">Cambiar</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	@endsection