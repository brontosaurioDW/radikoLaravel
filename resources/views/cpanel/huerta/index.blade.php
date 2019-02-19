@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper cpanel relative">
	<section class="container">
		@include ('cpanel.nav')

		<div class="c-panel-wrapper bg-trama rdk-charcoal">
			<div class="c-panel-inner-wrapper">
				<div class="title">
					<h3>Datos de la huerta</h3>
				</div>
				
				<div class="row">
					<div class="col-sm-8">
						<ul class="details">
							<li>
								<span class="bold">Nombre:</span> {{$usuarioHuerta->huerta->huerta}}
							</li>
							<li>
								<span class="bold">Cuit:</span> {{$usuarioHuerta->huerta->cuit}}
							</li>
							<li>
								<span class="bold">Razón Social:</span> {{$usuarioHuerta->huerta->razon_social}}
							</li>
							<li>
								<span class="bold">Dirección:</span> {{$usuarioHuerta->huerta->direccion}}
							</li>
							<li>
								<span class="bold">Teléfono:</span> {{$usuarioHuerta->huerta->telefono}}
							</li>
							<li>
								<span class="bold">E-mail:</span> {{$usuarioHuerta->huerta->email}}
							</li>
						</ul>
					</div>
					<div class="col-sm-4">
						<img class="img-fluid" src="{{ url('storage/images/huertas/'.$usuarioHuerta->huerta->foto) }}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection