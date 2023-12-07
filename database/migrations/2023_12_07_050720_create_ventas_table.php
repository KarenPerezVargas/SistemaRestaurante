<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('idCliente')->on('clientes')->onDelete('cascade');
            $table->decimal('descuento', 8, 2)->default(0);
            $table->decimal('total', 8, 2)->default(0);
            $table->decimal('operacion_gravada', 8, 2)->default(0);
            $table->decimal('igv', 8, 2)->default(0);
            $table->decimal('total_pagar', 8, 2)->default(0);
            $table->decimal('importe_pagado', 8, 2)->default(0);
            $table->decimal('vuelto', 8, 2)->default(0);
            $table->timestamps();
        });

        Schema::create('venta_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venta_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('venta_productos');
        Schema::dropIfExists('ventas');
    }
}
