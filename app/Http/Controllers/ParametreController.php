<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parametre;
use Illuminate\Support\Facades\DB;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = new Parametre();
        $param->annee =$request->input('annee');
        $param->semestre =$request->input('semestre');
        $param->classe =$request->input('classe');
        $param->save();
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $parametres = DB::table('parametres')->get();
        return view('/index',['parametres'=>$parametres]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $param = Parametre::find($id);
        $params = Parametre::all();
        return view('/index', compact('parametre'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       
        $param = Parametre::find($id);
        $param->annee = $request->input('annee');
        $param->semestre =$request->input('semestre');
        $param->classe =$request->input('classe');
        $param->save();
        return 'okey';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from parametres where id =?' , [$id]);
        return redirect('/index');
    }
}
