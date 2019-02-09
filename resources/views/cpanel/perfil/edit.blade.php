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
				<h3>Editar perfil del usuario (huerta)</h3>

				<form method="POST" action="{{ route('cpanel.perfil.update', ['id' => Auth::user()->id]) }}">
					@csrf

					<div class="user-info">
						@if ( !empty(Auth::user()->foto) )
						<img class="img-fluid" src="{{ url('storage/images/usuarios/'.Auth::user()->foto) }}" alt="">
						@else
						<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="">
						@endif
					</div>

					<div class="form-group">
						<label for="name">Foto</label>
						<input type="file" class="form-control" id="foto" name="foto">
					</div>
					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
					</div>
					<div class="form-group">
						<label for="last_name">Apellido</label>
						<input type="text" class="form-control" id="last_name" name="last_n ame" value="{{ Auth::user()->last_name }}">
					</div>
					<div class="form-group">
						<label for="telephone">Teléfono</label>
						<input type="text" class="form-control" id="telephone" value="{{ Auth::user()->telephone }}">
					</div>

					<button type="submit" class="btn btn-primary btn-medium">Guardar cambios</button>
				</form>
			</div>
		</div>
	</section>
</div>

@endsection