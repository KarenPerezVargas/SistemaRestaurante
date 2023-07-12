<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emple_capa', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('idemple');
            $table->unsignedBigInteger('idcapa');
            $table->float('calificacion');
            $table->timestamps();

            $table->primary('idemple', 'idcapa');
            $table->foreign('idemple')->references('id')->on('users');
            $table->foreign('idcapa')->references('idCapacitacion')->on('capacitaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emple_capa');
    }
};
