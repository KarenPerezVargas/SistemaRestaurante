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
        Schema::create('capacitaciones', function (Blueprint $table) {
            $table->id('idCapacitacion');
            $table->string('temaCapacitacion', 60);
            $table->date('fechaCapacitacion');
            $table->string('areaCapacitacion', 20);
            $table->unsignedBigInteger('idEmpleado');
            $table->timestamps();

            $table->foreign('idEmpleado')->references('idEmpleado')->on('personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitaciones');
    }
};
