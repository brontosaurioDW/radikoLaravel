@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">
		<div class="row">

			<div class="col-3">
				@include ('cpanel.nav')
			</div>

			<div class="col-9">	
				<h3>Editar perfil del usuario (huerta)</h3>

				<form method="post" action="{{ route('cpanel.perfil.update', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="user-info">
						@if ( !empty(Auth::user()->foto) )
						<img class="img-fluid" src="{{ url('storage/images/usuarios/'.Auth::user()->foto) }}" alt="">
						@else
						<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="">
						@endif
					</div>

					<div class="form-group">
						<label for="name">Foto</label>
						<input type="file" class="form-control" accept="image/*" id="foto" name="foto">
						@if($errors->has('foto'))
						<small class="text-danger">{{ $errors->first('foto') }}</small>
						@endif
					</div>
					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}">
						@if($errors->has('name'))
						<small class="text-danger">{{ $errors->first('name') }}</small>
						@endif
					</div>
					<div class="form-group">
						<label for="last_name">Apellido</label>
						<input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', Auth::user()->last_name) }}">
						@if($errors->has('last_name'))
						<small class="text-danger">{{ $errors->first('last_name') }}</small>
						@endif
					</div>
					<div class="form-group">
						<label for="telephone">Teléfono</label>
						<input type="text" class="form-control" id="telephone" name="telephone" value="{{ old('telephone', Auth::user()->telephone) }}">
						@if($errors->has('telephone'))
						<small class="text-danger">{{ $errors->first('telephone') }}</small>
						@endif
					</div>

					<button type="submit" class="btn btn-primary btn-medium">Guardar cambios</button>
				</form>
			</div>
			
		</div>
	</section>
</div>

@endsection