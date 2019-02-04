<?php

use Illuminate\Database\Seeder;
use App\Models\Pedido;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //#1	
		Pedido::create([
			'fecha' => '2018-08-05',
			'subtotal' => 78.00,
			'observaciones' => 'observacion'
		]);
    }
}
