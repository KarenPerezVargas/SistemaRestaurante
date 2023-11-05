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
        Schema::create('hojaCostos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('nombre_producto');
            $table->string('unidad_medida');
            $table->integer('cantidad');
            $table->string('precio_unit');
            $table->string('precio_total');
            $table->string('mano_obra');
            $table->string('indirectos');
            $table->string('margen_beneficio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hojaCostos');
    }
};
