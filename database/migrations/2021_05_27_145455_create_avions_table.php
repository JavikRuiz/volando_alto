<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_avion');
            $table->string('identificacion', 100);
            $table->integer('cant_pasajeros');
            $table->timestamps();
            //
            $table->foreign('id_tipo_avion')->references('id')->on('tipo_avion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avion');
    }
}
