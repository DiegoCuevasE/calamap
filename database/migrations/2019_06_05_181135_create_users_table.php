<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_usuario')->nullable();
            $table->string('apellido_usuario', 50);
            $table->string('password_usuario');
            $table->string('telefono_usuario', 15);
            $table->string('celular_usuario',15);
            $table->string('email_usuario')->unique();
            $table->date('fechaNac_usuario')->nullable();
            $table->string('nacionalidad_usuario')->nullable();
            $table->boolean('genero_usuario')->nullable();
            $table->string('tipo_usuario',20);
            $table->boolean('estado_usuario');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
