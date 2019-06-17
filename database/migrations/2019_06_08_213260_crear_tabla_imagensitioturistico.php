<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImagensitioturistico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagensitioturistico', function (Blueprint $table) {
            $table->increments('cod_imagen_turistico');
            //foreanea de sitio turistico
            $table->unsignedInteger('cod_turistico');
            $table->foreign('cod_turistico', 'fk_imagensitioturistico_sitioturistico')->references('cod_turistico')->on('sitioturisticos')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('enlace_imagen_turistico', 254);
            $table->string('tipo_imagen_turistico', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagensitioturistico');
    }
}
