@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="buttons d-flex justify-content-start align-items-center">
						<a class="link" href="{{ url()->previous() }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
					</div>	

					<div class="title">			
						<h3>Eliminar producto de la  huerta</h3>
						<p>¿Esta seguro que desea eliminar el siguiente producto?</p>
					</div>
			
					<div class="row">
						<div class="col-sm-8">
							<ul class="details">
								<li>
									<span class="bold">Nombre:</span> {{ $producto->producto }}
								</li>
								<li>
									<span class="bold">Descripción:</span> {{ $producto->descripcion }}
								</li>
								<li>
									<span class="bold">Marca:</span> {{ $producto->marca }}
								</li>
								<li>
									<span class="bold">Precio:</span> $ {{ $producto->precio }}
								</li>
								<li>
									<span class="bold">Unidad de medida:</span> {{ $producto->unidadDeMedida->unidad }}
								</li>
								<li>
									<span class="bold">Categoria:</span> {{ $producto->categoria->categoria }}
								</li>
							</ul>
						</div>
						<div class="col-sm-4">
							<img class="img-fluid" src="{{ url('storage/images/productos/'.$producto->foto) }}" alt="{{$producto->producto}}" />
						</div>
					</div>

					<form method="POST" action="{{ route('cpanel.productos.destroy', ['id' => $producto->id] ) }}">
						@csrf
						@method('DELETE')		

						<div class="buttons bottom d-flex justify-content-end align-items-center">
							<button class="btn btn-primary btn-small">Eliminar</button>
						</div>		
					</form>				
				</div>
			</div>
		</section>
	</div>

@endsection