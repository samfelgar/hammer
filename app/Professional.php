<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Person
{
    public function person()
    {
        return $this->belongsTo('App\Person');
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
