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
        Schema::create('conductor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_vehiculo');
            $table->bigInteger('id_conductor');
            $table->integer('distancia_disponibilidad');
            $table->timestamps();

            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
            $table->foreign('id_conductor')->references('id')->on('personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductor');
    }
};
