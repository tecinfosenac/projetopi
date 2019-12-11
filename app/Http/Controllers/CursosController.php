<?php

namespace App\Http\Controllers;

use App\Cursos;
use App\Segmentos;
use App\Tipos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller

{

    public function index()

    {

        $tipoCursos=Tipos::all();
        $segCursos=Segmentos::all();

        $cidades=DB::table('pss_cidades')->get();
		$estados=DB::table('pss_estados')->get();

        return view('pages.users.courses.create_courses')
        ->with('tipoCursos', $tipoCursos)
        ->with('segCursos', $segCursos)
        ->with('cidades', $cidades)
		->with('estados', $estados);

    }

    public function viewUpdate($id)

    {

        $cCurso=Cursos::where('pss_id_cursos', $id)->get();
        $tipoCursos=Tipos::all();
        $segCursos=Segmentos::all();

        $cidades=DB::table('pss_cidades')->get();

       return view('pages.users.courses.edit_courses')
       ->with('cCursos', $cCurso)
       ->with('tipoCursos', $tipoCursos)
       ->with('segCursos', $segCursos)
       ->with('cidades', $cidades);

    }

    public function create(Request $request)

    {

        try{

        $cCurso= new Cursos();

        $cCurso ->pss_codigo = $request->set_code;
        $cCurso ->pss_nome = $request ->set_name;
        $cCurso ->pss_duracao = $request ->set_up_time;
        $cCurso ->pss_habilitado = 1;

        $cCurso ->pss_id_tipo = $request ->set_type;
        $cCurso ->pss_id_segmento = $request ->set_segment;
        $cCurso ->pss_id_cidade = $request ->set_city;

        $cCurso ->save();

        return redirect()->route('named_route', ['parameterKey' => 'value']);

    }catch(Exception $e){

        echo $e->getMessage();

    }
    }

    public function actionSearch(Request $request)

    {

        try{

            $conteudo = $request->set_content;
            $nomeColuna = $request->set_column;

            if ($nomeColuna == 'pss_codigo'){

                $cCurso=Cursos::where("$nomeColuna", '=', "$conteudo")->get();

                return redirect()->route('named_route', ['parameterKey' => 'value'])
                ->with('cCourses', $cCurso);
            }

            elseif ($nomeColuna=='pss_segmento'){

                $conteudo = $request->set_content;
                $nomeColuna = $request->set_column;

                $cCurso=Cursos::where($nomeColuna, 'LIKE', "%$conteudo%")->get();

                return redirect()->route('named_route', ['parameterKey' => 'value'])
                ->with('cCourses', $cCurso);
            }

            elseif ($nomeColuna=='pss_tipo'){

                $conteudo = $request->set_content;
                $nomeColuna = $request->set_column;

                $cCurso=Cursos::where($nomeColuna, 'LIKE', "%$conteudo%")->get();

                return redirect()->route('named_route', ['parameterKey' => 'value'])
                ->with('cCourses', $cCurso);
            }

        }catch(Exception $e){

            echo $e->getMessage();

        }
    }

    public function show(Cursos $cursos)

    {

        $cCourses=Cursos::join('pss_tipos', 'pss_cursos.pss_id_tipo', '=', 'pss_tipos.pss_id_tipo')
        ->join('pss_segmentos', 'pss_cursos.pss_id_segmento', '=', 'pss_segmentos.pss_id_segmento')
        ->join('pss_cidades', 'pss_cursos.pss_id_cidade', '=', 'pss_cidades.pss_id_cidade')
        ->select('pss_cursos.*', 'pss_tipos.pss_tipo', 'pss_segmentos.pss_segmento', 'pss_cidades.pss_cidade')
        ->get();

        return view('pages.users.courses.list_courses', compact('cCourses'));

    }

    public function searchCurso(Cursos $cursos)

    {

        return view('pages.users.courses.search_courses');
    }

    public function update(Request $request, $id)

    {


        try{

            $cCurso=Cursos::where('pss_id_cursos', $id)->update(['pss_nome'=>$request->nomeCurso,
                                       'pss_duracao'=>$request->duraCurso,
                                       'pss_id_tipos'=>$request->tipoCurso,
                                       'pss_id_segmentos'=>$request->segCurso,
                                       'pss_id_cidades'=>$request->cidade]);

            return redirect()->route('named_route', ['parameterKey' => 'value']);

        }catch(Exception $e){

            echo $e->getMessage();
        }
    }

    public function destroy(Cursos $cursos)

    {
        //
    }
}
