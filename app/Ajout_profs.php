<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajout_profs extends Model
{
    protected $fillable = [
        'nom', 'prenom','classe', 'email', 'password', 'password_confirm',
    ];
}
