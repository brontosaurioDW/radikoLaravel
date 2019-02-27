@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
		@include ('admin.nav')
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Estado del pedido n° {{ $pedido->id }}</h3>				
					</div>

					<div>
						<span class="bold">Estado actual:</span> {{ $pedido->estado->estado }} 
					</div>

					<form method="POST" action="{{ route('admin.pedidos.update', ['id' => $pedido->id] ) }}">
						@csrf
						@method('PUT')
						<div class="row-form">
							<label for="id_estado_pedido">Cambiar a </label>
						
							<select id="id_estado_pedido" name="id_estado_pedido" class="">
								@foreach($estados as $estado)
								<option value="{{ $estado->id_estado_pedido }}" {{ old('id_estado_pedido') == $estado->id_estado_pedido ? 'selected' : ''}} >
									{{ $estado->estado }}
								</option>
								@endforeach
							</select>
						</div>
	
						<div class="row-form submit">
							<button class="btn-primary btn btn-medium"> Modificar </button>
							</div>
					</form>
				
					<div class="buttons d-flex justify-content-end align-items-center">
						<a class="link" href="{{ url()->previous() }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
					</div>	
				</div>
			</div>
		</section>
	</div>

@endsection