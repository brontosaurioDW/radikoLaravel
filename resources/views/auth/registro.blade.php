@extends ('layouts.auth')

@section ('title', 'Radiko')

@section ('content')

<div class="auth">
	<div class="container-fluid">
		<div class="d-flex flex info-right">

			<form action="{{ route('auth.doRegistro') }}" method="post">
				@csrf
				<div class="form">
					<h1>Registro 2</h1>
					<div class="row-form">
						<label class="sr-only">Email</label>
						<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
						@if($errors->has('email'))
						<small class="text-danger">{{ $errors->first('email') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label class="sr-only">Contraseña</label>
						<input type="password" name="password" id="password"  placeholder="Contraseña">
						@if($errors->has('password'))
						<small class="text-danger">{{ $errors->first('password') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="password_confirmation" class="sr-only">Confirmar contraseña</label>
						<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
					</div>
					<div class="row-form">

						<button class="btn btn-secondary">Registrarme</button>

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