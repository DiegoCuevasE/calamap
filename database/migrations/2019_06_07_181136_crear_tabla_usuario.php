<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('cod_usuario');
            $table->string('nombre_usuario', 50);
            $table->string('apellido_usuario', 50);
            $table->string('telefono_usuario', 15);
            $table->string('celular_usuario',15);
            $table->string('contraseña_usuario', 100);
            $table->dateTime('fecha_ingreso_usuario');
            $table->dateTime('fecha_salida_usuario');
            $table->string('nacionalidad_usuario', 15);
            $table->string('genero_usuario', 15);
            $table->date('fecha_nacimiento_usuario');
            $table->string('correo_usuario', 50);
            $table->string('tipo_usuario',20);
            $table->boolean('estado_usuario');
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
        Schema::dropIfExists('usuario');
    }
}
