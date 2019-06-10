<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPosee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posee', function (Blueprint $table) {
            $table->increments('cod_posee');
            //foreanea de locomocion
            $table->unsignedInteger('cod_locomocion');
            $table->foreign('cod_locomocion', 'fk_posee_locomocion')->references('cod_locomocion')->on('locomocion')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de mype
            $table->unsignedInteger('cod_mype');
            $table->foreign('cod_mype', 'fk_posee_mype')->references('cod_mype')->on('mype')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('posee');
    }
}
