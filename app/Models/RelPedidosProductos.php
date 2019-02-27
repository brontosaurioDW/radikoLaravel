<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelPedidosProductos extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "rel_pedidos_productos";

	public function productos()
	{
		return $this->hasMany(Producto::class);
	}

	public function pedido()
	{
		return $this->hasMany(Pedido::class);
	}

	public function direccion()
	{
		return $this->hasMany(Direccion::class);
	}

	public function huerta()
	{
		return $this->hasMany(Huerta::class);
	}
}

