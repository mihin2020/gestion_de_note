<?php

namespace App\Http\Controllers;

use App\eleves;
use App\Parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Ajout_eleveController extends Controller
{
    public function display()
    {
        $classes=Parametre::all();
        $eleves=eleves::all();
        return view('/directeur.ajout_eleve',compact('eleves'),compact('Parametre'));
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'nom'=> ['required','string'],
                'prenom'=> ['required','string'],
                'sexe'=> ['required','string'],
                'date'=> ['required'],
                'email'=> ['required','email'],
                'numero'=> ['required'],
                'classe'=> ['required','string'],
                'password'=> ['required','min:3','max:6',],
                'password_confirm'=> ['required',],
            ]);

        $eleve = new eleves();
        $eleve->nom =$request->input('nom');
        $eleve->prenom =$request->input('prenom');
        $eleve->sexe =$request->input('sexe');
        $eleve->date =$request->input('date');
        $eleve->email =$request->input('email');
        $eleve->numero =$request->input('numero');
        $eleve->classe =$request->input('classe');
        $eleve->password = Hash::make(request('password'));
        $eleve->password_confirm =Hash::make(request('password_confirm'));
        $eleve->save();
        return redirect()->intended('/ajout_eleve');
    }

    public function show()
    {
        $classes=Parametre::all();
        $eleves = DB::table('eleves')->get();
        return view('/directeur.ajout_eleve',[
            'eleves'=>$eleves,
            'classes'=>$classes,
        ]);
    }
    public function destroy($id)
    {
        DB::delete('delete from eleves where id =?' , [$id]);
        return redirect('/ajout_eleve');
    }
}
