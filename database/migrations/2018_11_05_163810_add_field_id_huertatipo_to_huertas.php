<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldIdHuertatipoToHuertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huertas', function(Blueprint $table) {
            // $table->unsignedInteger('id_tipo_huerta');
            // $table->foreign('id_tipo_huerta')->references('id')->on('tipo_huerta');
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
