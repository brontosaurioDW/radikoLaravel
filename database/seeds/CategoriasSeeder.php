<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Categoria::create([
			'categoria' => 'Frutas',
			'icono' => 'frutas.png'
		]);
		Categoria::create([
			'categoria' => 'Verduras',
			'icono' => 'verduras.png'
		]);
		Categoria::create([
			'categoria' => 'Harinas',
			'icono' => 'harinas.png'
		]);
		Categoria::create([
			'categoria' => 'Granja',
			'icono' => 'granjas.png'
		]);
		Categoria::create([
			'categoria' => 'Lácteos',
			'icono' => 'lacteos.png'
		]);
		Categoria::create([
			'categoria' => 'Carnes',
			'icono' => 'carnes.png'
		]);
		Categoria::create([
			'categoria' => 'Especias',
			'icono' => 'especias.png'
		]);
		Categoria::create([
			'categoria' => 'Semillas',
			'icono' => 'semillas.png'
		]);
		Categoria::create([
			'categoria' => 'Envasados',
			'icono' => 'envasados.png'
		]);
	}
}