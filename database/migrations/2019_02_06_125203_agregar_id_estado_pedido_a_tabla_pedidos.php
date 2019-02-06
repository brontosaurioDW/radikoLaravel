<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarIdEstadoPedidoATablaPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('pedidos', function(Blueprint $table) {
			$table->unsignedInteger('id_estado_pedido');
			$table->foreign('id_estado_pedido')->references('id')->on('estados_pedidos');
		});	
    }
	
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
