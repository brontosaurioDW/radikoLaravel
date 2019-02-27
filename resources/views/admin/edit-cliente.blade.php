@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">
			
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Estado de {{ $cliente->name }} {{ $cliente->last_name }}</h3>				
					</div>

					<div>
						<span class="bold">Estado actual:</span> {{ $cliente->estado }}
					</div>

					<form method="POST" action="{{ route('admin.clientes.update', ['id' => $cliente->id] ) }}">
						@csrf
						@method('PUT')
						<div class="row-form">
							<label for="estado">Cambiar a </label>
							<select id="estado" name="estado" class="">

								<option value="activo">activo</option>
								<option value="suspendido">suspendido</option>
								<option value="dado de baja">dado de baja</option>

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