<?php

namespace App\Http\Controllers;

use App\matieres;
use App\eleves;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ajout_noteController extends Controller
{
    public function display(){
        $matieres=matieres::all();
        $eleves = eleves::where('classe','6 ème')->get();
        //dd($eleves);
        return view('/directeur.ajout_note',compact('eleves','matieres'));
        
    }
    public function show(){

        $matieres = DB::table('matieres')->get();
        return view('/directeur.ajout_note',['matieres'=>$matieres]);
    }
}
