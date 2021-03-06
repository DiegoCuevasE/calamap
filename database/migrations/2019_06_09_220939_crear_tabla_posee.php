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
        Schema::create('posees', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de locomocion
            $table->unsignedInteger('locomocion_id');
            $table->foreign('locomocion_id', 'fk_posees_locomocions')->references('id')->on('locomocions')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de mype
            $table->unsignedInteger('mype_id');
            $table->foreign('mype_id', 'fk_posees_mypes')->references('id')->on('mypes')->onDelete('cascade')->onUpdate('cascade');
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
