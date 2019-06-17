<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('cod_evento');
            //foreanea de usuario
            $table->unsignedInteger('cod_usuario');
            $table->foreign('cod_usuario', 'fk_evento_usuario')->references('cod_usuario')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de sitio turistico
            $table->unsignedInteger('cod_turistico');
            $table->foreign('cod_turistico', 'fk_evento_sitioturistico')->references('cod_turistico')->on('sitioturisticos')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('titulo_evento', 25);
            $table->string('descripcion_evento',254);
            $table->dateTime('fecha_evento');
            $table->string('tipo_evento', 20);
            $table->string('hashtag_evento', 254);
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
        Schema::dropIfExists('evento');
    }
}
