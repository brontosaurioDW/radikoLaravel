	@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper relative small-height">
		<section class="container profile">
			
			<div class="row">
				<div class="col-xs-12 col-md-5 col-lg-3">
					<h2>Mi perfil</h2>
					@if(Auth::check())
					<div class="user-info">
						@if ( !empty(Auth::user()->foto) )
							<img class="img-fluid" src="{{ url('storage/images/usuarios/'.Auth::user()->foto) }}" alt="{{ Auth::user()->name }}">
						@else
							<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ Auth::user()->name }}">
						@endif

						<ul class="simple-list">
							<li>
								<span class="semi-bold">Nombre:</span> 
								<span>{{ Auth::user()->name }}</span>
							</li>
							<li>
								<span class="semi-bold">Apellido:</span> 
								<span>{{ Auth::user()->last_name }}</span>
							</li>
							<li>
								<span class="semi-bold">Email:</span> 
								<span>{{ Auth::user()->email }}</span>
							</li>
							<li>
								<span class="semi-bold">Teléfono:</span> 
								<span>{{ Auth::user()->telephone }}</span>
							</li>
						</ul>	
					</div>
					@endif
				</div>
						
				<div class="col-xs-12 col-md-7 col-lg-9">
					<h3>Eliminar Dirección</h3>
					
					<p>¿Estás seguro que deseas eliminar esta direccion?</p>
					
					<ul class="list-boxed orders mb-5">
						<li class="list-wrapper media">
							<div class="media-body">
								<h4>{{$direccion->referencia}}</h4>
								<ul class="simple-list">
									<li>
										<span>{{$direccion->calle}} {{$direccion->numero}} {{$direccion->piso}} {{$direccion->departamento}}</span>
									</li>
									<li>
										<span>{{$direccion->telefono}}</span>
									</li>
									<li>
										<span>{{$direccion->aclaracion}}</span>
									</li>
								</ul>
								<form method="POST" action="{{ route('perfil.direccion.destroyDireccion', ['id' => $direccion->id] ) }}">
								@csrf
								@method('DELETE')		

									<div class="buttons d-flex justify-content-end align-items-center">
										<a class="link" href="{{ url()->previous() }}">
											<i class="fas fa-chevron-left"></i>
											<span>Volver</span>
										</a>
										<button class="btn btn-secondary btn-small">Eliminar</button>
									</div>		
								</form>	
							</div>
						</li>
					</ul>
				</div>					
			</div>		
		</section>
	</div>

@endsection