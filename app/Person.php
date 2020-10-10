<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

abstract class Person extends Authenticatable
{
    const CLIENT = 0;
    const PROFESSIONAL = 1;
    const USER = 2;

    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'nascimento',
        'email',
        'foto',
        'senha',
        'tipo',
    ];

    protected $table = 'people';

    protected $dates = [
        'nascimento',
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    public function addresses()
    {
        return $this->hasMany('App\Address', 'person_id');
    }

    public function phones()
    {
        return $this->hasMany('App\Phone', 'person_id');
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }

}
