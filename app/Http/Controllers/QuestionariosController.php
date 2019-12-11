<?php

namespace App\Http\Controllers;

use App\Questionarios;
use App\Codigos;
use Illuminate\Http\Request;

class QuestionariosController extends Controller
{
    public function index(Request $request) {
        // Redirecionar para a página de responder o Questionário
        if(Codigos::where('pss_codigo', $request->code)):
            return view('pages.client.form');
        else:
            return view('welcome');
        endif;
    }

    public function create(Request $request)
    {
        // Salvando um novo questionário no banco
        $quest = new Questionarios();
        $quest->pss_id_codigo = $request->set_hidden_code;
        $quest->feedback = $request->set_feedback;
        $quest->save();
        return view('welcome');
    }

    public function show(Questionarios $questionarios)
    {
        // Listando os questionários
        $quests = Questionarios::join('pss_codigos', 'pss_questionarios.pss_id_codigo', '=', 'pss_codigos.pss_id_codigo')
            ->join('pss_turmas', 'pss_codigos.pss_id_turma', '=', 'pss_turmas.pss_id_turma')
            ->join('pss_instrutores', 'pss_turmas.pss_id_turma', '=', 'pss_instrutores.pss_id_instrutor')
            ->join('pss_cursos', 'pss_turmas.pss_id_curso', '=', 'pss_cursos.pss_id_curso')
            ->select('pss_questionarios.*', 'pss_turmas.*', 'pss_instrutores.pss_instrutor', 'pss_cursos.*')
            ->get();
        return view('list', compact('quests'));
    }
}
