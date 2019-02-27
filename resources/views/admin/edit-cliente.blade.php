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
						<h3>Estado de {{ $cliente->name }} {{ $cliente->last_name }}</h3>				
					</div>

					<div class="estado">
						<span class="bold">Estado actual:</span> {{ $cliente->estado }}
					</div>

					<form method="POST" action="{{ route('admin.clientes.update', ['id' => $cliente->id] ) }}" class="form">
						@csrf
						@method('PUT')
						<div class="row-form">
							<label for="estado">Cambiar a </label>
							<select id="estado" name="estado" class="">

								<option value="activo" {{ old('estado', $cliente->estado) == 'activo' ? 'selected' : ''}}>activo</option>
								<option value="suspendido" {{ old('estado', $cliente->estado) == 'suspendido' ? 'selected' : ''}}>suspendido</option>
								<option value="dado de baja" {{ old('estado', $cliente->estado) == 'dado de baja' ? 'selected' : ''}}>dado de baja</option>

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