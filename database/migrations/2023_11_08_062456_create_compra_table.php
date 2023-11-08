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
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->date('fecha');
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('transporte_id');
            $table->string('indicaciones');
            $table->string('origen');
            $table->string('destino');
            $table->decimal('total', 10, 2);
            $table->foreign('proveedor_id')->references('id')->on('proveedor');
            $table->foreign('transporte_id')->references('id')->on('transporte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra');
    }
};
