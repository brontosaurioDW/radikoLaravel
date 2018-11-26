@extends ('layouts.auth')

@section ('title', 'Radiko')

@section ('content')

<div class="auth error d-flex">
	<div class="container-fluid">
		<div class="d-flex flex flex-wrap info-left login">
			<div class="info bg-trama rdk-tomato d-flex align-items-center justify-content-center">
				{{-- <a href="{{ url('/') }}" class="link">
					<i class="fas fa-chevron-left"></i>
					<span>volver</span>
				</a> --}}
				<h1 class="sr-only">
				    <a href="#" class="logo"> Rádiko </a>
				</h1>

				<h2>
					<span>Oh no! :(</span>	
					Algo salió mal
				</h2>
			</div>

			<div class="error-msg">
				<h3> No tenés acceso a esta página... </h3>
				<p>No te preocupes! podés volver al inicio y encontrar lo que estás buscando</p>
				<button href="#" class="btn btn-primary btn-small">Volver al inicio</button>
			</div>
		</div>
	</div>
</div>

@endsection








