<?php

use Illuminate\Database\Seeder;

use App\Models\UnidadDeMedida;

class UnidadesDeMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		UnidadDeMedida::create([
			'unidad' => 'kg'
		]);
		UnidadDeMedida::create([
			'unidad' => 'g'
		]);
		UnidadDeMedida::create([
			'unidad' => 'l'
		]);
		UnidadDeMedida::create([
			'unidad' => 'ml'
		]);
		UnidadDeMedida::create([
			'unidad' => 'u'
		]);
		UnidadDeMedida::create([
			'unidad' => 'cc'
		]);
    }
}
