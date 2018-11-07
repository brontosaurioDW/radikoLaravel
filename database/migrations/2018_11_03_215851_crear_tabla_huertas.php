<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaHuertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huertas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('huerta', 100);
            $table->bigInteger('cuit');
            $table->string('razon_social', 100);
            $table->string('direccion', 100)->nullable();
            $table->tinyInteger('cantidad_max_envios');
            $table->string('foto', 255);
            $table->boolean('destacado');
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedInteger('id_tipo_huerta');
            $table->foreign('id_tipo_huerta')->references('id')->on('tipo_huerta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huertas');
    }
}
