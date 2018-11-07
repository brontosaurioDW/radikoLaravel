@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('header-class', 'huerta-detalle')

@section ('content')

<section class="container py-5">
	<div class="row">
		<div class="col">
			<h2 class="mb-4">Información de usuario</h2>

			<ul class="list-group mb-4">
				<li class="list-group-item">Nombre: {{ $usuario->name }}</li>
				<li class="list-group-item">Apellido: {{ $usuario->last_name }}</li>
				<li class="list-group-item">Email: {{ $usuario->email }}</li>
				<li class="list-group-item">Teléfono: {{ $usuario->telephone }}</li>
				<li class="list-group-item">Foto: {{ $usuario->foto }}</li>
				<li class="list-group-item">Estado: {{ $usuario->estado }}</li>
			</ul>

			<a class="btn btn-primary" href="{{ route('perfil.edit' , Auth::user()->id ) }}">
				Editar información
			</a>

		</div>
	</div>
</section>

@endsection