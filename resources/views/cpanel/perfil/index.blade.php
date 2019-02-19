@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper cpanel relative">
	<section class="container">
		@include ('cpanel.nav')

		<div class="c-panel-wrapper bg-trama rdk-charcoal">
			<div class="c-panel-inner-wrapper">
				<div class="title">
					<h3>Perfil del usuario</h3>
				</div>

				@if(Auth::check())
					<div class="row">
						<div class="col-md-8">
							<ul class="details">
								<li>
									<span class="bold">Nombre:</span> {{Auth::user()->name}}
								</li>
								<li>
									<span class="bold">Apellido:</span> {{Auth::user()->last_name}}
								</li>
								<li>
									<span class="bold">Email:</span> {{Auth::user()->email}}
								</li>
								<li>
									<span class="bold">Teléfono:</span> {{Auth::user()->telephone}}
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<img class="img-fluid" alt="{{Auth::user()->name}}" src="{{ url('storage/images/usuarios/'.Auth::user()->foto)}}">
						</div>
					</div>

					<div class="buttons d-flex justify-content-end align-items-center">
						<a href="{{ route('cpanel.perfil.edit') }}" class="btn btn-primary btn-medium">Editar perfil</a>
					</div>
				@endif
			</div>
		</div>
	</section>
</div>

@endsection