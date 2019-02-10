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
				<h3>Detalle del producto</h3>				
				<div class="row">
					<div class="col-9">						
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><b>Nombre:</b> {{ $producto->producto }}</li>
							<li class="list-group-item"><b>Descripción:</b> {{ $producto->descripcion }}</li>
							<li class="list-group-item"><b>Marca:</b> {{ $producto->marca }}</li>
							<li class="list-group-item"><b>Precio:</b> $ {{ $producto->precio }}</li>
							<li class="list-group-item"><b>Unidad de medida:</b> {{ $producto->unidadDeMedida->unidad }}</li>
							<li class="list-group-item"><b>Categoria:</b> {{ $producto->categoria->categoria }}</li>
						</ul>
					</div>
					<div class="col-3">
						<img class="img-fluid" src="{{ url('storage/images/productos/'.$producto->foto) }}" alt="{{$producto->producto}}" />
					</div>
				</div>
				<a class="btn btn-primary btn-medium" href="{{ url()->previous() }}">Volver</a>
			</div>

		</div>
	</section>
</div>

@endsection