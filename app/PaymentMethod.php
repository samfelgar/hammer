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

    public function setNumberAttribute(string $number)
    {
        $this->attributes['number'] = preg_replace('/[^0-9]/', '', $number);
    }

    public function getNumberFormattedAttribute()
    {
        return preg_replace('/([0-9]{4})([0-9]{4})([0-9]{4})([0-9]{4})/', '$1 $2 $3 $4', $this->number);
    }
}
