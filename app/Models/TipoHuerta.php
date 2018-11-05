<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoHuerta extends Model
{
	protected $table = "tipo_huerta";

	public function huerta() {
		return $this->hasMany(Huerta::class, 'id', 'id');
	}
}
