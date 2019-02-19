@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">

		<h2>Editar dirección</h2>
		
		<div class="add-address">
            <div class="form form-bg">
                <form method="POST" action="{{ route('perfil.direcciones.store', ['id' => $direccion->id] ) }}">
					@csrf
					<div class="row-form">
                        <label>Nombre / Referencia</label>
                        <input type="text" name="referencia" value="{{ old('referencia', $direccion->referencia) }}" placeholder="">
						@if($errors->has('referencia'))
						<small class="text-danger">{{ $errors->first('referencia') }}</small>
						@endif
                    </div>
                    <div class="row-form split d-flex justify-content-between">
                        <div class="lg-input">
							<label>Calle</label>
							<input type="text" name="calle" value="{{ old('calle', $direccion->calle) }}" placeholder="">
						</div>
						@if($errors->has('calle'))
						<small class="text-danger">{{ $errors->first('calle') }}</small>
						@endif
						<div class="sm-input">
							<label>Número</label>
							<input type="text" name="numero" value="{{ old('numero', $direccion->numero) }}" placeholder="">
						</div>
						@if($errors->has('numero'))
						<small class="text-danger">{{ $errors->first('numero') }}</small>
						@endif
                    </div>
                    <div class="row-form">
                        <label>Piso<span>(opcional)</span></label>
                        <input type="text" name="piso" value="{{ old('piso', $direccion->piso) }}" placeholder="">
                    </div>
					<div class="row-form">
                        <label>Departamento <span>(opcional)</span></label>
                        <input type="text" name="departamento" value="{{ old('departamento', $direccion->departamento) }}" placeholder="">
                    </div>
                    <div class="row-form split d-flex justify-content-between">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" value="{{ old('telefono', $direccion->telefono) }}" placeholder="">
						@if($errors->has('telefono'))
						<small class="text-danger">{{ $errors->first('telefono') }}</small>
						@endif
                    </div>
                    <div class="row-form">
                        <label>Aclaraciones <span>(opcional)</span></label>
                        <textarea name="aclaracion" rows="15" cols="15"  placeholder="¿Querés decirnos algo en particular sobre esta dirección?">{{ old('aclaracion', $direccion->aclaracion) }}</textarea>
						@if($errors->has('aclaracion'))
						<small class="text-danger">{{ $errors->first('aclaracion') }}</small>
						@endif
                    </div>
                    <div class="row-form">
						<label class="checkbox">
                            Usar esta dirección
                        <input type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="row-form submit">
						<button class="btn-primary btn btn-medium"> Actualizar </button>
                    </div>
                </form>
            </div>
        </div>		
	</section>
</div>


@endsection