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
            $table->unsignedInteger('servicio_id');
            $table->foreign('servicio_id', 'fk_entrega_servicios')->references('id')->on('servicios')->onDelete('cascade')->onUpdate('cascade');
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
