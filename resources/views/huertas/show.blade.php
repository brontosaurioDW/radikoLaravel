@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('header-class', 'huerta-detalle')

@section ('content')

<main class="huerta-content">
	<section class="huerta-title-wrapper">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<h2 class="huerta-title	">{{$huerta->huerta}}</h2>
			</div>
		</div>
	</section>


	<div class="container d-none"	id="js-dummy-alert">
		<div class="row">
			<div class="col-12">
				<div class="alert dummy-alert alert-dismissible fade show" role="alert">
					<div class="row">
						<div class="col-6">
							<p class="bold">¡Agregaste un producto al carrito!</p>
						</div>
						<div class="col-6 text-right">
							<a href="confirmacion-paso-1.html">Ver carrito</a>
						</div>
					</div>


					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	</div>


	<div class="huerta-nav">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#huerta-productos-listado" role="tab" aria-controls="huerta-productos-listado" aria-selected="true">Productos</a>
						</li>
						<li class="nav-item disabledTab">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#huerta-informacion" role="tab" aria-controls="huerta-informacion" aria-selected="false">Información</a>
						</li>
						<li class="nav-item disabledTab">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#huerta-rating" role="tab" aria-controls="huerta-rating" aria-selected="false">Rating</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="huerta-options">
		<div class="container">
			<div class="tab-content my-3" id="huerta-productos">
				<div class="tab-pane fade" id="huerta-productos-listado" role="tabpanel" aria-labelledby="huerta-productos-listado">
					<div class="row">
						<div class="col-md-3 offset-md-9">
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

