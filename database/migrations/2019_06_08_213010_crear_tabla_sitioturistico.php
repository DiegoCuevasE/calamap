<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSitioturistico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitioturisticos', function (Blueprint $table) {
            $table->increments('cod_turistico');
            //foreanea de usuario
            $table->unsignedInteger('cod_usuario');
            $table->foreign('cod_usuario', 'fk_sitioturistico_usuario')->references('cod_usuario')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('tipo_turistico', 50);
            $table->string('nombre_turistico', 50);
            $table->string('horario_turistico', 15);
            $table->string('direccion_turistico', 20);
            $table->string('descripcion_turistico', 254);
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
        Schema::dropIfExists('sitioturistico');
    }
}
