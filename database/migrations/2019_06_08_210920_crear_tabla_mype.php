<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypes', function (Blueprint $table) {
            $table->increments('id');
            /*foreanea de usuario
            $table->unsignedInteger('usuario_id');
            $table->foreign('cod_usuario', 'fk_mype_usuario')->references('cod_usuario')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            */
            $table->string('nombre_fantasia_mype', 20);
            $table->string('razon_social_mype', 100);           
            $table->string('direccion_mype', 50);
            $table->string('descripcion_mype', 254);
            $table->string('horario_mype', 254);
            $table->boolean('estado_mype');
            $table->string('telefono_mype', 15);
            $table->string('celular_mype', 15);
            $table->string('correo_mype', 50);
            $table->string('pagina_mype', 50);
            $table->string('red_social_mype', 50);
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
        Schema::dropIfExists('mype');
    }
}
