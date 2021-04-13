<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class New_identifyController extends Controller
{
    public function display () {
        return view('authentification/new_connexion');
    }
    public function modification( Request $request){
        request()->validate([
            'email'=> ['required','email'],
            'password'=> ['required','confirmed','min:3','max:6'],
            'password_confirm'=> ['required'],
           ]);
    }
}