<!-- 					@foreach ($huerta->productos as $producto)
						
						{{ $producto->producto }}
						{{ $producto->descripcion }}
						{{ $producto->marca }}
						{{ $producto->precio }}
						{{ $producto->foto }}
						{{ $producto->estado }}

						@endforeach -->

						<div class="row listado-productos">
							<div class="col-12 col-md-9">
								<div class="huerta-productos">
									<div class="row">

										@foreach ($productos as $producto)

										<div class="col-12 col-sm-6 col-md-4">
											<div class="card">
												<a data-toggle="modal" data-target="#producto-detalle">
													<img class="card-img-top" src="{{ url('storage/images/'.$producto->foto) }}" alt="Card image cap">
												</a>
												<div class="card-body">
													<h4 class="card-title">{{ $producto->producto }}</h4>
													<p><span class="producto-precio">{{ $producto->precio }}</span> x {{ $producto->unidadDeMedida->unidad }}</p>
												</div>
											</div>
										</div>

										@endforeach

									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<nav aria-label="navigation" class="huerta-navigation">
											<ul class="pagination justify-content-center">
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-3">
								<div class="huerta-list">
									<ul class="list-group list-group-flush">
										<li class="list-group-item list-title">Categoría</li>
										<li class="list-group-item">
											<label for="valor-1">
												<span class="checkbox">
													<input type="checkbox" name="valor-1" id="valor-1">
													<span>Valor 1</span>
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label for="valor-2">
												<span class="checkbox">
													<input type="checkbox" name="valor-2" id="valor-2">
													<span>Valor 2</span>
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label for="valor-3">
												<span class="checkbox">
													<input type="checkbox" name="valor-3" id="valor-3">
													<span>Valor 3</span>
												</span>
											</label>
										</li>
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
					<div class="tab-pane fade" id="huerta-informacion" role="tabpanel" aria-labelledby="huerta-informacion">
						<div class="row">
							<div class="col col-md-4">
								<div class="card">
									<div class="card-header">
										Información
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item"><b>Nombre:</b> {{$huerta->huerta}}</li>
										<li class="list-group-item"><b>Cuit:</b> {{$huerta->cuit}}</li>
										<li class="list-group-item"><b>Razón social:</b> {{$huerta->razon_social}}</li>
										<li class="list-group-item"><b>Dirección:</b> {{$huerta->direccion}}</li>
										<li class="list-group-item"><b>Cantidad máxima de envios:</b> {{$huerta->cantidad_max_envios}}</li>
										<li class="list-group-item"><b>Foto:</b> {{$huerta->foto}}</li>
									</ul>
								</div>
							</div>
							<div class="col col-md-4">
								<div class="card">
									<div class="card-header">
										Featured
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Dapibus ac facilisis in</li>
										<li class="list-group-item">Vestibulum at eros</li>
									</ul>
								</div>
							</div>
							<div class="col col-md-4">
								<div class="card">
									<div class="card-header">
										Featured
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Dapibus ac facilisis in</li>
										<li class="list-group-item">Vestibulum at eros</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="huerta-rating" role="tabpanel" aria-labelledby="huerta-rating">

						@foreach ($huerta->comentarios as $comentario)
						<div class="media mb-4">
							<img class="mr-3" src="http://placeholder.pics/svg/64" alt="Generic placeholder image">
							<div class="media-body">
								<h5 class="mt-0">Nombre de usuario</h5>
								<p>Estrellas: {{$comentario->stars}}</p>
								<p>{{ $comentario->comentario }}</p>

							</div>
						</div>
						@endforeach

						<hr>
						<form action="{{ route('huertas.comments' , ['id' => $huerta->id]) }}" method="post">

							@csrf
							@method('PUT')

							<h2>Comentarios y calificación</h2>

							<div class="form-group">
								<label for="comentario">Comentario</label>
								<textarea class="form-control" name="comentario" id="comentario" cols="30" rows="10" placeholder="deja tu comentario aquí"></textarea>
								<small id="emailHelp" class="form-text text-muted">Contamos tu experiencia con la huerta.</small>
							</div>
							<div class="form-group">
								<label>Calficación</label>

								<div class="form-check">
									<input class="form-check-input" type="radio" name="stars" id="stars1" value="1" checked>
									<label class="form-check-label" for="stars1">
										1 Estrella
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="stars" id="stars2" value="2">
									<label class="form-check-label" for="stars2">
										2 Estrellas
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="stars" id="stars3" value="3">
									<label class="form-check-label" for="stars3">
										3 Estrellas
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="stars" id="stars4" value="4">
									<label class="form-check-label" for="stars4">
										4 Estrellas
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="stars" id="stars5" value="5">
									<label class="form-check-label" for="stars5">
										5 Estrellas
									</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Comentar</button>
						</form>


					</div>
				</div>
			</div>

		</section>

		<!-- Modal -->
		<div class="modal fade" id="producto-detalle" tabindex="-1" role="dialog" aria-labelledby="producto-detalle" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content block">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body modal-producto">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6">
									<img class="img-fluid mb-3" src="{{ url('storage/images/p-1.jpg') }}" alt="tomates">
								</div>
								<div class="col-md-6">
									<div>
										<h3 class="producto-title">Tomate</h3>
									</div>
									<div>
										<h4 class="producto-title huerta"><a href="detalle-huerta.html">Tallo Verde</a></h4>
									</div>
									<p class="producto-precio"><span>$40</span> x kg.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut error officia placeat illo alias cum minima dignissimos accusantium earum incidunt.</p>

									<form>
										<div class="form-group row">
											<label for="cantidad" class="col-12 col-lg-3 col-form-label">Cantidad</label>
											<div class="col-12 col-lg-9">
												<select class=" form-control custom-select mr-sm-2" id="cantidad">
													<option selected>Elegir...</option>
													<option value="1">1 kg</option>
													<option value="2">2 kg</option>
													<option value="3">3 kg</option>
												</select>
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12 boton-agregar">
												<button class="btn btn-terciary btn-small" id="js-btn-agregar" data-dismiss="modal" onclick="myFunction()">Agregar</button>
<!--
												<div class="col-12">
													<a href="confirmacion-paso-1.html" class="btn btn-terciary btn-small">Agregar</a>
												-->
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	@endsection