	@extends ('layouts.master')

	@section ('title', 'Radiko - Información usuario')

	@section ('content')

	<div class="main-wrapper relative">
		<section class="container last-step">

			<a href="{{url()->previous()}}" class="link">
				<i class="fas fa-chevron-left"></i>
				<span>volver a Perfil</span>
			</a>

			<div class="row justify-content-between">
			    <div class="col-md-6">
			        <div class="card pedido">
			            <div class="d-flex">
			                <div class="card-info w-100 no-border">     
			                    <div class="d-flex align-items-center justify-content-between m-0">
			                        <span>Pedido N°</span>
			                        <span class="price-black bold">{{ $pedido->id }}</span>
			                    </div>
			                </div>
			            </div>
			        </div>

			        <div class="card listado">
			            <div class="d-flex">
			                <div class="card-info w-100 no-border">                                 
			                    <ul class="simple-list">
			                        @foreach ($productos as $producto)
			                            @foreach ($productos_pedido as $producto_pedido)
			                                @if ($producto->id == $producto_pedido->producto_id)
			                                    <li class="d-flex justify-content-between">
			                                        <span>
			                                            {{$producto_pedido->cantidad}} 
			                                            {{$producto->unidadDeMedida->unidad}}.  
			                                            {{$producto->producto}}
			                                        </span>
			                                        <span class="price-black">
			                                            ${{$producto_pedido->cantidad * $producto->precio}}
			                                        </span>
			                                    </li>
			                                @endif
			                            @endforeach
			                        @endforeach
			                    </ul>

			                    <ul class="simple-list m-0">
			                        <li class="bold d-flex justify-content-between align-items-center">
			                            <span>Subtotal:</span>
			                            <span class="price-black bold">$ {{ $pedido->total}} </span>
			                        </li>
			                        <li class="bold d-flex justify-content-between align-items-center">
			                            <span>Costo de envío:</span>
			                            <span class="price-black bold">$ 130 </span>
			                        </li> 
			                    </ul>
			                </div>                              
			            </div>
			        </div>

			        <div class="card pedido total">
			            <div class="d-flex">
			                <div class="card-info w-100 no-border">    
			                    <div class="d-flex align-items-center justify-content-between m-0">
			                        <span>Total:</span>
			                        <span class="price-black bold"> $ {{$pedido->total + 130 }} </span>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="col-md-6">
			        <div class="card">
			            <div class="d-flex">
			                <div class="card-info w-100 no-border">  
			                    <h2>{{$pedido->huerta->huerta}}</h2>
			                    <ul class="simple-list">
			                        <li>{{$pedido->huerta->direccion}}</li>
			                        <li>{{$pedido->huerta->telefono}}</li>
			                        <li>{{$pedido->huerta->email}}</li>
			                    </ul>
			                </div>
			            </div>
			        </div>

			        <div class="card">
			            <div class="d-flex">
			                <div class="card-info w-100 no-border">  
			                    <h2>{{ $pedido->direccion->referencia }}</h2>
			                    <ul class="simple-list">
			                        <li>
			                            {{ $pedido->direccion->calle }} {{ $pedido->direccion->numero }}
			                        </li>

			                        @if ($pedido->direccion->piso != null)
			                            <li>
			                                Piso {{ $pedido->direccion->piso }} - Dpto: {{ $pedido->direccion->departamento }}
			                            </li>
			                        @endif

			                        <li>
			                            {{ $pedido->direccion->telefono }}
			                        </li>

			                        @if ($pedido->direccion->aclaracion != null)
			                            <li class="italic">
			                                {{ $pedido->direccion->aclaracion }} 
			                            </li>
			                        @endif
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</section>
	</div>

	@endsection