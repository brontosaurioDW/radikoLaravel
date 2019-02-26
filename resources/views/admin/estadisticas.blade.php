@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
		@include ('admin.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Estadísticas</h3>				
					</div>

					<div class="row">
						<div class="col-sm-12">	
							<h4 class="my-4">Pedidos</h4>
							<ul class="details">
								<li>
									<span class="bold">Pedidos totales:</span> {{ $totalpedidos}}
								</li>
								<li>
									<span class="bold">Pedidos entregados:</span>
								</li>
								<li>
									<span class="bold">Pedidos pendientes de pago:</span>
								</li>
								<li>
									<span class="bold">Pedidos pendientes de entrega:</span>
								</li>
								<li>
									<span class="bold">Pedidos cancelados por el cliente:</span>
								</li>
								<li>
									<span class="bold">Pedidos cancelados por la huerta:</span>
								</li>
								<li>
									<span class="bold">Pedidos cancelados por el administrador:</span>
								</li>
							</ul>
						</div>
					</div>	
					
					<div class="row">
						<div class="col-sm-12">	
							<h4 class="my-4">Usuarios</h4>
							<ul class="details">
								<li>
									<span class="bold">Usuarios totales:</span> {{ $totalusuarios}}
								</li>
								<li>
									<span class="bold">Huertas registradas:</span> {{ $totalhuertas}}
								</li>
								<li>
									<span class="bold">Clientes registrados:</span> {{ $totalclientes}}
								</li>
								
							</ul>
						</div>
					</div>	
				</div>
			</div>
		</section>
	</div>

@endsection