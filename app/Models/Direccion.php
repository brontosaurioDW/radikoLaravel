<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
	protected $table = "direcciones";
	
	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
	
	public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
