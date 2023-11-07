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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('idPedido');
            $table->string('descripcion', 60);
            $table->float('precio');
            $table->integer('cantidad');
            $table->string('tipo', 40);
            $table->date('fecha');
            $table->integer('estado');
            $table->unsignedBigInteger('idCliente');
            $table->timestamps();

            $table->foreign('idCliente')->references('idCliente')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graficos_pedidos');
    }
};
