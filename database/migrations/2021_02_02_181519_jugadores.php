<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tecnicas'))
        {
            Schema::create('tecnicas', function (Blueprint $table) {
                $table->id();
                $table->string("nombre_tecnica");
                $table->string("tipo");
                $table->string("img");
            });
        }
        if (!Schema::hasTable('jugadores'))
        {
            Schema::create('jugadores', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('apellido');
                $table->string('posicion');
                $table->integer('dorsal');
                //
                $table->unsignedBigInteger('tecnica_id');
                $table->foreign('tecnica_id')->references('id')->on('tecnicas')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
        Schema::dropIfExists('tecnicas');
    }
}
