<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajout_matController extends Controller
{
    public function display(){
        return view('/directeur.ajout_mat');
    }
}
