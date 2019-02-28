@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					
					<div class="buttons d-flex justify-content-start align-items-center">
						<a class="link" href="{{ url()->previous() }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
					</div>	

					<div class="title">
						<h3>Estado del pedido n° {{ $pedido->id }}</h3>				
					</div>

					<div class="estado">
						<span class="bold">Estado actual:</span> {{ $pedido->estado->estado }} 
					</div>

					<form method="POST" action="{{ route('cpanel.pedidos.update', ['id' => $pedido->id] ) }}" class="form">
						@csrf
						@method('PUT')
						<div class="row-form">
							<label for="id_estado_pedido">Cambiar a </label>
							<select id="id_estado_pedido" name="id_estado_pedido" class="">
								<option value="1" {{ old('estado', $pedido->id_estado_pedido) == '1' ? 'selected' : ''}}>Pendiente de pago</option>
								<option value="2" {{ old('estado', $pedido->id_estado_pedido) == '2' ? 'selected' : ''}}>Pendiente de entrega</option>
								<option value="3" {{ old('estado', $pedido->id_estado_pedido) == '3' ? 'selected' : ''}}>Entregado</option>
								<option value="5" {{ old('estado', $pedido->id_estado_pedido) == '5' ? 'selected' : ''}}>Cancelado por la huerta</option>
							</select>
						</div>
	
						<div class="row-form submit">
							<button class="btn-primary btn btn-medium"> Modificar </button>
							</div>
					</form>
				</div>
			</div>
		</section>
	</div>

@endsection