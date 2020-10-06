<?php

namespace App;

class User extends Person
{
    public function __construct(array $attributes = [])
    {
        $this->tipo = parent::USER;
        parent::__construct($attributes);
    }
}
