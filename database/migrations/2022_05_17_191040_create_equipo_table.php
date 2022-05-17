<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.id_equipo
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_conductor');
            $table->bigInteger('id_ayudante');
            $table->integer('viaticos_asignados');
            $table->integer('gastos_adicionales');
            $table->timestamps();

            $table->foreign('id_conductor')->references('id')->on('conductor');
            $table->foreign('id_ayudante')->references('id')->on('personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo');
    }
};
