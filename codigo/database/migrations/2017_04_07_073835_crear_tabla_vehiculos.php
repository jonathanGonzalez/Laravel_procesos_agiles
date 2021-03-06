<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id'); // *
            $table->string('tipo')->nullable();
            $table->string('marca')->nullable();        
            $table->string('placa')->nullable();
            $table->string('color')->nullable();
            //$table->integer('user_id')->nullable();
            $table->timestamps(); // *
            //$table->foreign('user_id')->references('id')->on('users');           
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
