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
        Schema::create('personal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->integer('dpi');
            $table->dateTime('horario_disponible_inicio');
            $table->dateTime('horario_disponible_fin');
            $table->bigInteger('id_tipo');
            $table->timestamps();

            $table->foreign('id_tipo')->references('id')->on('tipopersonal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
};
