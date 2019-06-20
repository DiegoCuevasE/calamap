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
            $table->increments('id');
            //foreanea de servicio
            $table->unsignedInteger('servicio_id');
            $table->foreign('servicio_id', 'fk_otorga_servicio')->references('id')->on('servicio')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de mype
            $table->unsignedInteger('mype_id');
            $table->foreign('mype_id', 'fk_otorga_mype')->references('id')->on('mype')->onDelete('cascade')->onUpdate('cascade');
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
