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
			'fecha_pedido' => '2018-08-05 16:30:00',
			'subtotal' => 922.89,
			'costo_envio' => 130,
			'total' => 922.89,
			'observaciones' => 'pedido numero #1',
			'usuario_id'=>5,
			'huerta_id'=>1,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'direccion_id'=>1
		]);
		
		//#2	
		Pedido::create([
			'fecha_pedido' => '2018-08-30 13:25:00',
			'subtotal' => 325,
			'costo_envio' => 130,
			'total' => 455,
			'observaciones' => 'pedido numero #2',
			'usuario_id'=>6,
			'huerta_id'=>3,
			'id_estado_pedido'=>1,
			'id_tipo_pago'=>1,
			'direccion_id'=>3
		]);
		
		//#3	
		Pedido::create([
			'fecha_pedido' => '2018-09-01 19:00:00',
			'subtotal' => 103.6,
			'costo_envio' => 130,
			'total' => 233.6,
			'observaciones' => 'pedido numero #3',
			'usuario_id'=>7,
			'huerta_id'=>2,
			'id_estado_pedido'=>3,
			'id_tipo_pago'=>1,
			'direccion_id'=>5
		]);
		
		//#4	
		Pedido::create([
			'fecha_pedido' => '2018-09-03 16:50:00',
			'subtotal' => 105.8,
			'costo_envio' => 130,
			'total' => 105.8,
			'observaciones' => 'pedido numero #4',
			'usuario_id'=>8,
			'huerta_id'=>2,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'direccion_id'=>6
		]);
		
		//#5	
		Pedido::create([
			'fecha_pedido' => '2018-10-03 16:50:00',
			'subtotal' => 640.3,
			'costo_envio' => 130,
			'total' => 640.3,
			'observaciones' => 'pedido numero #5',
			'usuario_id'=>8,
			'huerta_id'=>1,
			'id_estado_pedido'=>1,
			'id_tipo_pago'=>1,
			'direccion_id'=>7
		]);
		
		//#6	
		Pedido::create([
			'fecha_pedido' => '2018-10-08 06:30:00',
			'subtotal' => 154,
			'costo_envio' => 130,
			'total' => 154,
			'observaciones' => 'pedido numero #6',
			'usuario_id'=>5,
			'huerta_id'=>1,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'direccion_id'=>2
		]);
		
		//#7	
		Pedido::create([
			'fecha_pedido' => '2018-10-12 15:50:00',
			'subtotal' => 115,
			'costo_envio' => 130,
			'total' => 245,
			'observaciones' => 'pedido numero #7',
			'usuario_id'=>7,
			'huerta_id'=>1,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'direccion_id'=>4
		]);
		
		//#8	
		Pedido::create([
			'fecha_pedido' => '2018-10-15 16:50:00',
			'subtotal' => 134,
			'costo_envio' => 130,
			'total' => 264,
			'observaciones' => 'pedido numero #8',
			'usuario_id'=>6,
			'huerta_id'=>1,
			'id_estado_pedido'=>1,
			'id_tipo_pago'=>1,
			'direccion_id'=>3
		]);
		
		//#9	
		Pedido::create([
			'fecha_pedido' => '2018-10-20 08:30:00',
			'subtotal' => 226.5,
			'costo_envio' => 130,
			'total' => 226.5,
			'observaciones' => 'pedido numero #9',
			'usuario_id'=>8,
			'huerta_id'=>3,
			'id_estado_pedido'=>3,
			'id_tipo_pago'=>1,
			'direccion_id'=>6
		]);
    }
}
