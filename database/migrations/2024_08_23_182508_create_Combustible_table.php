<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombustibleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Combustible', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No_ECONOMICO')->nullable();
            $table->string('PLACA')->nullable();
            $table->date('FECHA')->nullable();
            $table->double('IMPORTE')->nullable();
            $table->double('LITROS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Combustible');
    }
}
