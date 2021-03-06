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
		//#1 #usuario 5
		Direccion::create([
			'referencia' => 'Mi casa',
			'calle' => 'Sarmiento',
			'numero' => '1200',
			'piso' => '1',
			'departamento' => 'D',
			'telefono' => '(011) 3054-7862',
			'aclaracion' => 'Puerta negra',
			'usuario_id' => 5
		]);
		//#2 #usuario 5
		Direccion::create([
			'referencia' => 'Lo del tío',
			'calle' => 'Ayacucho',
			'numero' => '1571',
			'piso' => '2',
			'departamento' => '1',
			'telefono' => '(011) 6547-8254',
			'aclaracion' => null,
			'usuario_id' => 5
		]);
		//#3 #usuario 6
		Direccion::create([
			'referencia' => 'Casa de mamá',
			'calle' => 'Godoy Cruz',
			'numero' => '3008',
			'piso' => null,
			'departamento' => null,
			'telefono' => '(011) 2547-6875',
			'aclaracion' => 'No funciona el timbre, pegar un grito',
			'usuario_id' => 6
		]);
		//#4 #usuario 7
		Direccion::create([
			'referencia' => 'Lo de Moni',
			'calle' => 'Belgrano',
			'numero' => '955',
			'piso' => '5',
			'departamento' => 'A',
			'telefono' => '(011) 5647-8963',
			'aclaracion' => null,
			'usuario_id' => 7
		]);
		//#5 #usuario 7
		Direccion::create([
			'referencia' => 'Oficina',
			'calle' => 'Pavón',
			'numero' => '2500',
			'piso' => '9',
			'departamento' => 'A',
			'telefono' => '(011) 5647-8963',
			'aclaracion' => 'Dejar al Sr. de Seguridad',
			'usuario_id' => 7
		]);
        //#6 #usuario 8
		Direccion::create([
			'referencia' => 'Casa',
			'calle' => 'Moreno',
			'numero' => '854',
			'piso' => '2',
			'departamento' => 'B',
			'telefono' => '(011) 3054-7862',
			'aclaracion' => 'no funciona el timbre, golpear fuerte',
			'usuario_id' => 8
		]);
		
		//#7 #usuario 8
		Direccion::create([
			'referencia' => 'Lo de mamá',
			'calle' => 'Salguero',
			'numero' => '1254',
			'piso' => null,
			'departamento' => null,
			'telefono' => '(011) 4300-2580',
			'aclaracion' => 'Puerta verde',
			'usuario_id' => 8
		]);
    }
}
