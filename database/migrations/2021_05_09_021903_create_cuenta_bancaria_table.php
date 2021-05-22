<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaBancariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_bancaria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('veterinario_id');
            $table->string('nombre_propietario');
            $table->string('numero_cuenta');
            $table->string('banco');
            $table->timestamps();

            $table->foreign('veterinario_id')->references('id')->on('veterinarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_bancaria');
    }
}
