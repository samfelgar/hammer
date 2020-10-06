<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Person
{
    public function __construct(array $attributes = [])
    {
        $this->tipo = parent::PROFESSIONAL;
        parent::__construct($attributes);
    }

    public function advertisements()
    {
        return $this->hasMany('App\Advertisements');
    }

    public function services()
    {
        return $this->hasMany('App\Services');
    }
}
