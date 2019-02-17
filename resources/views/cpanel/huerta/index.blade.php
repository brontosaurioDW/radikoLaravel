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
				<h3>Datos de la huerta</h3>
				<div class="row">
					<div class="col-9">
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><b>Nombre:</b> {{$usuarioHuerta->huerta->huerta}}</li>
							<li class="list-group-item"><b>Cuit:</b> {{$usuarioHuerta->huerta->cuit}}</li>
							<li class="list-group-item"><b>Razón Social:</b> {{$usuarioHuerta->huerta->razon_social}}</li>
							<li class="list-group-item"><b>Dirección:</b> {{$usuarioHuerta->huerta->direccion}}</li>
							<li class="list-group-item"><b>Teléfono:</b> {{$usuarioHuerta->huerta->telefono}}</li>
							<li class="list-group-item"><b>E-mail:</b> {{$usuarioHuerta->huerta->email}}</li>
						</ul>
					</div>
					<div class="col-3">
						<img class="img-fluid" src="{{ url('storage/images/huertas/'.$usuarioHuerta->huerta->foto) }}" alt="" />
					</div>
				</div>
			</div>

		</div>
	</section>
</div>

@endsection