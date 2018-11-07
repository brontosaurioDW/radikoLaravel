@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('header-class', 'huerta-detalle')

@section ('content')

<section class="container py-5">
	<div class="row">
		<div class="col">
			<h2 class="mb-4">Editar perfil de usuario</h2>



			<form action="{{ route('perfil.update', ['id' => $usuario->id]) }}" method="post">
				@csrf

				@method('PUT')

				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" name="name" id="name" class="form-control" value="{{ old('name', $usuario->name) }}">
					@if($errors->has('name'))
					<small class="text-danger">{{ $errors->first('name') }}</small>
					@endif
				</div>

				<div class="form-group">
					<label for="last_name">Apellido</label>
					<input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $usuario->last_name) }}">
					@if($errors->has('last_name'))
					<small class="text-danger">{{ $errors->first('last_name') }}</small>
					@endif
				</div>

				<div class="form-group">
					<label for="last_name">Contraseña</label>
					<input type="password" name="password" id="password" class="form-control" value="{{ old('password', $usuario->password) }}">
					@if($errors->has('password'))
					<small class="text-danger">{{ $errors->first('password') }}</small>
					@endif
				</div>

				<div class="form-group">
					<label for="last_name">Teléfono</label>
					<input type="text" name="telephone" id="telephone" class="form-control" value="{{ old('telephone', $usuario->telephone) }}">
					@if($errors->has('telephone'))
					<small class="text-danger">{{ $errors->first('telephone') }}</small>
					@endif
				</div>
				
				<button class="btn btn-primary">Guardar cambios</button>

			</form>


		</div>
	</div>
</section>

@endsection