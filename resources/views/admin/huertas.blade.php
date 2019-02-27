@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			@include ('admin.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Huertas registradas</h3>
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
									<th scope="col">Huerta</th>
									<th scope="col">Referente</th>
									<th scope="col">Teléfono</th>
									<th scope="col">Estado</th>
									<th scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($huertas as $huerta)
								<tr>
									<td>
										{{$huerta->huerta}}
									</td>
									<td>
										{{$huerta->usuario->name}} {{$huerta->usuario->last_name}}
									</td>
									<td>
										{{$huerta->usuario->telephone}}
									</td>
									<td>
										@if($huerta->usuario->estado == 'activo')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #50D2A4;"></i>
											{{$huerta->usuario->estado}}
										@elseif($huerta->usuario->estado == 'suspendido')	
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #DD964D;"></i>
											{{$huerta->usuario->estado}}	
										@elseif($huerta->usuario->estado == 'pendiente de pago')
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #C94B36;"></i>
											{{$huerta->usuario->estado}}
										@else
											<i class="fas fa-square-full" style="font-size:12px; margin-right: 3px; color: #6c757d;"></i>
											{{$huerta->usuario->estado}}
										@endif
									</td>
									<td class="actions">
										<a class="link" href="{{ route( 'admin.huertas.detalle-huerta', ['id' => $huerta->id] ) }}" data-toggle="tooltip" data-placement="top" title="Ver"><span class="sr-only">Ver</span><i class="far fa-eye"></i></a>
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