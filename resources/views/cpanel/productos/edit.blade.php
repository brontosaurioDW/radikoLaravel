@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper cpanel relative">
	<section class="container">
		<div class="c-panel-wrapper bg-trama rdk-charcoal">
			<div class="c-panel-inner-wrapper">
				<div class="title">
					<h3>Editar producto</h3>
				</div>

				<form method="POST" action="{{ route('cpanel.productos.update', ['id' => $producto->id] ) }}" enctype="multipart/form-data" class="form">

					@csrf
					@method('PUT')

					<div class="row-form">
						<label for="producto">Producto</label>
						<input type="text" id="producto" name="producto" value="{{ old('producto', $producto->producto) }}">
						@if($errors->has('producto'))
						<small class="text-danger">{{ $errors->first('producto') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" id="descripcion" cols="30" rows="3">{{ old('descripcion', $producto->descripcion) }}</textarea>
						@if($errors->has('descripcion'))
						<small class="text-danger">{{ $errors->first('descripcion') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="marca">Marca</label>
						<input type="text" id="marca" name="marca" value="{{ old('marca', $producto->marca) }}">
						@if($errors->has('marca'))
						<small class="text-danger">{{ $errors->first('marca') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="precio">Precio</label>
						<input type="number" id="precio" name="precio" value="{{ old('precio', $producto->precio) }}">
						@if($errors->has('precio'))
						<small class="text-danger">{{ $errors->first('precio') }}</small>
						@endif
					</div>
					<div class="row-form">
						<label for="unidad_de_medida">Unidad de medida</label>
						<select id="unidad_de_medida" name="unidad_de_medida_id">
							@foreach($unidades as $unidad)
							<option value="{{ $unidad->id }}" {{ old('unidad_de_medida_id', $producto->unidad_de_medida_id) == $unidad->id ? 'selected' : ''}} >
								{{ $unidad->unidad }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="row-form row">
						<div class="col-4">
							<img class="img-fluid" src="{{ url('storage/images/productos/'.$producto->foto) }}" alt="{{$producto->producto}}" />
						</div>
						<div class="col-8">
							<div class="row-form">
								<label for="foto">Foto</label>
								<input type="file" id="foto" name="foto">
								@if($errors->has('foto'))
								<small class="text-danger">{{ $errors->first('foto') }}</small>
								@endif
							</div>		
						</div>
					</div>
					<div class="row-form">
						<label for="categoria">Categoría</label>
						<select id="categoria" name="categoria_id">
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->id }}" {{ old('categoria_id', $producto->categoria_id) == $categoria->id ? 'selected' : ''}} >
								{{ $categoria->categoria }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="buttons d-flex justify-content-end align-items-center">
						<a class="link" href="{{ url()->previous() }}">
							<i class="fas fa-chevron-left"></i>
							<span>Volver</span>
						</a>
						
						<button type="submit" class="btn btn-primary btn-small">Modificar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>

@endsection