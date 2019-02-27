@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			@include ('admin.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Pedidos</h3>
					</div>

					
					<div class="table-responsive">
						<table>
							<thead>
								<tr>
									<th scope="col">Fecha</th>
									<th scope="col">Huerta</th>
									<th scope="col">Cliente</th>
									<th scope="col">Estado</th>
									<th scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($pedidos as $pedido)
								<tr>
									<td>
										{{$pedido->fecha_pedido}}
									</td>
									<td>
										{{$pedido->huerta->huerta}}
									</td>
									<td>
										{{$pedido->usuario->name}} {{$pedido->usuario->last_name}}
									</td>
									<td>
										@if($pedido->estado->estado == 'Entregado')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #50D2A4;"></i>
											{{$pedido->estado->estado}}
										@elseif($pedido->estado->estado == 'Pendiente de entrega')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #C94B36;"></i>
											{{$pedido->estado->estado}}	
										@elseif($pedido->estado->estado == 'Pendiente de pago')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #DD964D;"></i>
											{{$pedido->estado->estado}}
										@else
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #6c757d;"></i>
											{{$pedido->estado->estado}}
										@endif
									</td>
									<td class="actions">
										<a class="link" href="{{ route( 'admin.pedidos.detalle-pedido', ['id' => $pedido->id] ) }}" data-toggle="tooltip" data-placement="top" title="Ver"><span class="sr-only">Ver</span><i class="far fa-eye"></i></a>
										<a class="link" href="{{ route( 'admin.pedidos.edit-pedido', ['id' => $pedido->id] ) }}" data-toggle="tooltip" data-placement="top" title="Editar"><span class="sr-only">Editar</span><i class="far fa-edit"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>	
					</div>
				</div>					 
			</div>
		</section>
	</div>

@endsection