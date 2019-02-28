@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-3">
				<h2>Mi perfil</h2>
				@if(Auth::check())
				<div class="user-info">
					@if ( !empty(Auth::user()->foto) )
					<img class="img-fluid" src="{{ url('storage/images/usuarios/'.Auth::user()->foto) }}" alt="{{ Auth::user()->name }}">
					@else
					<img class="img-fluid" src="{{ url('storage/images/user-default.png') }}" alt="{{ Auth::user()->name }}">
					@endif

					<ul class="simple-list">
						<li>
							<span class="semi-bold">Nombre:</span> 
							<span>{{ Auth::user()->name }}</span>
						</li>
						<li>
							<span class="semi-bold">Apellido:</span> 
							<span>{{ Auth::user()->last_name }}</span>
						</li>
						<li>
							<span class="semi-bold">Email:</span> 
							<span>{{ Auth::user()->email }}</span>
						</li>
						<li>
							<span class="semi-bold">Teléfono:</span> 
							<span>{{ Auth::user()->telephone }}</span>
						</li>
					</ul>	
				</div>
				@endif
			</div>
			
			<div class="col-xs-12 col-md-7 col-lg-9">
				<a href="{{url()->previous()}}" class="link">
					<i class="fas fa-chevron-left"></i>
					<span>volver</span>
				</a>
				
				<h3>Agregar Dirección</h3>
	
				<div class="add-address">
					<div class="form form-bg">
						<form method="POST" action="{{ route('perfil.direcciones.store') }}">
							@csrf
							<div class="row-form">
								<label>Nombre / Referencia</label>
								<input type="text" name="referencia" value="{{ old('referencia') }}" placeholder="">
								@if($errors->has('referencia'))
								<small class="text-danger">{{ $errors->first('referencia') }}</small>
								@endif
							</div>
							<div class="row-form split d-flex justify-content-between">
								<div class="lg-input">
									<label>Calle</label>
									<input type="text" name="calle" value="{{ old('calle') }}" placeholder="">
								</div>
								@if($errors->has('calle'))
								<small class="text-danger">{{ $errors->first('calle') }}</small>
								@endif
								<div class="sm-input">
									<label>Número</label>
									<input type="text" name="numero" value="{{ old('numero') }}" placeholder="">
								</div>
								@if($errors->has('numero'))
								<small class="text-danger">{{ $errors->first('numero') }}</small>
								@endif
							</div>
							<div class="row-form">
								<label>Piso<span>(opcional)</span></label>
								<input type="text" name="piso" value="{{ old('piso') }}" placeholder="">
							</div>
							<div class="row-form">
								<label>Departamento <span>(opcional)</span></label>
								<input type="text" name="departamento" value="{{ old('departamento') }}" placeholder="">
							</div>
							<div class="row-form">
								<label>Teléfono</label>
								<input type="tel" name="telefono" value="{{ old('telefono') }}"  value="{{ old('numero') }}" placeholder="011-5555-5555">
								@if($errors->has('telefono'))
								<small class="text-danger">{{ $errors->first('telefono') }}</small>
								@endif
							</div>
							<div class="row-form">
								<label>Aclaraciones <span>(opcional)</span></label>
								<textarea name="aclaracion" rows="15" cols="15"  placeholder="¿Querés decirnos algo en particular sobre esta dirección?">{{ old('aclaracion') }}</textarea>
								@if($errors->has('aclaracion'))
								<small class="text-danger">{{ $errors->first('aclaracion') }}</small>
								@endif
							</div>
							<div class="row-form submit">
								<button class="btn-primary btn btn-medium"> Agregar </button>
							</div>
						</form>
					</div>
				</div>	
			</div>	
        </div>		
	</section>
</div>

@endsection