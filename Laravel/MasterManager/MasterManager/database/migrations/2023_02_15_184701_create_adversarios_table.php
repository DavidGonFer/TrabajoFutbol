<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdversariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adversarios', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_adversario');
            $table->string('club');
            $table->string('categoria');
            $table->string('deporte');
            $table->string('temporada');
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
        Schema::dropIfExists('adversarios');
    }
}
