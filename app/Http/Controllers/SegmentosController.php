<?php

namespace App\Http\Controllers;

use App\Segmentos;
use Exception;
use Illuminate\Http\Request;

class SegmentosController extends Controller

{
    public function index()

    {

        return view('pages.users.segments.create_segments');
    }

    public function noSelect()
    {
        //
    }

    public function create(Request $request)

    {

        try{

        $segCurso = new Segmentos();

        $segCurso->pss_segmento = $request->set_segment;
        $segCurso->save();

        return redirect()->route('named_route', ['parameterKey' => 'value']);

        }catch(Exception $e){

        echo $e->getMessage();

    }
    }

    public function actionSeach(Request $request)

    {

        try{

        $segCurso = $request->set_segment;
        $segCurso = Segmentos::where('segCurso', 'LIKE', "%$segCurso%")->get();

        return redirect()->route('named_route', ['parameterKey' => 'value'], compact('pss_segmento'));

    }catch(Exception $e){

        echo $e->getMessage();

    }
    }

    public function show(Segmentos $segmentos)

    {

        $SegCursos=Segmentos::all();

        return view('pages.users.segments.list_segments');

    }

    public function edit(Segmentos $segmentos)
    {
        return view('pages.users.segments.edit_segments');
    }

    public function update(Request $request, Segmentos $segmentos)

    {

        try{

            Segmentos::find('id')->update(['pss_segmento'=>$request->set_segment]);

            return redirect()->route('named_route', ['parameterKey' => 'value']);

        }catch(Exception $e){

            echo $e->getMessage();
        }
    }

    public function destroy(Segmentos $segmentos)

    {
        //
    }
}
