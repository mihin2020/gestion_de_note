<?php

namespace App\Http\Controllers;

use App\matieres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ajout_matController extends Controller
{       
    public function display(){
        $matieres=matieres::all();
        return view('/directeur.ajout_mat',compact('matieres'));
    }
    
    public function store(Request $request)
    {
     
        $matieres = new matieres();
        $matieres ->matiere =$request->input('matiere');
        $matieres ->coeficient =$request->input('coeficient');
        $matieres->save();
     
        return redirect()->intended('/ajout_mat');
    }

    public function show(){

        $matieres = DB::table('matieres')->get();
        return view('/ajout_mat',['matieres'=>$matieres]);
    }
    public function destroy($id)
    {
        DB::delete('delete from matieres where id =?' , [$id]);
        return redirect('/ajout_mat');
    }
}
