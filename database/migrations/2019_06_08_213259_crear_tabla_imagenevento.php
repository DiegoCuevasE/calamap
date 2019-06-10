<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImagenevento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenevento', function (Blueprint $table) {
            $table->increments('cod_imagen_evento');
            //foreanea de evento
            $table->unsignedInteger('cod_evento');
            $table->foreign('cod_evento', 'fk_imagenevento_evento')->references('cod_evento')->on('evento')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('enlace_imagen_mype', 254);
            $table->string('tipo_imagen_mype', 15);
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
        Schema::dropIfExists('imagenevento');
    }
}
