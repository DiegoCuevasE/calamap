<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega', function (Blueprint $table) {
            $table->increments('cod_entrega');
            //foreanea de sitio turistico
            $table->unsignedInteger('cod_turistico');
            $table->foreign('cod_turistico', 'fk_entrega_sitioturistico')->references('cod_turistico')->on('sitioturisticos')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de servicio
            $table->unsignedInteger('cod_servicio');
            $table->foreign('cod_servicio', 'fk_entrega_servicio')->references('cod_servicio')->on('servicio')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('entrega');
    }
}
