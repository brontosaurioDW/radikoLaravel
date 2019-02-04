<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @var string El nombre de la tabla */
	protected $table = "pedidos";
	
	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
	
	/*public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}*/
}
