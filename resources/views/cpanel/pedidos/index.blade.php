@extends ('layouts.master')

@section ('title', 'Radiko - Información usuario')

@section ('content')

<div class="main-wrapper relative small-height">
	<section class="container profile">

		<h2 class="mb-4">usuario tipo huerta</h2>

		<div class="row">


			<div class="col-3">

				@include ('cpanel.nav')

			</div>

			<div class="col-9">	
				<h3>Pedidos de la huerta</h3>
			</div>
		</div>
	</section>
</div>


@endsection