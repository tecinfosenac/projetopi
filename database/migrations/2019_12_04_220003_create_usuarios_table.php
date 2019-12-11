<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_usuarios', function (Blueprint $table) {
            $table->bigIncrements('pss_id_usuario');
            $table->string('pss_nome');
            $table->bigInteger('pss_matricula')->unique();
            $table->string('pss_cpf')->unique();
            $table->unsignedBigInteger('pss_id_cargo');
            $table->foreign('pss_id_cargo')->references('pss_id_cargo')->on('pss_cargos');
            $table->string('pss_telefone')->nullable();
            $table->string('pss_celular');
            $table->string('pss_email')->unique();
            $table->string('pss_usuario')->unique();
            $table->string('pss_senha');
            $table->string('pss_habilitado');

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
        Schema::dropIfExists('pss_usuarios');
    }
}
