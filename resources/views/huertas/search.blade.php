@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('header-class', 'huerta-detalle')

@section ('content')

<div class="main-wrapper relative">
	<section>

		<div class="top">
			<div class="container">
				<div class="row align-items-center">			
					<div class="col-xs-12 col-md-3">
						<a href="{{ url('/') }}" class="link">
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

			<div class="row">			
				<div class="col-xs-12 d-none d-lg-block col-lg-3">
					{{-- FILTROS LATERALES  --}}
					@include ('huertas.filtros-desktop')
				</div>

				<div class="col-xs-12 col-lg-9">
					<div class="huerta-productos">
						<form action="" method="" class="form">
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
						</form>

						<div class="d-flex flex-wrap justify-content-between">			

							@if ($productos->isEmpty())

								<p>No hay resultados para <b>{{ $inputData }}</b></p>

							@else

								@foreach ( $huertas as $huerta )

									@foreach ( $productos as $producto )

										@if ( $producto->huerta_id == $huerta->id)

										<div class="card no-border">
											<a href="{{ route( 'huertas.show', ['id' => $huerta->id] ) }}" class="d-flex">
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
				</div>
			</div>
		</div>

		{{-- DESCARGA LA APP  --}}
		@include ('elementos.descarga-app-violeta')
	</section>
</div>

@endsection