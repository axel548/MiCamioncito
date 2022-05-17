<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('porcentaje_cargo');
            $table->text('direccion_recepcion');
            $table->text('direccion_entrega');
            $table->text('documentacion')->nullable();
            $table->bigInteger('id_cliente');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargamentos');
    }
};
