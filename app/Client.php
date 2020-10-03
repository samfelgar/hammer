<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Person
{
    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function paymentMethods()
    {
        return $this->hasMany('App\PaymentMethod');
    }
}
