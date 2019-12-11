<?php

namespace App\Http\Controllers;

use App\Instrutores;
use Illuminate\Http\Request;

class InstrutoresController extends Controller
{

    public function adicionar(){
        return view('pages.users.instructor.create_instructor');
    }

    public function salvar(Request $request){

        $instrutCurso = new Instrutores();

        $instrutCurso->pss_nome = $request->set_teacher;
        $instrutCurso->pss_habilitado = 1;
        $instrutCurso->save();
        return view('pages.users.instructor.list_instructor');

    }

            public function lista(){
            $instrutores = Instrutores::paginate(4);
            return view('pages.users.instructor.list_instructor', compact('instrutores'));
        }


        public function pesquisar(Request $request){
            $instrutor=$request->instrutCurso;
            $instrutCurso=Instrutor::where('pss_nome', 'LIKE', "%$nome%");
        }

        public function update(Request $request, $id ){
      
            Instrutores::find($id)->update([
            'pss_nome'=>$request->set_teacher,

             ]);
                    return view('pages.users.instructor.search_instructor');
         
}


}
