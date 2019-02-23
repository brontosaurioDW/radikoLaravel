<?php

use Illuminate\Database\Seeder;

use App\Models\RelPedidosProductos;

class RelPedidosProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 2
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 7
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 9
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 18
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 21
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 2,
    		'producto_id' => 41
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 2,
    		'producto_id' => 44
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 2,
    		'producto_id' => 48
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
    		'producto_id' => 30
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
    		'producto_id' => 32
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
    		'producto_id' => 34
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
    		'producto_id' => 36
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
    		'producto_id' => 38
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 4,
    		'producto_id' => 32
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 4,
    		'producto_id' => 33
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 4,
    		'producto_id' => 34
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 5,
    		'producto_id' => 19
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 5,
    		'producto_id' => 22
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 5,
    		'producto_id' => 24
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 6,
    		'producto_id' => 10
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 6,
    		'producto_id' => 11
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
    		'producto_id' => 5
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
    		'producto_id' => 7
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
    		'producto_id' => 11
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
    		'producto_id' => 18
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 8,
    		'producto_id' => 20
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 8,
    		'producto_id' => 24
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 9,
    		'producto_id' => 41
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 9,
    		'producto_id' => 43
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 9,
    		'producto_id' => 45
    	]);
    }
}
