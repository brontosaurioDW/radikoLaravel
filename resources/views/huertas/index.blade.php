@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('header-class', 'huerta-detalle')

@section ('content')

<div class="huerta-content">
	<section class="huerta-options">
		<div class="container">
			<div class="row listado-productos">
				<div class="col-12 col-md-9">
					<h2>XX huertas para la categoría seleccionada</h2>
					<div class="huerta-productos">
						<form action="" method="" class="form">
							<div class="row">
								<div class="col-12 col-md-4 d-none d-lg-block">
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
									<form class="huerta-form-buscar">
										<div class="row-search form-row justify-content-right relative huerta-buscar">
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
						
						@foreach ($huertas as $huerta)

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
										{{ $review->stars }}

										@for ($i = 0; $i < 5; ++$i)
										<i class="{{ $review->stars <= $i ? 'far' : 'fas' }} fa-star" aria-hidden="true"></i>
										@endfor

										@endif

										@endforeach
									</div>

								</div>								
							</a>
						</div>	
						@endforeach

					</div>
					<div class="row">
						<div class="col-12">
							<nav aria-label="navigation" class="huerta-navigation">
								<ul class="pagination justify-content-center">
									<?php echo $huertas->links(); ?>
									{{-- 									
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li> 
									--}}
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="huerta-list">
						<ul class="list-group list-group-flush">
							<li class="list-group-item list-title">Categorias</li>
							@foreach ($categorias as $categoria)
							<li class="list-group-item">
								<a href="#">{{ $categoria->categoria }}</a>
							</li>								
							@endforeach				
						</ul>

						<ul class="list-group list-group-flush">
							<li class="list-group-item list-title">Categoría</li>
							<li class="list-group-item">
								<label for="valor-4">
									<span class="checkbox">
										<input type="checkbox" name="valor-4" id="valor-4">
										<span>Valor 4</span>
									</span>
								</label>
							</li>
							<li class="list-group-item">
								<label for="valor-5">
									<span class="checkbox">
										<input type="checkbox" name="valor-5" id="valor-5">
										<span>Valor 5</span>
									</span>
								</label>
							</li>
							<li class="list-group-item">
								<label for="valor-6">
									<span class="checkbox">
										<input type="checkbox" name="valor-6" id="valor-6">
										<span>Valor 6</span>
									</span>
								</label>
							</li>
						</ul>

						<ul class="list-group list-group-flush">
							<li class="list-group-item list-title">Categoría</li>
							<li class="list-group-item">
								<label for="valor-7">
									<span class="checkbox">
										<input type="checkbox" name="valor-7" id="valor-7">
										<span>Valor 7</span>
									</span>
								</label>
							</li>
							<li class="list-group-item">
								<label for="valor-8">
									<span class="checkbox">
										<input type="checkbox" name="valor-8" id="valor-8">
										<span>Valor 8</span>
									</span>
								</label>
							</li>
							<li class="list-group-item">
								<label for="valor-9">
									<span class="checkbox">
										<input type="checkbox" name="valor-9" id="valor-9">
										<span>Valor 9</span>
									</span>
								</label>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>

	</section>
</div>


@endsection








