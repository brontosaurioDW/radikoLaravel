@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Detalle del producto</h3>				
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
					
					<div class="buttons d-flex justify-content-end align-items-center">
						<a class="link" href="{{ url()->previous() }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
						<a class="btn btn-primary btn-small" href="{{ url()->previous() }}">Editar</a>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection