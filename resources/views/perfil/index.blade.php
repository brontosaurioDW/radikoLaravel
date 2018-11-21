@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper relative">
		<section class="container">
				<h2>Mi perfil</h2>

				<div class="row">
					<div class="col-xs-12 col-md-2">
						

						@if ( !empty($usuario->foto) ) 
							<img class="img-fluid" src="{{ $usuario->foto }}" alt="{{ $usuario->name }}">
						@else
							<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $usuario->name }}">
						@endif
					</div>

					<div class="col-xs-12 col-md-10">
						

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

						<a class="btn btn-primary btn-medium" href="{{ route('perfil.edit' , Auth::user()->id ) }}">
							Editar perfil
						</a>	
					</div>				
				</div>		
		</section>
	</div>

@endsection