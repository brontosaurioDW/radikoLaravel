@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">		
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="title">
						<h3>Registrar Huerta</h3>
					</div>

					<form method="POST" action="{{ route('admin.huertas.store') }}" enctype="multipart/form-data" class="form">
						@csrf
						<div class="row-form">
							<label for="huerta">Nombre Huerta</label>
							<input type="text" class="" id="huerta" name="huerta" value="{{ old('huerta') }}">
							@if($errors->has('huerta'))
							<small class="text-danger">{{ $errors->first('huerta') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="cuit">CUIT</label>
							<input type="text" class="" id="cuit" name="cuit" value="{{ old('cuit') }}">
							@if($errors->has('cuit'))
							<small class="text-danger">{{ $errors->first('cuit') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="razon_social">Razón Social</label>
							<input type="text" class="" id="razon_social" name="razon_social" value="{{ old('razon_social') }}">
							@if($errors->has('razon_social'))
							<small class="text-danger">{{ $errors->first('razon_social') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="direccion">Dirección</label>
							<input type="text" class="" id="direccion" name="direccion" value="{{ old('direccion') }}">
							@if($errors->has('direccion'))
							<small class="text-danger">{{ $errors->first('direccion') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="telefono">Teléfono</label>
							<input type="text" class="" id="telefono" name="telefono" value="{{ old('telefono') }}">
							@if($errors->has('telefono'))
							<small class="text-danger">{{ $errors->first('telefono') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="email">Email</label>
							<input type="email" class="" id="email" name="email" value="{{ old('email') }}">
							@if($errors->has('email'))
							<small class="text-danger">{{ $errors->first('email') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="tipo_huerta_id">Tipo de huerta</label>
							<select id="categoria" name="tipo_huerta_id" class="">
								@foreach($tipos as $tipo)
								<option value="{{ $tipo->id }}" {{ old('tipo_huerta_id') == $tipo->id ? 'selected' : ''}} >
									{{ $tipo->tipo }}
								</option>
								@endforeach
							</select>
						</div>

						<div class="buttons d-flex justify-content-end align-items-center">
							<a class="link" href="{{ url()->previous() }}">
								<i class="fas fa-chevron-left"></i>
								<span>Volver</span>
							</a>
							<button type="submit" class="btn btn-primary btn-small">Registrar Huerta</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>

@endsection