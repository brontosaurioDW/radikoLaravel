<div class="tabs-full">
	<ul class="nav nav-tabs m-0 d-flex align-items-center">
		<li class="nav-item">
			<a href="{{ url('/cpanel/productos') }}" class="nav-link {{ Request::is('cpanel/productos') ? 'active' : '' }}">
				<span>Productos</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ url('/cpanel/pedidos') }}" class="nav-link {{ Request::is('cpanel/pedidos') ? 'active' : '' }}">
				<span>Pedidos</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ url('/cpanel/huerta') }}" class="nav-link {{ Request::is('cpanel/huerta') ? 'active' : '' }}">
				<span>Huerta</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ url('/cpanel/perfil') }}" class="nav-link {{ Request::is('cpanel/perfil') ? 'active' : '' }}">
				<span>Perfil</span>
			</a>
		</li>
	</ul>
</div>


