<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No_ECONOMICO')->nullable();
            $table->string('PLACA')->nullable();
            $table->string('FECHA')->nullable();
            $table->longText('DESCRIPCION')->nullable();
            $table->double('IMPORTE')->nullable();
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
        Schema::dropIfExists('mantenimiento');
    }
}
