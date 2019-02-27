@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
		@include ('admin.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Detalle del pedido</h3>
					</div>
					
					<h4 class="my-4">Orden</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">N° de pedido: {{$pedido->id}}</li>
					</ul>
					
					<h4 class="my-4">Estado</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							@if($pedido->estado->estado == 'Entregado')
								<span style="color:white; padding: 5px 10px; background-color: #50D2A4;">{{$pedido->estado->estado}}</span>
							@elseif($pedido->estado->estado == 'Pendiente de pago')
								<span style="color:white; padding: 5px 10px; background-color: #DD964D;">{{$pedido->estado->estado}}</span>
							@elseif($pedido->estado->estado == 'Pendiente de entrega')
								<span style="color:white; padding: 5px 10px; background-color: #C94B36;">{{$pedido->estado->estado}}</span>
							@else
								<span style="color:white; padding: 5px 10px; background-color: #6c757d;">{{$pedido->estado->estado}}</span>
							@endif
						</li>
					</ul>

					<h4 class="my-4">Datos del pedido</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"> Subtotal: {{$pedido->subtotal}}</li>
						<li class="list-group-item">Total: {{$pedido->total}}</li>
					</ul>
					<h4 class="my-4">Productos</h4>
					@foreach ($productos as $producto)
					@foreach ($productos_pedido as $producto_pedido)
					@if ($producto->id == $producto_pedido->producto_id)
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Producto: {{$producto->producto}} | Cantidad: {{$producto_pedido->cantidad}} | {{$producto->precio}}</li>
					</ul>
					@endif
					@endforeach
					@endforeach

					<h4 class="my-4">Fecha de entrega</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Fecha: {{$pedido->fecha_pedido}}</li>
					</ul>

					<h4 class="my-4">Dirección de entrega</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Calle:{{$pedido->direccion->calle}} {{$pedido->direccion->numero}}</li>
						@if ($pedido->direccion->piso || $pedido->direccion->departamento)
						<li class="list-group-item">Departamento: {{$pedido->direccion->piso}} {{$pedido->direccion->departamento}}</li>
						@endif
						<li class="list-group-item">Teléfono: {{$pedido->direccion->telefono}}</li>
						<li class="list-group-item">Aclaración: {{$pedido->direccion->aclaracion}}</li>
						<li class="list-group-item">Referencia: {{$pedido->direccion->referencia}}</li>
					</ul>

					<h4 class="my-4">Datos del cliente:</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">{{$pedido->usuario->name}} {{$pedido->usuario->last_name}}</li>
						<li class="list-group-item">{{$pedido->usuario->email}}</li>
						<li class="list-group-item">{{$pedido->usuario->telephone}}</li>
					</ul>
									
					<h4 class="my-4">Datos de la Huerta:</h4>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">{{$pedido->huerta->huerta}}</li>
						<li class="list-group-item">{{$pedido->huerta->email}}</li>
						<li class="list-group-item">{{$pedido->huerta->telefono}}</li>
					</ul>

					<div class="buttons d-flex justify-content-end align-items-center">
						<a class="link" href="{{ route( 'admin.pedidos') }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
						<a class="btn btn-primary btn-small" href="{{ route( 'admin.pedidos.edit-pedido', ['id' => $pedido->id] ) }}">Cambiar estado</a>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection