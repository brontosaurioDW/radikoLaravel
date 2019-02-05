<?php

use Illuminate\Database\Seeder;
use App\Models\EstadoPedido;

class EstadosPedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //#1	
		EstadoPedido::create([
			'estado' => 'Pendiente de pago'
		]);
		
		//#2	
		EstadoPedido::create([
			'estado' => 'Pendiente de entrega'
		]);
		
		//#3	
		EstadoPedido::create([
			'estado' => 'Entregado'
		]);
		
		//#4	
		EstadoPedido::create([
			'estado' => 'Cancelado por el cliente'
		]);
		
		//#5	
		EstadoPedido::create([
			'estado' => 'Cancelado por la huerta'
		]);
		
		//#6	
		EstadoPedido::create([
			'estado' => 'Cancelado por el administrador'
		]);
    }
}
