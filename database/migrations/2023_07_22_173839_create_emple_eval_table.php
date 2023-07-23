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
        Schema::create('emple_eval', function (Blueprint $table) {
            $table->id('idEE');
            $table->unsignedBigInteger('idemple');
            $table->unsignedBigInteger('ideval');
            $table->float('calificacion')->nullable();
            $table->timestamps();

            $table->foreign('idemple')->references('idEmpleado')->on('personal');
            $table->foreign('ideval')->references('idEvaluacion')->on('evaluaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emple_eval');
    }
};
