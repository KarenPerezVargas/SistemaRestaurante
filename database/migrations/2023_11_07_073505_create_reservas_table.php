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
            $table->id(); // Campo de clave primaria
            $table->dateTime('fecha_reserva');
            $table->dateTime('fecha_comida');
            $table->integer('num_comensales');
            $table->unsignedBigInteger('cliente_id'); // Clave foránea hacia el cliente
            $table->unsignedBigInteger('mesa_id');    // Clave foránea hacia la mesa
            $table->decimal('precio', 10, 2);
            $table->string('estado');
            $table->text('observaciones')->nullable();
            $table->integer('pagado');
            $table->integer('eliminado');
            $table->timestamps(); // Campos para la fecha de creación y actualización

            // Definición de las claves foráneas hacia las tablas "clientes" y "mesas"
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
