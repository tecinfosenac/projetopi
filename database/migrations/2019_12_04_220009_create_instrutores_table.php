<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @returs| void
     */
    public function up()
    {
        Schema::create('pss_instrutores', function (Blueprint $table) {
            $table->bigIncrements('pss_id_instrutor');
            $table->string('pss_instrutor');
            $table->boolean('pss_habilitado');
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
        Schema::dropIfExists('pss_instrutores');
    }
}
