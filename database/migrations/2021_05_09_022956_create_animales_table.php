<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('veterinario_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('condicion');
            $table->text('necesita');
            $table->text('imagen');
            $table->float('fondos',8,2);
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
        Schema::dropIfExists('animales');
    }
}
