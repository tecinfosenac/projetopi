<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_turmas', function (Blueprint $table) {
            $table->bigIncrements('pss_id_turma');
            $table->string('pss_codigo_turma');
            $table->unsignedBigInteger('pss_id_instrutor');
            $table->foreign('pss_id_instrutor')->references('pss_id_instrutor')->on('pss_instrutores');
            $table->unsignedBigInteger('pss_id_curso');
            $table->foreign('pss_id_curso')->references('pss_id_curso')->on('pss_cursos');
            $table->date('pss_data_inicio');            
            $table->date('pss_data_final');            
            $table->time('pss_horario');              
            $table->integer('pss_qnt_alunos');
            $table->boolean('pss_situacao');
            

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
        Schema::dropIfExists('pss_turmas');
    }
}
