<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOtorga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otorga', function (Blueprint $table) {
            $table->increments('cod_otorga');
            //foreanea de servicio
            $table->unsignedInteger('cod_servicio');
            $table->foreign('cod_servicio', 'fk_otorga_servicio')->references('cod_servicio')->on('servicio')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de mype
            $table->unsignedInteger('cod_mype');
            $table->foreign('cod_mype', 'fk_otorga_mype')->references('cod_mype')->on('mype')->onDelete('cascade')->onUpdate('cascade');
            //
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
        Schema::dropIfExists('otorga');
    }
}
