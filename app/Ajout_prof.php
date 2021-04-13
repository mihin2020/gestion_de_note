<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajout_prof extends Model
{
    protected $fillable = [
        'nom', 'prenom','classe', 'email', 'password', 'password_confirm',
    ];
}
