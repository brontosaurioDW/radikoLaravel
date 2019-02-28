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

				@if(Session::has('status'))
					@component('components.alert', ['tipo' => Session::get('class')])
						{!! Session::get('status') !!}
					@endcomponent
				@endif
				
				<table class="table">
					<thead>
						<tr>
							<th>Facha</th>
							<th>Cliente</th>
							<th>Total</th>
							<th class="actions">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pedidos as $pedido)
						<tr>
							<td>{{$pedido->fecha_pedido}}</td>
							<td>{{$pedido->usuario->name}} {{$pedido->usuario->last_name}}</td>
							<td>$ {{$pedido->total + 130}}</td>z
							<td class="actions">
								<a class="link" href="{{ route('cpanel.pedidos.show', ['id' => $pedido->id]) }}" data-toggle="tooltip" data-placement="top" title="Ver"><span class="sr-only">Ver</span><i class="far fa-eye"></i></a>
								<a class="link" href="{{ route( 'cpanel.pedidos.edit-pedido', ['id' => $pedido->id] ) }}" data-toggle="tooltip" data-placement="top" title="Editar"><span class="sr-only">Editar</span><i class="far fa-edit"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>

	</section>
</div>

@endsection