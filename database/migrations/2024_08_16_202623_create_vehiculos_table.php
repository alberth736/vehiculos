<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No_ECONOMICO')->nullable();
            $table->string('MARCA')->nullable();
            $table->string('TIPO')->nullable();
            $table->integer('MODELO')->nullable();
            $table->string('PLACA')->nullable();
            $table->string('No_SERIE')->nullable();
            $table->string('No_MOTOR')->nullable();
            $table->string('AREA_ASIGNACION')->nullable();
            $table->string('RESGUARDANTE')->nullable();
            $table->timestamps();
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
