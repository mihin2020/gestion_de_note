<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'password_confirm',
    ];
}
