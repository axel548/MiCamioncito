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
        Schema::create('viaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_cargamento');
            $table->bigInteger('id_equipo');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->string('tipo_viaje', 50);
            $table->timestamps();

            $table->foreign('id_cargamento')->references('id')->on('cargamentos');
            $table->foreign('id_equipo')->references('id')->on('equipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaje');
    }
};
