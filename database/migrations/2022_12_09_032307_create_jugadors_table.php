<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->increments('id_jug');
            $table->string('nombre_jug');
            $table->string('cedula_jug')->unique();
            $table->string('telefono_jug')->unique();
            $table->string('correo_jug')->unique();
            $table->string('observaciones_jug');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jugadors');
    }
}
