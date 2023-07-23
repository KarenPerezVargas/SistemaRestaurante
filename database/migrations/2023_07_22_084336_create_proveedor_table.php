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
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id();
            $table->string('pro_nombre');
            $table->string('pro_ruc');
            $table->string('pro_codigo');
            $table->string('pro_correo');
            $table->string('pro_descripcion');
            $table->string('pro_direccion');
            $table->string('pro_movil');
            $table->string('pro_forma_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor');
    }
};
