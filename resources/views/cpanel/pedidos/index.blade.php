@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper cpanel relative">
	<section class="container">
		@include ('cpanel.nav')

		<div class="c-panel-wrapper bg-trama rdk-charcoal">
			<div class="c-panel-inner-wrapper">
				<div class="title">
					<h3>Pedidos de la huerta</h3>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>Facha</th>
							<th>Cliente</th>
							<th>Total</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pedidos as $pedido)
						<tr>
							<td>{{$pedido->fecha_pedido}}</td>
							<td>{{$pedido->usuario->name}} {{$pedido->usuario->last_name}}</td>
							<td>$ {{$pedido->total}}</td>
							<td><a href="{{ route('cpanel.pedidos.show', ['id' => $pedido->id]) }}">Ver detalles</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>

	</section>
</div>

@endsection