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
										{{$pedido->id_estado_pedido}}
									</td>
									<td class="actions">
										<a class="link" href="#" data-toggle="tooltip" data-placement="top" title="Ver"><span class="sr-only">Ver</span><i class="far fa-eye"></i></a>
										<a class="link" href="#" data-toggle="tooltip" data-placement="top" title="Editar"><span class="sr-only">Editar</span><i class="far fa-edit"></i></a>
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