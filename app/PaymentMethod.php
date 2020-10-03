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
        return $this->belongsTo('App\Client');
    }
}
