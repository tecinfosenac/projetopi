<?php

namespace App\Http\Controllers;

use App\Turmas;
use Exception;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    public function adicionar(){
    return view('pages.users.classes.create_classes');
}



    public function create(Request $request){


        $turmasController = new Turmas();

        $turmasController->pss_codigo_turma = $request->set_hidden_code;
        $turmasController->pss_id_instrutor = $request->set_teacher;
        $turmasController->pss_id_curso = $request->set_course;
        $turmasController->pss_data_inicio = $request->set_starter_date;
        $turmasController->pss_data_final = $request->set_final_date;
        $turmasController->pss_horario = $request->set_period;
        $turmasController->pss_qnt_alunos = $request->set_quantity_student;

        $turmasController->pss_situacao = 0 ;

        $turmasController->save();

        return view('pages.users.classes.list_classes');
    }


    public function listar(){
        $turmasController = Turmas::all();
        return view('pages.users.classes.search_classes')->with('turmas', $turmasController);
    }

     public function pesquisar($id){
         $get = Turmas::where('id', '=',  "$id")->get();
         return view('pages.users.classes.edit_classes' , compact('get'));
     }

     public function atualizar(Request $request, $id){
         try {
             Turmas::find($id)->update([
                 'pss_id_instrutor'=>$request->set_teacher,
                 'pss_id_curso'=>$request->set_course,
                 'pss_data_inicio'=>$request->set_starter_date,
                 'pss_data_final'=>$request->set_final_date,
                 'pss_horario'=>$request->set_period,
                 'pss_qnt_alunos'=>$request->set_quantity_student,
             ]);
             return view('pages.users.classes.edit_classes');
         }catch(Exception $e){
             echo $e->getmessage();
         }
     }

}
