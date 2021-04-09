<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\utilisateurs;
use Illuminate\Support\Facades\Hash;


class InscriptionController extends Controller
{
  public function display(){
      return view('authentification/inscription');
  }


  public function traitement(){

    request()->validate(
      [
          'nom'=> ['required','string'],
          'prenom'=> ['required','string'],
          'email'=> ['required','email'],
          'password'=> ['required','min:3','max:6'],
          'password_confirm'=> ['required'],
      ]);

    $utilisateurs = new utilisateurs();

    $utilisateurs->nom =request('nom');
    $utilisateurs->prenom =request('prenom');
    $utilisateurs->email =request('email');
    $utilisateurs->password = Hash::make(request('password'));
    $utilisateurs->password_confirm = Hash::make(request('password_confirm'));
    $utilisateurs->save();

    return view('/success');

}

}
