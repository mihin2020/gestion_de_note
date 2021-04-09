<?php

namespace App\Http\Controllers;


use App\Parametre;
use App\utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ajout_profController extends Controller
{
   public function display(){
       $classes=Parametre::all();
       return view('/directeur.ajout_prof',compact('classes'));
   }
   public function store(Request $request)
    {
        $addp = new utilisateurs();
        $addp->nom =$request->input('nom');
        $addp->prenom =$request->input('prenom');
        $addp->classe =$request->input('classe');
        $addp->email =$request->input('email');
        $addp->password =$request->input('password');
        $addp->password_confirm =$request->input('password_confirm');
        $addp->save();
        return 'success';
    }
  
}
