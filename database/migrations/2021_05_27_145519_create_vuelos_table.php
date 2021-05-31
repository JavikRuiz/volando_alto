<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_avion');
            $table->foreignId('id_lugar');
            $table->string('piloto',100);
            $table->string('copiloto',100);
            $table->timestamps();
            //
            $table->foreign('id_avion')->references('id')->on('avion');
            $table->foreign('id_lugar')->references('id')->on('lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelo');
    }
}
