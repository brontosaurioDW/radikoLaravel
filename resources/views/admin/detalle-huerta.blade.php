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
						<div class="col-sm-12">						
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
									<span class="bold">Dirección:</span>{{ $huerta->direccion }}
								</li>
								<li>
									<span class="bold">Teléfono:</span>{{ $huerta->telefono }}
								</li>
								<li>
									<span class="bold">Email:</span>{{ $huerta->email }}
								</li>
								<li>
									<span class="bold">Referente:</span>
								</li>
								<li>
									<span class="bold">Tipo de Huerta:</span> 
								</li>
							</ul>
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