<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Query Scope
    public function scopeName($query, $name){
        if($name)
            return $query->where('name', 'LIKE' ,"%$name%");
    }

    public function scopeEmail($query, $email){
        if($email)
            return $query->where('email', 'LIKE' ,"%$email%");
    }

    public function scopeBio($query, $bio){
        if($bio)
            return $query->where('bio', 'LIKE' ,"%$bio%");
            // tambien se puede utilizar orWhere para ampliar el rango de busqueda
            // return $query->orWhere('bio', 'LIKE' ,"%$bio%");
    }
}
