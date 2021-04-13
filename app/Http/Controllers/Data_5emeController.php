<?php

namespace App\Http\Controllers;
use App\eleves;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Data_5emeController extends Controller
{
    public function display(){
        $eleves = eleves::where('classe','5ème')->get();
        return view('/directeur.data_5eme',compact('eleves'));
    }
    public function show(){

        // $eleves = DB::table('eleves')->get()->where('classe','=','5ème');
       // $eleves = eleves::where('classe','5ème')->get();
      // $eleves = DB::select('select * from eleves where classe = 5ème');
     
       //  return view('/ajout_eleve',['eleves'=>$eleves]);
     }
}

