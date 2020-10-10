<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Person extends Authenticatable
{
    const CLIENT = 0;
    const PROFESSIONAL = 1;
    const USER = 2;

    protected string $onEditRedirectTo = '';

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

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function addresses()
    {
        return $this->hasMany('App\Address', 'person_id');
    }

    public function phones()
    {
        return $this->hasMany('App\Phone', 'person_id');
    }

    public function getCpfFormattedAttribute()
    {
        return preg_replace('/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/', '$1.$2.$3-$4', $this->cpf);
    }

}
