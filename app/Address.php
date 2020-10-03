<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'complemento',
    ];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
