@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">

		<h2>Editar dirección</h2>
		
		<div class="add-address">
            <div class="form form-bg">
                <form method="post" action="">
				@csrf
					<div class="row-form">
                        <label>Nombre / Referencia</label>
                        <input type="text" name="nombre-referencia" value="{{ old('referencia') }}" placeholder="">
                    </div>
                    <div class="row-form split d-flex justify-content-between">
                        <div class="lg-input">
							<label>Calle</label>
							<input type="text" name="calle" value="{{ old('calle') }}" placeholder="">
						</div>
						<div class="sm-input">
							<label>Número</label>
							<input type="text" name="numero-direccion" value="{{ old('numero') }}" placeholder="">
						</div>
                    </div>
                    <div class="row-form">
                        <label>Piso<span>(opcional)</span></label>
                        <input type="text" name="piso-dpto" value="{{ old('piso') }}" placeholder="">
                    </div>
					<div class="row-form">
                        <label>Departamento <span>(opcional)</span></label>
                        <input type="text" name="dpto" value="{{ old('departamento') }}" placeholder="">
                    </div>
                    <div class="row-form split d-flex justify-content-between">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" value="{{ old('telefono') }}" placeholder="">
                    </div>
                    <div class="row-form">
                        <label>Aclaraciones <span>(opcional)</span></label>
                        <textarea name="aclaraciones" rows="15" cols="15" value="{{ old('aclaracion') }}" placeholder="¿Querés decirnos algo en particular sobre esta dirección?"></textarea>
                    </div>
                    <div class="row-form">
						<label class="checkbox">
                            Usar esta dirección
                        <input type="checkbox" name="usar-direccion-1">
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