<div class="tabs-full">
	<ul class="nav nav-tabs m-0 d-flex align-items-center">
		<li>
			<a href="{{ url('/admin/estadisticas') }}" class="nav-link {{ Request::is('admin/estadisticas') ? 'active' : '' }}" class="nav-link">
				<span>Estadísticas</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ url('/admin/huertas') }}" class="nav-link {{ Request::is('admin/huertas') ? 'active' : '' }}">
				<span>Huertas</span>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ url('/admin/usuarios') }}" class="nav-link {{ Request::is('admin/usuarios') ? 'active' : '' }}">
				<span>Clientes</span>
			</a>
		</li>		
		<li>
			<a href="{{ url('/admin/pedidos') }}" class="nav-link {{ Request::is('admin/pedidos') ? 'active' : '' }}">
				<span>Pedidos</span>
			</a>
		</li>
	</ul>
</div>


