@extends ('layouts.master')
@section ('title', 'Radiko')
@section ('content')
<div class="main-wrapper relative">
	<section class="overflow-hidden">
		<div class="top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xs-12 col-md-3">
						<a href="{{ url()->previous() }}" class="link">
							<i class="fas fa-chevron-left"></i>
							<span>volver</span>
						</a>
					</div>
					<div class="col-xs-12 col-md-9">
						<h2 class="bold">Resultados de busqueda para "{{ $inputData }}" </h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="huerta-productos">
				@if (!$productos->isEmpty())
				<div class="form">
					<div class="row">
						<div class="col-xs-12 col-md-4 d-none d-md-block">
							<label for="filtros" class="sr-only">Filtros</label>
							<select class="select" id="filtros">
								<option>Mejores puntuados</option>
								<option>Más valorados</option>
								<option>De mayor a menor</option>
								<option>De menor a mayor</option>
								<option>Los más nuevos</option>
							</select>
						</div>
						<div class="col-md-4 offset-md-4">
							<form method="" action="">
								<div class="relative search-sm">
									<input type="text" name="search" placeholder="¿Qué estás buscando?">
									<button class="btn-search">
									<span class="sr-only">Search</span>
									<i class="fas fa-search"></i>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				@endif
				<div class="d-flex flex-wrap justify-content-between">
					@if ($productos->isEmpty())
					<div class="no-results">
						<p>
							Lo sentimos, no hay resultados para
							<span class="bold">{{ $inputData }}</span>
						</p>
						<div class="search-form">
							<h2>¿Querés buscar otro producto?</h2>
							<div class="form">
								<form action="{{ route('huertas.search') }}" method="get">
									<div class="row-search form-row justify-content-center relative">
										<input type="text" name="search" id="search" placeholder="¿Qué estás buscando?">
										<button class="btn-search">
										<span class="sr-only">Search</span>
										<i class="far fa-search"></i>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					@else
					@foreach ( $huertas as $huerta )
					@foreach ( $productos as $producto )
					@if ( $producto->huerta_id == $huerta->id)
					<div class="card no-border">
						<a href="{{ route( 'huertas.show', ['id' => $huerta->id] ) }}" class="d-flex js-check-huerta">
							<input type="hidden" name="nombreEstaHuerta" value="{{ $huerta->huerta }}">
							<div class="img-wrapper">
								<img src="{{ url('storage/images/huertas/'.$huerta->foto) }}" alt="<?php echo $huerta->huerta ?>" />
							</div>
							<div class="card-info">
								<h3>{{ $huerta->huerta }}</h3>
								<div class="stars">
									@foreach ( $reviews as $review )
									@if ( $review->huerta_id == $huerta->id )
									@for ($i = 0; $i < 5; ++$i)
									<i class="{{ $review->stars <= $i ? 'far' : 'fas' }} fa-star" aria-hidden="true"></i>
									@endfor
									@endif
									@endforeach
								</div>
								<div class="more-info">
									<span class="categoria d-block">{{ $producto->producto }}</span>
									<span class="precio d-block">
										<span class="bold">{{ $producto->precio }}</span> x {{ $producto->unidadDeMedida->unidad }}.
									</span>
									<i class="far fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</div>
					@endif
					@endforeach
					@endforeach
					@endif
				</div>
			</div>
			<nav aria-label="navigation">
				<ul class="pagination">
					<?php echo $productos->links(); ?>
				</ul>
			</nav>
		</div>
		{{-- DESCARGA LA APP  --}}
		@include ('elementos.descarga-app-violeta')
	</section>
</div>
<!-- Modal -->
<div class="modal fade" id="confirmar-vaciar-carrito" tabindex="-1" role="dialog" aria-labelledby="confirmVaciarCarrito" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content block">
			<div class="modal-body confirm-modal">
				<button type="button" class="closes" data-dismiss="modal" aria-label="Close">
				<i class="far fa-times"></i>
				</button>
				
				<p>Estás ingresando a otra huerta y tu canasta ya tiene productos de <span id="nombre-huerta-actual-modal"></span></p>
				<p>Si continuás con esta huerta se vaciará la canasta. ¿Continuamos?</p>
				
				<div class="buttons justify-content-center d-flex align-items-center" role="group" aria-label="Confirm modal">
					<meta name="csrf-token" content="{{ csrf_token() }}">
					<button type="button" class="btn btn-primary btn-small" id="modal-btn-si">Vaciar canasta</button>
					<a class="link d-block" id="modal-btn-no" data-dismiss="modal" aria-label="Close">Continuar mi compra</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection