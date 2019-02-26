@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
		@include ('admin.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Detalle del cliente</h3>				
					</div>

					<div class="row">
						<div class="col-sm-8">					
							<ul class="details">
								<li>
									<span class="bold">Nombre:</span> {{ $cliente->name }} {{ $cliente->last_name }}
								</li>
								<li>
									<span class="bold">Dirección:</span>
									<ul>
									@foreach ($direcciones as $direccion)
										<li>
											<span>{{$direccion->referencia}}</span>
										</li>
									@endforeach	
									</ul>
								</li>
								<li>
									<span class="bold">Teléfono:</span> {{ $cliente->telephone }}
								</li>
								<li>
									<span class="bold">Email:</span> {{ $cliente->email }}
								</li>
								<li>
									<span class="bold">Estado: </span> {{ $cliente->estado }} 
								</li>
								<li>
									<span class="bold">Fecha de alta: </span> {{ $cliente->created_at->format('d-M-Y') }} 
								</li>
							</ul>
						</div>
						
						<div class="col-sm-4">
							@if ( !empty($cliente->foto) )
								<img class="img-fluid" src="{{ url('storage/images/usuarios/'.$cliente->foto) }}" alt="{{ $cliente->name }} {{ $cliente->last_name }}" />
							@else
								<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ $cliente->name }} {{ $cliente->last_name }}">
							@endif
						</div>
					</div>	
				
					<div class="buttons d-flex justify-content-end align-items-center">
						<a class="link" href="{{ url()->previous() }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
						<a class="btn btn-primary btn-small" href="{{ url()->previous() }}">Editar</a>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection