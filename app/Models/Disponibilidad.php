<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
	protected $table = 'disponibilidades';

	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}
	
	public function pedidos()
	{
		return $this->hasMany(Pedido::class, 'id_disponibilidad', 'id');
	}
}
