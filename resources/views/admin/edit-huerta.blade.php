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
						<h3>Estado de {{ $huerta->huerta }}</h3>				
					</div>

					<div class="estado">
						<span class="bold">Estado actual:</span> {{ $huerta->usuario->estado }} 
					</div>

					<form method="POST" action="{{ route('admin.huertas.update', ['id' => $huerta->id] ) }}" class="form">
						@csrf
						@method('PUT')
						<div class="row-form">
							<label for="estado">Cambiar a </label>
							<select id="estado" name="estado" class="">

								<option value="activo" {{ old('estado', $huerta->usuario->estado) == 'activo' ? 'selected' : ''}}>activo</option>
								<option value="suspendido" {{ old('estado', $huerta->usuario->estado) == 'suspendido' ? 'selected' : ''}}>suspendido</option>
								<option value="dado de baja" {{ old('estado', $huerta->usuario->estado) == 'dado de baja' ? 'selected' : ''}}>dado de baja</option>
								<option value="pendiente de pago" {{ old('estado', $huerta->usuario->estado) == 'pendiente de pago' ? 'selected' : ''}}>pendiente de pago</option>

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