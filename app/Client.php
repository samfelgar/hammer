<?php

namespace App;

class Client extends Person
{
    public function __construct(array $attributes = [])
    {
        $this->tipo = parent::CLIENT;
        parent::__construct($attributes);
    }

    public function paymentMethods()
    {
        return $this->hasMany('App\PaymentMethod', 'person_id');
    }

    public function services()
    {
        return $this->hasManyThrough('App\Service', 'App\PaymentMethod', 'person_id');
    }

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('tipo', parent::CLIENT);
    }
}
