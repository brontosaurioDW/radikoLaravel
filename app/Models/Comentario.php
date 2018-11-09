<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	protected $table = 'comentarios';

	protected $guarded = [];

	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}
}
