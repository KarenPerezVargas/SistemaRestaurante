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
        Schema::create('kardex', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('kardex_fecha');
            $table->unsignedBigInteger('producto_id');
            $table->string('kardex_movimiento');
            $table->integer('kardex_cantidad');
            $table->decimal('kardex_precio', 10, 2);
            $table->decimal('kardex_total', 10, 2);
            $table->foreign('producto_id')->references('id')->on('producto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kardex');
    }
};
