	@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper relative small-height">
		<section class="container profile">

				<div class="row">
					<div class="col-xs-12 col-md-5 col-lg-3">
						<h2>Mi perfil</h2>
						@if(Auth::check())
						<div class="user-info">
							@if ( !empty(Auth::user()->foto) )
								<img class="img-fluid" src="{{ url('storage/images/usuarios/'.Auth::user()->foto) }}" alt="{{ Auth::user()->name }}">
							@else
								<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ Auth::user()->name }}">
							@endif

							<ul class="simple-list">
								<li>
									<span class="semi-bold">Nombre:</span> 
									<span>{{ Auth::user()->name }}</span>
								</li>
								<li>
									<span class="semi-bold">Apellido:</span> 
									<span>{{ Auth::user()->last_name }}</span>
								</li>
								<li>
									<span class="semi-bold">Email:</span> 
									<span>{{ Auth::user()->email }}</span>
								</li>
								<li>
									<span class="semi-bold">Teléfono:</span> 
									<span>{{ Auth::user()->telephone }}</span>
								</li>
							</ul>

							<a class="btn btn-primary btn-medium" href="{{ route('perfil.edit' , Auth::user()->id ) }}">
								Editar perfil
							</a>	
						</div>
						@endif
					</div>
							
					<div class="col-xs-12 col-md-7 col-lg-9">
						<h3>Pedidos pendientes</h3>

						<ul class="list-boxed orders mb-5">
							@foreach ($pedidosPendientes as $pedido)
							
							<li class="list-wrapper media">
								<div class="media-img">
									@if ( !empty($pedido->huerta->foto) )
									<img class="img-fluid" src="{{ url('storage/images/huertas/'.$pedido->huerta->foto) }}" alt="{{$pedido->huerta->huerta}}">
									@else
									<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{$pedido->huerta->huerta}}">
									@endif
								</div>
								<div class="media-body">
									<h4>{{$pedido->huerta->huerta}}</h4>
									<span style="color:red">{{$pedido->estado->estado}}</span>

									<ul class="simple-list">
										<li>
											<span class="bold">Día y hora</span>
											<span>{{ date('d/m/Y', strtotime($pedido->fecha_pedido)) }} | {{ date('H:i', strtotime($pedido->fecha_pedido)) }}</span>
										</li>
										<li class="total">
											<span class="bold">Precio</span>
											<span style="color:red">$ 785.00</span>
										</li>
									</ul>		

									<a href="{{ route('perfil.pedidoDetalle' , $pedido->id ) }}" class="link-fwd">Ver detalle</a>							
								</div>
							</li>
							@endforeach
						</ul>

						<h3>Pedidos realizados</h3>

						<ul class="list-boxed orders">
							@foreach ($pedidosRealizados as $pedidoR)
							<li class="list-wrapper media">
								<div class="media-img">
									@if ( !empty($pedidoR->huerta->foto) )
									<img class="img-fluid" src="{{ url('storage/images/huertas/'.$pedidoR->huerta->foto) }}" alt="{{$pedidoR->huerta->huerta}}">
									@else
									<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{$pedidoR->huerta->huerta}}">
									@endif
								</div>
								<div class="media-body">
									<h4>{{$pedidoR->huerta->huerta}}</h4>

									<ul class="simple-list">
										<li>
											<span class="bold">Día y hora</span>
											<span>{{ date('d/m/Y', strtotime($pedidoR->fecha_pedido)) }} | {{ date('H:i', strtotime($pedidoR->fecha_pedido)) }}</span>
										</li>
										<li class="total">
											<span class="bold">Precio</span>
											<span style="color:red">$ 785.00</span>
										</li>
									</ul>		

									<a href="{{ route('perfil.pedidoDetalle' , $pedidoR->id) }}" class="link-fwd">Ver detalle</a>							
								</div>
							</li>
							@endforeach
						</ul>
					</div>					
				</div>		
		</section>
	</div>

@endsection