<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = 'comentarios';

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = [
		'comentario',
		'stars',
		'huerta_id'
	];

	protected $guarded = [];

	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}
}
