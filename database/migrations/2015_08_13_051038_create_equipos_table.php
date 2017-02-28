<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id_equipo');
            $table->integer('ram');
            $table->integer('disco_duro');
            $table->string('procesador');
            $table->string('so');
            $table->string('paqueteria')->nullable();
            $table->string('antivirus')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('s_n')->nullable();
            $table->string('s_tag')->nullable();
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
        Schema::drop('equipos');
    }
}
