@extends ('layouts.master')

@section ('title', 'Radiko - Productos')

@section ('header-class', 'huerta-detalle')

@section ('content')

<main class="huerta-content mt-5">

	<h1>Página productos</h1>


	@foreach ($productos as $producto)
		{{$producto->producto}}
		{{$producto->unidadDeMedida->unidad }}

	@endforeach

</main>


@endsection








