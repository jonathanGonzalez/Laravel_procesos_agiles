<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParqueosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parqueos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha')->nullable();
            $table->string('hora_entrada')->nullable();            
            $table->string('hora_salida')->nullable();
            $table->timestamps();

            $table->integer('persona_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('usuario_id')->unsigned();

            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parqueos');
    }
}
