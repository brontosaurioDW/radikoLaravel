<div class="sidebar-filtros">
	<h3>Categoría</h3>
	<ul>
		@foreach ($categorias as $categoria)
		<li>
			<label class="checkbox clearfix">
				<input type="checkbox" name="cat-1">
				<span class="checkmark"></span>
				<span class="float-left">{{ $categoria->categoria }}</span>
				<span class="light float-right">(85)</span>
			</label>
		</li>
		@endforeach
	</ul>

	<h3>Categoría</h3>
	<ul>
		@foreach ($categorias as $categoria)
		<li>
			<label class="checkbox clearfix">
				<input type="checkbox" name="cat-1">
				<span class="checkmark"></span>
				<span class="float-left">{{ $categoria->categoria }}</span>
				<span class="light float-right">(85)</span>
			</label>
		</li>
		@endforeach
	</ul>
</div>