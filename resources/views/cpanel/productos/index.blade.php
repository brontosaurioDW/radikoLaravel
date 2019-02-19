@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			@include ('cpanel.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Productos de la  huerta</h3>

						<a class="btn btn-primary btn-small add-product" href="{{ route( 'cpanel.productos.create') }}"> Agregar producto </a>
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
									<th scope="col">Prodcuto</th>
									<th scope="col">Marca</th>
									<th scope="col" class="price">Precio</th>
									<th scope="col">Categoría</th>
									<th scope="col" class="actions">Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($productos as $producto)
								<tr>
									<td>
										{{$producto->producto}}
									</td>
									<td>
										{{$producto->marca}}
									</td>
									<td class="price">
										$ {{$producto->precio}}
									</td>
									<td>
										{{$producto->categoria->categoria}}
									</td>
									<td class="actions">
										<a class="link" href="{{ route( 'cpanel.productos.show', ['id' => $producto->id] ) }}" data-toggle="tooltip" data-placement="top" title="Ver"><span class="sr-only">Ver</span><i class="far fa-eye"></i></a>
										<a class="link" href="{{ route( 'cpanel.productos.edit', ['id' => $producto->id] ) }}" data-toggle="tooltip" data-placement="top" title="Editar"><span class="sr-only">Editar</span><i class="far fa-edit"></i></a>
										<a class="link" href="{{ route( 'cpanel.productos.confirmDestroy', ['id' => $producto->id] ) }}" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="sr-only">Eliminar</span><i class="far fa-trash"></i></a>
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