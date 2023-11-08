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
            $table->bigIncrements('id');
            $table->string('codigo_proveedor', 10);
            $table->string('nombre_proveedor', 50);
            $table->string('ciudad_proveedor', 70);
            $table->string('direccion_proveedor', 70);
            $table->string('email_proveedor', 50);
            $table->string('telefono_proveedor', 9);
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
