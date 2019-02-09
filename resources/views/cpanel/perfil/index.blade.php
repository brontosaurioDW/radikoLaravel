@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">

		<h2 class="mb-4">usuario tipo huerta</h2>

		<div class="row">


			<div class="col-3">

				@include ('cpanel.nav')

			</div>

			<div class="col-9">	
				<h3>Perfil del usuario (huerta)</h3>

				@if(Auth::check())
				<div class="row">
					<div class="col-8">
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><b>Nombre:</b> {{Auth::user()->name}}</li>
							<li class="list-group-item"><b>Apellido:</b> {{Auth::user()->last_name}}</li>
							<li class="list-group-item"><b>Email:</b> {{Auth::user()->email}}</li>
							<li class="list-group-item"><b>Teléfono:</b> {{Auth::user()->telephone}}</li>
						</ul>
					</div>
					<div class="col-4">
						<img class="img-fluid" alt="{{Auth::user()->name}}" src="{{ url('storage/images/usuarios/'.Auth::user()->foto)}}">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="{{ route('cpanel.perfil.edit') }}" class="btn btn-primary btn-medium">Editar perfil</a>
					</div>
				</div>
				@endif
				
			</div>
		</div>
	</section>
</div>

@endsection