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
						<div class="col-sm-12 col-lg-3">
							<div class="rdk-grape" style="padding: 25px; color: white; display:flex; align-items: center;">
								<i class="fal fa-apple-crate" style="font-size: 26px; margin-right: 17px"></i>
								<div style="display: flex; flex-direction: column;">
									<span class="bold" style="font-size: 24px; margin-bottom: -8px">{{ $totalPedidos }}</span>
									<span>pedidos totales</span>
								</div>	
							</div>
						</div>
						<div class="col-sm-12 col-lg-3">
							<div class="rdk-tomato" style="padding: 25px; color: white; display:flex; align-items: center;">
								<i class="fal fa-user" style="font-size: 26px; margin-right: 17px"></i>
								<div style="display: flex; flex-direction: column;">
									<span class="bold" style="font-size: 24px; margin-bottom: -8px">{{ $totalUsuarios }}</span>
									<span>usuarios totales</span>
								</div>	
							</div>
						</div>	
						<div class="col-sm-12 col-lg-3">
							<div class="rdk-pepper" style="padding: 25px; color: white; display:flex; align-items: center;">
								<i class="fal fa-seedling" style="font-size: 26px; margin-right: 17px"></i>
								<div style="display: flex; flex-direction: column;">
									<span class="bold" style="font-size: 24px; margin-bottom: -8px">{{ $totalHuertas }}</span>
									<span>huertas totales</span>
								</div>	
							</div>
						</div>	
						<div class="col-sm-12 col-lg-3">
							<div class="rdk-corn" style="padding: 25px; color: white; display:flex; align-items: center;">
								<i class="fal fa-box-open" style="font-size: 26px; margin-right: 17px"></i>
								<div style="display: flex; flex-direction: column;">
									<span class="bold" style="font-size: 24px; margin-bottom: -8px">{{ $totalClientes }}</span>
									<span>clientes totales</span>
								</div>	
							</div>
						</div>	
					</div>
					
					<div class="row" style="margin-top: 20px">
						<div class="col-sm-6">
							<div class="row">
								<div class="col">
									<h4 class="my-4">Estados de las huertas</h4>
									<div id="donutchart_estadosHuertas"></div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<h4 class="my-4">Tipos de huertas</h4>
									<div class="row">
										<div class="col-sm-12 col-lg-6">
											<div class="rdk-pepper" style="padding: 10px 25px; color: white; display:flex; align-items: flex-end;">
												<span class="bold" style="font-size: 24px; margin-right: 10px; margin-bottom: -3px;">{{ $totalBasicas }}</span>
												<span>básicas</span>
												
											</div>
										</div>	
										<div class="col-sm-12 col-lg-6">
											<div class="rdk-corn" style="padding: 10px 25px; color: white; display:flex; align-items: flex-end;">
												<span class="bold" style="font-size: 24px; margin-right: 10px; margin-bottom: -3px;">{{ $totalPremium }}</span>
												<span>premium</span>
											</div>
										</div>	
									</div>		
								</div>
							</div>			
						</div>
						<div class="col-sm-6">	
							<h4 class="my-4">Últimas huertas registradas</h4>
							<table class="table">
								<tbody>
									<?php
										foreach($ultimasHuertas as $huerta) {
									?>
										<tr>
											<td class="align-middle">
												@if(!empty($huerta->foto))
													<div style="width: 55px; height: 55px; margin-right: 15px">
														<img class="img-fluid" src="{{ url('storage/images/huertas/'.$huerta->foto) }}" alt="{{ $huerta->huerta }}">
													</div>
												@else
													<div style="width: 55px; height: 55px; margin-right: 15px">
														<img class="img-fluid" src="{{  url('storage/images/user-default.png') }}" alt="imagen por defecto">
													</div>
												@endif
											</td>
											<td class="align-middle">
												{{$huerta->huerta}}
											</td>
											<td class="align-middle" style="color: #898989;">
												{{$huerta->telefono}}
											</td>
										</tr>
									<?php
										} 
									?>
								</body>
							</table>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">	
							<h4 class="my-4">Estados de los pedidos</h4>
							<div id="top_x_div_estadosPedidos"></div>
						</div>
					</div>			
					
				</div>
			</div>
		</section>
	</div>
	
	<!--Google chart-->
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		
		<!--Estados de las huertas-->
		<script type="text/javascript">
			google.charts.load("current", {packages:["corechart"]});
			google.charts.setOnLoadCallback(drawChart);
			
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Estado', 'Cantidad'],
					@foreach ($estadosHuertas as $pastels)
					['{{ $pastels->estado}}', {{ $pastels->total}}],
					@endforeach
				]);

				var options = {
					pieHole: 0.4,
					colors: ['#50D2A4', '#6c757d', '#C94B36', '#DD964D']
				};

				var chart = new google.visualization.PieChart(document.getElementById('donutchart_estadosHuertas'));
				chart.draw(data, options);
			}
		</script>	
		
		<!--Estados de los pedidos-->
		<script type="text/javascript">
			google.charts.load('current', {'packages':['bar']});
			google.charts.setOnLoadCallback(drawStuff);

			function drawStuff() {
				var data = new google.visualization.arrayToDataTable([
					['Pedidos', 'Estados'],
					@foreach ($estadosPedidos as $estadoPedido)
						['{{ $estadoPedido->estado}}', {{ $estadoPedido->total}}],
					@endforeach
				]);

				var options = {
					legend: { position: 'none' },
					/*axes: {
						x: {
							0: { side: 'top', label: 'Pedidos'} // Top x-axis.
						},
						y: {
							0: { side: 'top', label: 'Estados'}
						}
					},*/
					bar: { groupWidth: "70%" },
					colors: ['#7065B0'],
				};

				var chart = new google.charts.Bar(document.getElementById('top_x_div_estadosPedidos'));
				// Convert the Classic options to Material options.
				chart.draw(data, google.charts.Bar.convertOptions(options));
			};
		</script>
			

@endsection