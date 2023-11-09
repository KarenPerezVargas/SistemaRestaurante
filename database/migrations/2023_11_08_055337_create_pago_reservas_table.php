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
        Schema::create('pago_reservas', function (Blueprint $table) {
            $table->id(); // Campo de clave primaria
            $table->unsignedBigInteger('reserva_id'); // Clave foránea hacia la reserva
            $table->decimal('monto', 10, 2);
            $table->string('metodo_pago');
            $table->date('fecha_pago');
            $table->integer('eliminado');
            $table->timestamps(); // Campos para la fecha de creación y actualización

            // Definición de la clave foránea hacia la tabla "reservas"
            $table->foreign('reserva_id')->references('id')->on('reservas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago_reservas');
    }
};
