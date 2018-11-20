@extends ('layouts.master')

@section ('title', 'Radiko')

{{-- @section ('header-class', 'huerta-detalle') --}}

@section ('content')
		
	<div class="main-wrapper relative">
		<section class="huerta-detalle">
			<div class="container-fluid">
				<div class="header-huerta rdk-grape bg-trama-b d-flex justify-content-end">
					<div class="diagonal bg-trama">
						<h2 class="huerta-title	">{{$huerta->huerta}}</h2>
					</div>
				</div>
			</div>		

			<div class="d-none" id="js-dummy-alert">
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

			<div class="container">
				<a href="{{ url('/') }}" class="link">
					<i class="fas fa-chevron-left"></i>
					<span>volver</span>
				</a>
			</div>

			<div class="tabs-outline">
				<div class="container">
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

		
			<div class="container">
				<div class="tab-content">
					<div class="tab-pane fade" id="huerta-productos-listado" role="tabpanel" aria-labelledby="huerta-productos-listado">

						{{-- @foreach ($huerta->productos as $producto)
						
						{{ $producto->producto }}
						{{ $producto->descripcion }}
						{{ $producto->marca }}
						{{ $producto->precio }}
						{{ $producto->foto }}
						{{ $producto->estado }}

						@endforeach --}}

						<div class="row">
							<div class="col-xs-12 d-none d-lg-block col-lg-3">
								{{-- FILTROS LATERALES  --}}
								<div class="sidebar-filtros">
									<h3>Categoría</h3>
									<ul>
										<li>
											<label class="checkbox clearfix">
												<input type="checkbox" name="cat-1">
												<span class="checkmark"></span>
												<span class="float-left">Frutas</span>
												<span class="light float-right">(85)</span>
											</label>
										</li>
										<li>
											<label class="checkbox clearfix">
												<input type="checkbox" name="cat-1">
												<span class="checkmark"></span>
												<span class="float-left">Verduras</span>
												<span class="light float-right">(85)</span>
											</label>
										</li>
										<li>
											<label class="checkbox clearfix">
												<input type="checkbox" name="cat-1">
												<span class="checkmark"></span>
												<span class="float-left">Harinas</span>
												<span class="light float-right">(85)</span>
											</label>
										</li>
										<li>
											<label class="checkbox clearfix">
												<input type="checkbox" name="cat-1">
												<span class="checkmark"></span>
												<span class="float-left">Granja</span>
												<span class="light float-right">(85)</span>
											</label>
										</li>
										<li>
											<label class="checkbox clearfix">
												<input type="checkbox" name="cat-1">
												<span class="checkmark"></span>
												<span class="float-left">Lácteos</span>
												<span class="light float-right">(85)</span>
											</label>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-xs-12 col-lg-9">
								{{-- BUSCADOR  --}}
								<form action="" method="" class="form">
									<div class="row">
										<div class="col-md-4 offset-md-8">
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

								<div class="huerta-productos">
									<div class="d-flex flex-wrap justify-content-between">

										@foreach ($productos as $producto)

											<div class="card no-border">
												<a href="#" class="d-flex" data-toggle="modal" data-target="#producto-detalle">
													<div class="img-wrapper">
														<img class="card-img-top" src="{{ url('storage/images/'.$producto->foto) }}" alt="Card image cap">
													</div>
													<div class="card-info dark-border">
														<h3>{{ $producto->producto }}</h3>
														<div class="more-info">
															<span class="categoria d-block">{{ $producto->producto }}</span>
															<span class="precio d-block">
																<span class="bold">{{ $producto->precio }}</span> x {{ $producto->unidadDeMedida->unidad }}.
															</span>
															<i class="far fa-chevron-right"></i>
														</div>
													</div>								
												</a>
												<span class="envio">
													<i class="fal fa-truck"></i>
													<span>Costo de envío: $150 / $195</span>
												</span>
											</div>

										@endforeach

									</div>
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
										<li class="list-group-item"><b>Foto:</b> <img src="{{ url("storage/images/huertas/$huerta->foto") }}" alt=""></li>
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
					
																
					<ul class="ratings-cat">
						<li>
							<div class="name">Excelente</div>
							<div class="middle">
								<span style="width: 58.0336%;"></span>
							</div>
							<div class="amount d-none d-md-block">242</div>
						</li>
						<li>
							<div class="name">Muy bueno</div>
							<div class="middle">
								<span style="width: 27.3381%;"></span>
							</div>
							<div class="amount d-none d-md-block">114</div>
						</li>
						<li>
							<div class="name">Normal</div>
							<div class="middle">
								<span style="width: 5.7554%;"></span>
							</div>
							<div class="amount d-none d-md-block">24</div>
						</li>
						<li>
							<div class="name">Regular</div>
							<div class="middle">
								<span style="width: 4.31655%;"></span>
							</div>
							<div class="amount d-none d-md-block">18</div>
						</li>
						<li>
							<div class="name">Malo</div>
							<div class="middle">
								<span style="width: 4.55635%;"></span>
							</div>
							<div class="amount d-none d-md-block">19</div>
						</li>
					</ul>

					<ul class="list-opiniones d-flex justify-content-between flex-wrap">
						@foreach ($huerta->reviews as $review)
							<li class="opinion-wrapper media">
								<div class="media-img">
									@if ( !empty($review->usuario->foto) ) 
										<img class="mr-3 img-fluid" src="{{ $review->usuario->foto }}" alt="{{ $review->usuario->name }}">
									@else
										<img class="mr-3 img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $review->usuario->name }}">
									@endif
								</div>
								<div class="media-body">

									<h3>{{ $review->usuario->name }}</h3>

									<p>{{ $review->review }} asdfdghjhjesdf asiodA JKLD ASDJIAS DIPASD hajsd AUJ HO</p>

									<span class="stars">
										<span>
											{{$review->stars}}.0
										</span>
										<i class="fas fa-star" aria-hidden="true"></i>
									</span>
									
								</div>
							</li>
						@endforeach
					</ul>

					@if(Auth::check())

						<form action="{{ route('huertas.comments' , ['id' => $huerta->id]) }}" method="post" class="form form-bg">

							@csrf
							@method('PUT')

							<h2>Dejanos tu opinón</h2>

							<div class="form-group">
								<label for="comentario" class="sr-only">Comentario</label>
								<textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Contanos tu experiencia con la huerta."></textarea>
							</div>

							<label class="sr-only">Calficación</label>

							<div class="d-flex votar">
								<div>
									<input type="radio" name="ranking" id="stars1" value="1">
									<label class="sr-only" for="stars1">
										1 Estrella
									</label>
								</div>
								<div>
									<input type="radio" name="ranking" id="stars2" value="2">
									<label class="sr-only" for="stars2">
										2 Estrellas
									</label>
								</div>
								<div>
									<input type="radio" name="ranking" id="stars3" value="3">
									<label class="sr-only" for="stars3">
										3 Estrellas
									</label>
								</div>
								<div>
									<input type="radio" name="ranking" id="stars4" value="4">
									<label class="sr-only" for="stars4">
										4 Estrellas
									</label>
								</div>
								<div>
									<input type="radio" name="ranking" id="stars5" value="5">
									<label class="sr-only" for="stars5">
										5 Estrellas
									</label>
								</div>
							</div>

							<button type="submit" class="btn btn-primary btn-medium">Comentar</button>
						</form>

					@else
						<p>Para dejar un comentario debes <a href="{{ route( 'login' ) }}" class="link">iniciar sesion</a></p>
					@endif								

					</div>
				</div>
			</div>
		</section>

		{{-- DESCARGA LA APP  --}}
		@include ('elementos.descarga-app-violeta')
	</div>

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
								<h3 class="producto-title">Tomate</h3>
								<h4 class="producto-title huerta"><a href="detalle-huerta.html">Tallo Verde</a></h4>
				
								<p class="producto-precio"><span>$40</span> x kg.</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut error officia placeat illo alias cum minima dignissimos accusantium earum incidunt.</p>

								<form method="" action="">
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

											{{-- <div class="col-12">
												<a href="confirmacion-paso-1.html" class="btn btn-terciary btn-small">Agregar</a>
											</div> --}}
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

@endsection