@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

	<div class="main-wrapper cpanel relative">
		<section class="container">		
			<div class="c-panel-wrapper bg-trama rdk-charcoal">
				<div class="c-panel-inner-wrapper">
					<div class="buttons d-flex justify-content-start align-items-center">
						<a class="link" href="{{ route( 'cpanel.productos.index' ) }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
					</div>

					<div class="title">
						<h3>Crear producto</h3>
					</div>

					<form method="POST" action="{{ route('cpanel.productos.store') }}" enctype="multipart/form-data" class="form">
						@csrf
						<div class="row-form">
							<label for="producto">Producto</label>
							<input type="text" class="" id="producto" name="producto" value="{{ old('producto') }}">
							@if($errors->has('producto'))
							<small class="text-danger">{{ $errors->first('producto') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="descripcion">Descripción</label>
							<textarea class="" name="descripcion" id="descripcion" cols="30" rows="3">{{ old('descripcion') }}</textarea>
							@if($errors->has('descripcion'))
							<small class="text-danger">{{ $errors->first('descripcion') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="marca">Marca</label>
							<input type="text" class="" id="marca" name="marca" value="{{ old('marca') }}">
							@if($errors->has('marca'))
							<small class="text-danger">{{ $errors->first('marca') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="precio">Precio</label>
							<input type="number" class="" id="precio" name="precio" value="{{ old('precio') }}">
							@if($errors->has('precio'))
							<small class="text-danger">{{ $errors->first('precio') }}</small>
							@endif
						</div>
						<div class="row-form">
							<label for="unidad_de_medida">Unidad de medida</label>
							<select id="unidad_de_medida" name="unidad_de_medida_id" class="">
								@foreach($unidades as $unidad)
								<option value="{{ $unidad->id }}" {{ old('unidad_de_medida_id') == $unidad->id ? 'selected' : ''}} >
									{{ $unidad->unidad }}
								</option>
								@endforeach
							</select>
						</div>
						<div class="row-form">
							<label for="foto">Foto</label>
							<input type="file" class="" id="foto" name="foto">
							@if($errors->has('foto'))
							<small class="text-danger">{{ $errors->first('foto') }}</small>
							@endif
						</div>		
						<div class="row-form">
							<label for="categoria">Categoría</label>
							<select id="categoria" name="categoria_id" class="">
								@foreach($categorias as $categoria)
								<option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : ''}} >
									{{ $categoria->categoria }}
								</option>
								@endforeach
							</select>
						</div>

						<div class="buttons bottom d-flex justify-content-end align-items-center">
							<button type="submit" class="btn btn-primary btn-small">Crear producto</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>

@endsection