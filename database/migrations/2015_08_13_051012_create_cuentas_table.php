<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id_cuenta');
            $table->string('red_local')->nullable();
            $table->string('red_inalambrica')->nullable();
            $table->string('usuario_dominio')->nullable();
            $table->string('password_dominio')->nullable();
            $table->string('usuario_local')->nullable();
            $table->string('password_local')->nullable();
            $table->string('correo_outlook')->nullable();
            $table->string('password_outlook')->nullable();
            $table->string('password_pst')->nullable();
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
        Schema::drop('cuentas');
    }
}
