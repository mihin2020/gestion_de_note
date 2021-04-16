<?php

namespace App\Http\Controllers;


use App\Parametre;
use App\utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Ajout_profController extends Controller
{
   public function display(){
       $classes=Parametre::all();
       return view('/directeur.ajout_prof',compact('classes'));
   }
   public function store(Request $request)
    {
        request()->validate(
            [
                'nom'=> ['required','string'],
                'prenom'=> ['required','string'],
                'classe'=> ['required','string'],
                'email'=> ['required','email'],
                'password'=> ['required','min:3','max:6',],
                
            ]);

        $utilisateur = new utilisateurs();
        $utilisateur->nom =$request->input('nom');
        $utilisateur->prenom =$request->input('prenom');
        $utilisateur->classe =$request->input('classe');
        $utilisateur->email =$request->input('email');
        $utilisateur->password = Hash::make(request('password'));
        $utilisateur->password_confirm =Hash::make(request('password_confirm'));
        $utilisateur->save();
        return redirect()->intended('/ajout_prof');
    }

    public function show()
    {
        $classes=Parametre::all();
        $ajout_profs = DB::table('utilisateurs')->where('id','>','1')->get();
        return view('/directeur.ajout_prof',[
            'ajout_profs'=>$ajout_profs,
            'classes'=>$classes
        ]);
    }
    public function destroy($id)
    {
        DB::delete('delete from utilisateurs where id =?' , [$id]);
        return redirect('/ajout_prof');
    }


}
