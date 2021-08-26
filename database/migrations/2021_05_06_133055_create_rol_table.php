<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->id('CODROL');
            $table->string('NOMBRE');
            $table->string('DESCRIPCION');
        });

        Schema::table('usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('CODROL')->nullable();
            $table->foreign('CODROL')->references('CODROL')->on('rol')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol');
    }
}
