<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_vuelo');
            $table->foreignId('id_pasajero');
            $table->timestamps();
            //
            $table->foreign('id_vuelo')->references('id')->on('vuelo');
            $table->foreign('id_pasajero')->references('id')->on('pasajero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservacion');
    }
}
