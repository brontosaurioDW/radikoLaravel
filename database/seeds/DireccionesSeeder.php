<?php

use Illuminate\Database\Seeder;
use App\Models\Direccion;

class DireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //#usuario 8
		Direccion::create([
			'referencia' => 'Casa',
			'calle' => 'Moreno',
			'numero' => '854',
			'piso' => '2',
			'departamento' => 'B',
			'telefono' => '1530547862',
			'aclaracion' => 'no funciona el timbre, golpear fuerte',
			'usuario_id' => 8
		]);
		
		//#usuario 8
		Direccion::create([
			'referencia' => 'Lo de mamá',
			'calle' => 'Salguero',
			'numero' => '1254',
			'piso' => '',
			'departamento' => '',
			'telefono' => '4300-2580',
			'aclaracion' => 'Puerta verde',
			'usuario_id' => 8
		]);
		
		//#usuario 9
		Direccion::create([
			'referencia' => 'Casa Moni',
			'calle' => 'Neochea',
			'numero' => '356',
			'piso' => '',
			'departamento' => '',
			'telefono' => '4578-2640',
			'aclaracion' => '',
			'usuario_id' => 9
		]);
    }
}
