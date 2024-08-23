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
        Schema::create('Mantenimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No_ECONOMICO')->nullable();
            $table->string('PLACA')->nullable();
            $table->date('FECHA')->nullable();
            $table->longText('DESCRIPCION')->nullable();
            $table->string('LUGAR')->nullable();
            $table->double('IMPORTE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mantenimiento');
    }
}
