@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			@include ('admin.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Clientes registrados</h3>
					</div>

					@if(Session::has('status'))
						@component('components.alert', ['tipo' => Session::get('class')])
							{!! Session::get('status') !!}
						@endcomponent
					@endif
					
					<div class="table-responsive">
						<table>
							<thead>
								<tr>
									<th scope="col">Cliente</th>
									<th scope="col">Teléfono</th>
									<th scope="col">Estado</th>
									<th scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($usuarios as $usuario)
								<tr>
									<td>
										{{$usuario->name}} {{$usuario->last_name}}
									</td>
									<td>
										{{$usuario->telephone}}
									</td>
									<td>
										@if($usuario->estado == 'activo')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #50D2A4;"></i>
											{{$usuario->estado}}
										@elseif($usuario->estado == 'suspendido')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #DD964D;"></i>
											{{$usuario->estado}}	
										@elseif($usuario->estado == 'pendiente de pago')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #C94B36;"></i>
											{{$usuario->estado}}
										@else
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #6c757d;"></i>
											{{$usuario->estado}}
										@endif
									</td>
									<td class="actions">
										<a class="link" href="{{ route( 'admin.clientes.detalle-cliente', ['id' => $usuario->id] ) }}" data-toggle="tooltip" data-placement="top" title="Ver"><span class="sr-only">Ver</span><i class="far fa-eye"></i></a>
										<a class="link" href="{{ route( 'admin.clientes.edit-cliente', ['id' => $usuario->id] ) }}" data-toggle="tooltip" data-placement="top" title="Editar"><span class="sr-only">Editar</span><i class="far fa-edit"></i></a>
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