@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper cpanel relative">
	<section class="container">
		<div class="c-panel-wrapper bg-trama rdk-charcoal">
			<div class="c-panel-inner-wrapper">
				<div class="title">
					<h3>Editar perfil del usuario</h3>
				</div>

				<form method="post" action="{{ route('cpanel.perfil.update', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data" class="form">
					@csrf
					@method('PUT')

					<div class="row">
						<div class="col-sm-8">
							<div class="row-form">
								<label for="name">Foto</label>
								<input type="file" accept="image/*" id="foto" name="foto">
								@if($errors->has('foto'))
								<small class="text-danger">{{ $errors->first('foto') }}</small>
								@endif
							</div>
							<div class="row-form">
								<label for="name">Nombre</label>
								<input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}">
								@if($errors->has('name'))
								<small class="text-danger">{{ $errors->first('name') }}</small>
								@endif
							</div>
							<div class="row-form">
								<label for="last_name">Apellido</label>
								<input type="text" id="last_name" name="last_name" value="{{ old('last_name', Auth::user()->last_name) }}">
								@if($errors->has('last_name'))
								<small class="text-danger">{{ $errors->first('last_name') }}</small>
								@endif
							</div>
							<div class="row-form">
								<label for="telephone">Teléfono</label>
								<input type="text" id="telephone" name="telephone" value="{{ old('telephone', Auth::user()->telephone) }}">
								@if($errors->has('telephone'))
								<small class="text-danger">{{ $errors->first('telephone') }}</small>
								@endif
							</div>
						</div>
						<div class="col-sm-4">
							<div class="user-info">
								@if ( !empty(Auth::user()->foto) )
								<img class="img-fluid" src="{{ url('storage/images/usuarios/'.Auth::user()->foto) }}" alt="">
								@else
								<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="">
								@endif
							</div>
						</div>
					</div>
					
					<div class="buttons d-flex justify-content-end align-items-center">
						<a class="link" href="{{ url()->previous() }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
						<button type="submit" class="btn btn-primary btn-medium">Guardar cambios</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>

@endsection