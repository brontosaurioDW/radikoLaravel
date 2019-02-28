@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Detalle de la huerta</h3>				
					</div>

					<div class="row">
						<div class="col-sm-8">					
							<ul class="details">
								<li>
									<span class="bold">Huerta:</span> {{ $huerta->huerta }}
								</li>
								<li>
									<span class="bold">CUIT:</span> {{ $huerta->cuit }}
								</li>
								<li>
									<span class="bold">Razón Social:</span> {{ $huerta->razon_social }}
								</li>
								<li>
									<span class="bold">Dirección:</span> {{ $huerta->direccion }}
								</li>
								<li>
									<span class="bold">Teléfono:</span> {{ $huerta->telefono }}
								</li>
								<li>
									<span class="bold">Email:</span> {{ $huerta->email }}
								</li>
								<li>
									<span class="bold">Tipo de Huerta: </span> {{ $huerta->tipoHuerta->tipo }} 
								</li>
								<li>
									<span class="bold">Fecha de alta: </span> {{ $huerta->created_at->format('d-M-Y') }} 
								</li>
							</ul>
						</div>
						
						<div class="col-sm-4">
							@if ( !empty($huerta->foto) )
								<img class="img-fluid" src="{{ url('storage/images/huertas/'.$huerta->foto) }}" alt="{{ $huerta->huerta }}" />
							@else
								<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $huerta->huerta }}">
							@endif
						</div>
					</div>	
					
					<div class="title">
						<h3>Datos del Referente</h3>				
					</div>
						
					<div class="row">
						<div class="col-sm-8">						
							<ul class="details">
								<li>
									<span class="bold">Nombre:</span> {{ $huerta->usuario->name }} {{ $huerta->usuario->last_name }} 
								</li>
								<li>
									<span class="bold">Teléfono: </span> {{$huerta->usuario->telephone }} 
								</li>
								<li>
									<span class="bold">Email: </span> {{$huerta->usuario->email }} 
								</li>
								<li>
									<span class="bold">Estado: </span> {{ $huerta->usuario->estado }} 
								</li>
							</ul>
						</div>
						
						<div class="col-sm-4">
							@if ( !empty($huerta->usuario->foto) )
								<img class="img-fluid" src="{{ url('storage/images/usuarios/'.$huerta->usuario->foto) }}" alt="{{ $huerta->usuario->name }} {{ $huerta->usuario->last_name }}" />
							@else
								<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $huerta->usuario->name }} {{ $huerta->usuario->last_name }}">
							@endif
						</div>
					</div>
					
					<div class="buttons d-flex justify-content-end align-items-center">
						<a class="link" href="{{ route( 'admin.huertas') }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
						<a class="btn btn-primary btn-small" href="{{ route( 'admin.huertas.edit-huerta', ['id' => $huerta->id] ) }}">Cambiar estado</a>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection