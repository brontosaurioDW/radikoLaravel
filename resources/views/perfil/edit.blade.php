@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('header-class', 'huerta-detalle')

@section ('content')

	<div class="main-wrapper relative small-height">
		<section class="container">
			
			<div class="row">

				<div class="col-xs-12 col-md-5 col-lg-3">
					<h2>Mis datos</h2>
					
					<div class="user-info">
						@if ( !empty($usuario->foto) ) 
							<img class="img-fluid" src="{{ $usuario->foto }}" alt="{{ $usuario->name }}">
						@else
							<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $usuario->name }}">
						@endif

						<ul class="simple-list">
							<li>
								<span class="semi-bold">Nombre:</span> 
								<span>{{ $usuario->name }}</span>
							</li>
							<li>
								<span class="semi-bold">Apellido:</span> 
								<span>{{ $usuario->last_name }}</span>
							</li>
							<li>
								<span class="semi-bold">Email:</span> 
								<span>{{ $usuario->email }}</span>
							</li>
							<li>
								<span class="semi-bold">Teléfono:</span> 
								<span>{{ $usuario->telephone }}</span>
							</li>
							<li>
								<span class="semi-bold">Foto:</span> 
								<span>{{ $usuario->foto }}</span>
							</li>
							<li>
								<span class="semi-bold">Estado:</span> 
								<span>{{ $usuario->estado }}</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-xs-12 col-md-7 col-lg-9">
					<h2>Editar tu perfil</h2>

					<form action="{{ route('perfil.update', ['id' => $usuario->id]) }}" method="post" class="form">
						@csrf

						@method('PUT')

						<div class="row-form">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name"  value="{{ old('name', $usuario->name) }}">
							@if($errors->has('name'))
							<small class="text-danger">{{ $errors->first('name') }}</small>
							@endif
						</div>

						<div class="row-form">
							<label for="last_name">Apellido</label>
							<input type="text" name="last_name" id="last_name"  value="{{ old('last_name', $usuario->last_name) }}">
							@if($errors->has('last_name'))
							<small class="text-danger">{{ $errors->first('last_name') }}</small>
							@endif
						</div>

						<div class="row-form">
							<label for="last_name">Contraseña</label>
							<input type="password" name="password" id="password"  value="">
							@if($errors->has('password'))
							<small class="text-danger">{{ $errors->first('password') }}</small>
							@endif
						</div>

						<div class="row-form">
							<label for="last_name">Teléfono</label>
							<input type="text" name="telephone" id="telephone"  value="{{ old('telephone', $usuario->telephone) }}">
							@if($errors->has('telephone'))
							<small class="text-danger">{{ $errors->first('telephone') }}</small>
							@endif
						</div>
						
						<button class="btn btn-primary btn-medium">Guardar cambios</button>
					</form>
				</div>
			</div>
		</section>
	</div>

@endsection