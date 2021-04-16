<?php

namespace App\Http\Controllers;

use App\Parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard_directeurController extends Controller
{
    public function display (Request $request ) {
      $parametres = Parametre::all();
      return view('/index', compact('parametres'));  

      /* 
        $recup =DB::select('select nom from utilisateurs where email=?',[$request->input('email')]);
        $affi = utilisateurs::all();
        */
    }
}
