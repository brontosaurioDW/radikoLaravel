@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">
		<div class="row">

			<div class="col-3">
				@include ('cpanel.nav')
			</div>

			<div class="col-9">	
				<h3>Productos de la  huerta</h3>

				@if(Session::has('status'))
				@component('components.alert', ['tipo' => Session::get('class')])
				{!! Session::get('status') !!}
				@endcomponent
				@endif

				<a class="btn btn-primary btn-medium mb-3" href="{{ route( 'cpanel.productos.create') }}">Crear producto</a>

				<table class="table">
					<thead>
						<tr>
							<th scope="col">Prodcuto</th>
							<th scope="col">Marca</th>
							<th scope="col">Precio</th>
							<th scope="col">Categoría</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productos as $producto)
						<tr>
							<td>{{$producto->producto}}</td>
							<td>{{$producto->marca}}</td>
							<td>$ {{$producto->precio}}</td>
							<td>{{$producto->categoria->categoria}}</td>
							<td>
								<a class="btn btn-primary" href="{{ route( 'cpanel.productos.show', ['id' => $producto->id] ) }}" data-toggle="tooltip" data-placement="top" title="Ver"><span class="sr-only">Ver</span><i class="far fa-eye"></i></a>
								<a class="btn btn-primary" href="{{ route( 'cpanel.productos.edit', ['id' => $producto->id] ) }}" data-toggle="tooltip" data-placement="top" title="Editar"><span class="sr-only">Editar</span><i class="far fa-edit"></i></a>
								<a class="btn btn-primary" href="{{ route( 'cpanel.productos.confirmDestroy', ['id' => $producto->id] ) }}" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="sr-only">Eliminar</span><i class="far fa-trash"></i></a>
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