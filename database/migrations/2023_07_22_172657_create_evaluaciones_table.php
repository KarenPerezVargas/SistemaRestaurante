<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id('idEvaluacion');
            $table->string('asuntoEvaluacion', 60);
            $table->date('fechaEvaluacion');
            $table->string('areaEvaluacion', 20);
            $table->unsignedBigInteger('idEmpleado');
            $table->timestamps();

            $table->foreign('idEmpleado')->references('idEmpleado')->on('personal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluaciones');
    }
};
