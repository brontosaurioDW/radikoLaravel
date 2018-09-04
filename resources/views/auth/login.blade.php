@extends ('layouts.auth')

@section ('title', 'Radiko')


@section ('content')

<div class="auth">
	<div class="container-fluid">
		<div class="d-flex flex info-left">
			<div class="info">
				<a class="btn btn-link back-button-login" href="{{ url('/') }}">
					<i class="fas fa-chevron-left"></i>
					Volver
				</a>
			</div>
			<div class="form">
				<div>
					<h1>Login</h1>
					<div class="row-form">
						<label class="sr-only">Usuario o email</label>
						<input type="text" name="user" placeholder="Usuario o email">
					</div>
					<div class="row-form">
						<label class="sr-only">Contraseña</label>
						<input type="password" name="password" placeholder="Contraseña">
					</div>
					<div class="row-form">
						<div class="remember checkbox">
							<label>
								<input type="checkbox" name="remember">
								<span>Recordarme</span>
							</label>
						</div>
					</div>
					<div class="row-form">
						<a href="{{ url('/') }}" class="btn btn-secondary">Ingresar</a>
						<a href="{{ url('/registro') }}">¿No tenés cuenta? <span class="bold uppercase">Regístrate</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
