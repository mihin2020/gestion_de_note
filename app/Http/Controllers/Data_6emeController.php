<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\eleves;

use Illuminate\Http\Request;

class Data_6emeController extends Controller
{
    public function display(){
       // $eleves=eleves::all();
        $eleves = eleves::where('classe','6 ème')->get();
        return view('/directeur.data_6eme',compact('eleves'));
    }
    public function show(){

       // $eleves = DB::table('eleves')->get()->where('classe','=','5ème');
      // $eleves = eleves::where('classe','5ème')->get();
     // $eleves = DB::select('select * from eleves where classe = 6 ème');
    
       // return view('/ajout_eleve',['eleves'=>$eleves]);
    }
}
