<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeterinariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('direccion_id');
            $table->unsignedBigInteger('cuenta_bancaria_id');
            $table->unsignedBigInteger('usuario_id');
            $table->string('rfc');
            $table->string('nombre_establecimiento');
            $table->string('nombre_propietario');
            $table->boolean('verificado');
            $table->timestamps();

            $table->foreign('direccion_id')->references('id')->on('direcciones');
            $table->foreign('cuenta_bancaria_id')->references('id')->on('cuenta_bancaria');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veterinarios');
    }
}
