	@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper relative small-height">
		<section class="container detalle-pedido">

		{{$pedido}}
			<a href="#" class="link-back">volver a Perfil</a>

			<div class="row justify-content-between">
				<div class="col-md-6">
					<div class="grey-box">
						<div class="title text-left">
							<h2>Orden</h2>
						</div>
						<div class="row">
							<div class="col-md-12">
								<ul class="m-0">
									<li class=" d-flex justify-content-between align-items-center">
										<span>Pedido número:</span>
										<span class="price-black bold">487</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="grey-box">
						<div class="title text-left small">
							<h2>Pedido</h2>
						</div>
						<ul>
							<li class="d-flex justify-content-between align-items-center">
								<span>2 kg.  Tomate</span>
								<span class="price-black">$80</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>1 kg.  Frutilla</span>
								<span class="price-black">$50</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>1/2 kg.  Blueberry</span>
								<span class="price-black">$90</span>
							</li>
						</ul>
						<ul>
							<li class="bold d-flex justify-content-between align-items-center">
								<span>Subtotal:</span>
								<span class="price-black bold">$220</span>
							</li>
							<li class="bold d-flex justify-content-between align-items-center">
								<span>Costo de envío:</span>
								<span class="price-black bold">$50</span>
							</li>
						</ul>
					</div>
					<div class="grey-box">
						<div class="total m-0">
							<div class="title d-flex align-items-center justify-content-between m-0">
								<h2 class="uppercase">Total</h2>
								<div class="price">$270</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="grey-box">
						<div class="title text-left">
							<h2>Huerta</h2>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 class="bold">Tallo Verde</h3>
								<ul class="mb-4">
									<li>Ruta 192 Km. 8 - Open Door - Luján</li>
									<li>0-800-88-TALLO (82556)</li>
									<li>huerta@talloverde.com</li>
								</ul>
							</div>
						</div>
						<a href="#" class="btn btn-small btn-primary">Contactar</a>
					</div>
					<div class="grey-box">
						<div class="title text-left small">
							<h2>Entrega</h2>
						</div>
						<div class="row">
							<div class="col-md-12">
								<ul class="mb-4">
									<li>Lunes 23 de Julio</li>
									<li>12hs - 14hs</li>
								</ul>
							</div>
						</div>
						<a href="#" class="btn btn-small btn-primary">Cambiar</a>
					</div>
					<div class="grey-box">
						<div class="title text-left">
							<h2>Dirección</h2>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 class="bold">Casa</h3>
								<ul class="mb-4">
									<li>Salguero 900</li>
									<li>Almagro</li>
									<li>(011) 11 5533 6665</li>
								</ul>
							</div>
						</div>
						<a href="#" class="btn btn-small btn-primary">Cambiar</a>
					</div>
				</div>
			</div>
	
		</section>
	</div>

@endsection