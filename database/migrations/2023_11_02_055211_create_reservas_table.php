<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
{
    Schema::create('reserva', function (Blueprint $table) {
        $table->id();
        $table->date('reserva_fecha');
        $table->time('reserva_hora');
        $table->integer('reserva_cantidad');
        $table->string('reserva_estado');
        $table->unsignedBigInteger('cliente_id'); // Clave foránea para la relación con la tabla cliente
        $table->unsignedBigInteger('mesa_id'); // Clave foránea para la relación con la tabla mesa
        $table->timestamps();
    });

    Schema::table('reserva', function (Blueprint $table) {
        $table->foreign('cliente_id')->references('id')->on('cliente');
        $table->foreign('mesa_id')->references('id')->on('mesa');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
