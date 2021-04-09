<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model implements Authenticatable 
{
    use  BasicAuthenticatable;
    
   
    protected $fillable = [
        'nom', 'prenom','classe', 'email', 'password', 'password_confirm',
    ];
   
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
}
