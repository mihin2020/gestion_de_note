<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class No_confirmController extends Controller
{
    public function wrong(){
        return view('/no_confirm');
    }
}
