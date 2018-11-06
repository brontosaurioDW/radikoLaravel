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

			<form action="{{ route('auth.doLogin')}}" method="post">
				<div class="form">
					@csrf
					<h1>Login</h1>
					@if(Session::has('status'))
					<div class="text-danger">{{ Session::get('status') }}</div>
					@endif
					<div class="row-form">
						<label class="sr-only">Usuario o email</label>
						<input type="text" id="email" name="email" value="{{ old('email')}}" placeholder="Usuario o email">
						@if($errors->has('email'))
						<small class="text-danger">{{ $errors->first('email') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label class="sr-only">Contraseña</label>
						<input type="password" name="password" id="password" placeholder="Contraseña">
						@if($errors->has('password'))
						<small class="text-danger">{{ $errors->first('password') }}</small>
						@endif
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

						<button class="btn btn-secondary">Ingresar</button>

						<a href="{{ url('/registro') }}">¿No tenés cuenta? <span class="bold uppercase">Regístrate</span></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
