<?php

namespace App\Http\Controllers;

use App\notes;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request)
    {
     
        $notes = new notes();
        $notes ->eleves_id =$request->input('eleves_id');
        $notes ->matiere =$request->input('matiere');
        $notes ->coeficient =$request->input('coeficient');
        $notes ->note1 =$request->input('note1');
        $notes ->note2 =$request->input('note2');
        $notes ->note3 =$request->input('note3');
        $notes->save();
     
        return redirect('/ajout_note');
    }
}
