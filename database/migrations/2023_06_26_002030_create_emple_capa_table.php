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
        Schema::create('emple_capa', function (Blueprint $table) {
            $table->id('idEC');
            $table->unsignedBigInteger('idCapacitacion');
            $table->unsignedBigInteger('idEmpleado');
            $table->timestamps();

            // $table->foreign('idemple')->references('idEmpleado')->on('personal');
            $table->foreign('idCapacitacion')->references('idCapacitacion')->on('capacitaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emple_capa');
    }
};
