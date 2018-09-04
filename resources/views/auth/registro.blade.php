@extends ('layouts.auth')

@section ('title', 'Radiko')


@section ('content')

		<div class="auth">
			<div class="container-fluid">
				<div class="d-flex flex info-right">
					<form class="form" action="{{ url('/registro-mensaje') }}">
						<div>
							<h1>Registro</h1>
							<div class="row-form">
								<label class="sr-only">Email</label>
								<input type="text" name="user" placeholder="Email">
							</div>
							<div class="row-form">
								<label class="sr-only">Contraseña</label>
								<input type="password" name="password" placeholder="Contraseña">
							</div>
							<div class="row-form">
								<label class="sr-only">Confirmar contraseña</label>
								<input type="password" name="confirmPassword" placeholder="Confirmar contraseña">
							</div>
							<div class="row-form">
								<button type="submit" class="btn btn-secondary">Registrarme</button>
								<a href="{{ url('/login') }}">¿Ya tenés cuenta? <span class="bold uppercase">Ingresá</span></a>
							</div>
						</div>
					</form>
					
					<div class="info">
						<a class="btn btn-link green back-button-registro float-right" href="{{ url('/') }}">
							<i class="fas fa-chevron-left"></i>
							Volver
						</a>
					</div>
				</div>
			</div>
		</div>


@endsection


