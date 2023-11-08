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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('idReserva');
            $table->dateTime('fecha_reserva');
            $table->dateTime('fecha_comida');
            $table->integer('num_comensales');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('mesa_id');
            $table->string('estado');
            $table->text('observaciones')->nullable();
            $table->integer('eliminado');
            $table->timestamps();

            $table->foreign('cliente_id')->references('idCliente')->on('clientes');
            $table->foreign('mesa_id')->references('idMesa')->on('mesas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
