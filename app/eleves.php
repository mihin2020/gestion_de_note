<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eleves extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'sexe', 'date' ,'email', 'numero', 'classe', 'password', 'password_confirm',
    ];
}
