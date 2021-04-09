<?php

namespace App\Http\Controllers;

use App\utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ConnexionController extends Controller
{
    
   public function display () {
       return view('authentification/connexion');
   }

   public function login(Request $request ){

    request()->validate([
    'email'=> ['required','email'],
    'password'=> ['required','min:3','max:6'],
   ]);
/*

    if (Auth::attempt(['email'=> request('email'),'password'=> request('password')])) {
        // Authentication passed...
        return 'succes';

    }else{
        return 'wrong';
}*/
$credentials = $request->only('email', 'password');
       
$recup = DB::select('select id  from utilisateurs where email=?',[$request->input('email')]);//recuperation du mail pour la verification avec le statut


 if (Auth::attempt($credentials)&& $recup[0]->id ==1) {
     // Authentication passed...
     return view('/index');
 }elseif(Auth::attempt($credentials)&& ($recup[0]->id !==1)){
     return view('/index1');
 }else{
     return redirect()->intended('/connexion');
 }
   
}
}