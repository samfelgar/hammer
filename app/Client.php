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
        return $this->hasMany('App\PaymentMethod');
    }
}
