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
				<h3>Eliminar producto de la  huerta</h3>
				<p>¿Esta seguro que desea eliminar el siguiente producto?</p>
				
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


								<form method="POST" action="{{ route('cpanel.productos.destroy', ['id' => $producto->id] ) }}">
					@csrf
					@method('DELETE')

					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
						<a class="btn btn-primary btn-medium mr-3	" href="{{ url()->previous() }}">Cancelar</a>
						<button class="btn btn-danger btn-medium">Eliminar</button>
					</div>
					
				</form>


			</div>
		</div>
	</section>
</div>

@endsection