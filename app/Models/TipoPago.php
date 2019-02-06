<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    protected $table = "tipos_pagos";
	
	public function pedidos()
	{
		return $this->hasMany(Pedido::class);
	}
}
