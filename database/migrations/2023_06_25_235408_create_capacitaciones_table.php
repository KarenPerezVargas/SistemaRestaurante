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
            $table->unsignedBigInteger('idEmpleado');
            $table->string('areaCapacitacion', 20);
            $table->date('fechaCapacitacion');
            $table->unsignedBigInteger('idInstructor');
            $table->enum('estadoCapacitacion', ['pendiente', 'en curso', 'finalizada'])->default('pendiente');

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
