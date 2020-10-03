<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

abstract class Person extends Authenticatable
{

    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'nascimento',
        'email',
        'foto',
    ];

    protected $dates = [
        'nascimento',
    ];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }

    public function professionals()
    {
        return $this->hasMany('App\Professional');
    }

}
