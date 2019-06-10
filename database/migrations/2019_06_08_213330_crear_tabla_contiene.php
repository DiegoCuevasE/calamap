<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContiene extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contiene', function (Blueprint $table) {
            $table->increments('cod_contiene');
            //foreanea de locomocion
            $table->unsignedInteger('cod_locomocion');
            $table->foreign('cod_locomocion', 'fk_contiene_locomocion')->references('cod_locomocion')->on('locomocion')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de sitio turistico
            $table->unsignedInteger('cod_turistico');
            $table->foreign('cod_turistico', 'fk_contiene_sitioturistico')->references('cod_turistico')->on('sitioturistico')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('contiene');
    }
}
