
<div class="list-group">
	<a href="{{ url('/cpanel/productos') }}" class="list-group-item list-group-item-action {{ Request::is('cpanel/productos') ? 'active' : '' }}">Productos</a>
	<a href="{{ url('/cpanel/pedidos') }}" class="list-group-item list-group-item-action {{ Request::is('cpanel/pedidos') ? 'active' : '' }}">Pedidos</a>
	<a href="{{ url('/cpanel/huerta') }}" class="list-group-item list-group-item-action {{ Request::is('cpanel/huerta') ? 'active' : '' }}">Huerta</a>
	<a href="{{ url('/cpanel/perfil/1') }}" class="list-group-item list-group-item-action {{ Request::is('cpanel/perfil/1') ? 'active' : '' }}">Perfil</a>
</div>



