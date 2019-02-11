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
			'subtotal' => 101,
			'observaciones' => 'pedido numero #1',
			'id_cliente'=>5,
			'id_huerta'=>1,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>1
		]);
		
		//#2	
		Pedido::create([
			'fecha_pedido' => '2018-08-30 13:25:00',
			'subtotal' => 325,
			'observaciones' => 'pedido numero #2',
			'id_cliente'=>6,
			'id_huerta'=>3,
			'id_estado_pedido'=>1,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>8
		]);
		
		//#3	
		Pedido::create([
			'fecha_pedido' => '2018-09-01 19:00:00',
			'subtotal' => 103.6,
			'observaciones' => 'pedido numero #3',
			'id_cliente'=>7,
			'id_huerta'=>2,
			'id_estado_pedido'=>3,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>5
		]);
		
		//#4	
		Pedido::create([
			'fecha_pedido' => '2018-09-03 16:50:00',
			'subtotal' => 170,
			'observaciones' => 'pedido numero #4',
			'id_cliente'=>8,
			'id_huerta'=>2,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>6
		]);
		
		//#5	
		Pedido::create([
			'fecha_pedido' => '2018-10-03 16:50:00',
			'subtotal' => 189,
			'observaciones' => 'pedido numero #5',
			'id_cliente'=>8,
			'id_huerta'=>1,
			'id_estado_pedido'=>1,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>4
		]);
		
		//#6	
		Pedido::create([
			'fecha_pedido' => '2018-10-08 06:30:00',
			'subtotal' => 1250,
			'observaciones' => 'pedido numero #6',
			'id_cliente'=>5,
			'id_huerta'=>1,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>2
		]);
		
		//#7	
		Pedido::create([
			'fecha_pedido' => '2018-10-12 15:50:00',
			'subtotal' => 115,
			'observaciones' => 'pedido numero #7',
			'id_cliente'=>7,
			'id_huerta'=>1,
			'id_estado_pedido'=>2,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>1
		]);
		
		//#8	
		Pedido::create([
			'fecha_pedido' => '2018-10-15 16:50:00',
			'subtotal' => 134,
			'observaciones' => 'pedido numero #8',
			'id_cliente'=>6,
			'id_huerta'=>1,
			'id_estado_pedido'=>1,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>3
		]);
		
		//#9	
		Pedido::create([
			'fecha_pedido' => '2018-10-20 08:30:00',
			'subtotal' => 453,
			'observaciones' => 'pedido numero #9',
			'id_cliente'=>8,
			'id_huerta'=>3,
			'id_estado_pedido'=>3,
			'id_tipo_pago'=>1,
			'id_disponibilidad'=>9
		]);
    }
}
