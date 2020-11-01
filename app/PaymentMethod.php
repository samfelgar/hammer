<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'number',
        'valid_until',
        'holder',
    ];

    public function client()
    {
        return $this->belongsTo('App\Client', 'person_id');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
